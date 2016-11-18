<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_m extends MY_Model{
	
	protected $_table_name = 'codewell_satuan';
	protected $_order_by = 'idSATUAN';
	protected $_primary_key = 'idSATUAN';

	public $rules_satuan = array(
		'nameSATUAN' => array(
			'field' => 'nameSATUAN', 
			'label' => 'Nama Satuan', 
			'rules' => 'trim|required'
		),
		'idCATEGORYSATUAN' => array(
			'field' => 'idCATEGORYSATUAN', 
			'label' => 'Kategori Satuan', 
			'rules' => 'trim|required'
		),
		'priceSATUAN' => array(
			'field' => 'priceSATUAN', 
			'label' => 'Harga Satuan', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idSATUAN = '';
		$new->nameSATUAN = '';
		$new->priceSATUAN = '';
		$new->idCATEGORYSATUAN = '';
		$new->statusSATUAN = '';
		return $new;
	}

	public function selectall_satuan($id=NULL, $status=NULL){
		$this->db->select('*');
		$this->db->select('categorysatuan.idCATEGORYSATUAN, nameCATEGORYSATUAN');

		$this->db->from('satuan');

		$this->db->join('categorysatuan','categorysatuan.idCATEGORYSATUAN = satuan.idCATEGORYSATUAN');
		
		if($status != NULL){
        	$this->db->where('statusSATUAN',$status);
		}
        if($id != NULL){
            $this->db->where('idSATUAN',$id);
		}
		return $this->db->get();
	}
}