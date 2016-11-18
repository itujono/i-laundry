<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_satuan_m extends MY_Model{
	
	protected $_table_name = 'codewell_categorysatuan';
	protected $_order_by = 'idCATEGORYSATUAN';
	protected $_primary_key = 'idCATEGORYSATUAN';

	public $rules_categorysatuan = array(
		'nameCATEGORYSATUAN' => array(
			'field' => 'nameCATEGORYSATUAN', 
			'label' => 'Nama kategori satuan', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idCATEGORYSATUAN = '';
		$new->nameCATEGORYSATUAN = '';
		$new->statusCATEGORYSATUAN = '';
		return $new;
	}

	public function selectall_category($id=NULL, $status=NULL){
		$this->db->select('*');
		$this->db->from('categorysatuan');

		if($status != NULL){
        	$this->db->where('statusCATEGORYSATUAN',$status);
		}
        if($id != NULL){
            $this->db->where('idCATEGORYSATUAN',$id);
		}
		return $this->db->get();
	}

	public function select_all_category_drop($id = NULL, $dropdown=NULL){
        $this->db->select('*');
        $this->db->from('categorysatuan');
        $this->db->where('statusCATEGORYSATUAN', 1);
        if($id != NULL)$this->db->where('idCATEGORYSATUAN', $id);
        if($dropdown != NULL){
            $ddown = array();
            foreach ($this->db->get()->result() as $value) {
                $ddown[$value->idCATEGORYSATUAN] = $value->nameCATEGORYSATUAN;
            }
            return $ddown;
        }else{
            return $this->db->get();
        }
    }
}