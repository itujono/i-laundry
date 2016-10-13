<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_m extends MY_Model{
	
	protected $_table_name = 'codewell_services';
	protected $_order_by = 'idSERVICES';
	protected $_primary_key = 'idSERVICES';

	public $rules_services = array(
		'nameSERVICES' => array(
			'field' => 'nameSERVICES', 
			'label' => 'nameSERVICES', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idSERVICES = '';
		$new->nameSERVICES = '';
		$new->statusSERVICES = '';
		return $new;
	}

	public function selectall_services($id=NULL){
		$this->db->select('services.*');
		$this->db->from('services');
        $this->db->where('statusSERVICES', 1);
        if($id != NULL){
            $this->db->where('services.idSERVICES',$id);
		}
		return $this->db->get();
	}
}