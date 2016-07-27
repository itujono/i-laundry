<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_m extends MY_Model{
	
	protected $_table_name = 'codewell_area';
	protected $_order_by = 'idAREA';
	protected $_primary_key = 'idAREA';

	public $rules_area = array(
		'idREGION' => array(
			'field' => 'idREGION', 
			'label' => 'idREGION', 
			'rules' => 'trim|required'
		),
		'nameAREA' => array(
			'field' => 'nameAREA', 
			'label' => 'nameAREA', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idAREA = '';
		$new->idREGION = '';
		$new->nameAREA = '';
		$new->statusAREA = '';
		return $new;
	}

	public function selectall_area($id=NULL){
		$this->db->select('area.*');
		$this->db->select('regions.idREGION, nameREGION');

		$this->db->from('area');

		$this->db->join('regions','area.idREGION = regions.idREGION');

        if($id != NULL){
            $this->db->where('area.idAREA',$id);
		}
		return $this->db->get();
	}

	public function selectall_region($id=NULL, $dropdown=NULL){
		$this->db->from('regions');
        if($id != NULL) $this->db->where('regions.idREGION',$id);
        $this->db->where('regions.statusREGION', 1);
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idREGION] = $value->nameREGION;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}
}