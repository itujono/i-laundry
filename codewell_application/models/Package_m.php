<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_m extends MY_Model{
	
	protected $_table_name = 'codewell_packages';
	protected $_order_by = 'idPACKAGE';
	protected $_primary_key = 'idPACKAGE';

	public $rules_package = array(
		'namePACKAGE' => array(
			'field' => 'namePACKAGE', 
			'label' => 'namePACKAGE', 
			'rules' => 'trim|required'
		),
		'descriptionPACKAGE' => array(
			'field' => 'descriptionPACKAGE', 
			'label' => 'descriptionPACKAGE', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idPACKAGE = '';
		$new->namePACKAGE = '';
		$new->descriptionPACKAGE = '';
		$new->statusPACKAGE = '';
		return $new;
	}

	public function selectall_package($id=NULL, $status=NULL){
		$this->db->select('packages.*');

		$this->db->from('packages');
		if($status != NULL){
        	$this->db->where('statusPACKAGE',1);
		}
        if($id != NULL){
            $this->db->where('packages.idPACKAGE',$id);
		}
		return $this->db->get();
	}
}