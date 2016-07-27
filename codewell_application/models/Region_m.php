<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region_m extends MY_Model{
	
	protected $_table_name = 'codewell_regions';
	protected $_order_by = 'idREGION';
	protected $_primary_key = 'idREGION';

	public $rules_region = array(
		'nameREGION' => array(
			'field' => 'nameREGION', 
			'label' => 'nameREGION', 
			'rules' => 'trim|required'
		)	  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idREGION = '';
		$new->nameREGION = '';
		$new->statusREGION = '';
		return $new;
	}

	public function selectall_region($id=NULL){
		$this->db->select('regions.*');

		$this->db->from('regions');

        if($id != NULL){
            $this->db->where('regions.idREGION',$id);
		}
		return $this->db->get();
	}
}