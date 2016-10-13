<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_m extends MY_Model{
	
	protected $_table_name = 'codewell_payment';
	protected $_order_by = 'idPAYMENT';
	protected $_primary_key = 'idPAYMENT';

	public $rules_payment = array(
		'namePAYMENT' => array(
			'field' => 'namePAYMENT', 
			'label' => 'namePAYMENT', 
			'rules' => 'trim|required'
		),
		'descriptionPAYMENT' => array(
			'field' => 'descriptionPAYMENT', 
			'label' => 'descriptionPAYMENT', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idPAYMENT = '';
		$new->namePAYMENT = '';
		$new->descriptionPAYMENT = '';
		$new->statusPAYMENT = '';
		return $new;
	}

	public function selectall_payment($id=NULL, $status=NULL){
		$this->db->select('payment.*');

		$this->db->from('payment');
		if($status != NULL){
        	$this->db->where('statusPAYMENT',1);
		}
        if($id != NULL){
            $this->db->where('payment.idPAYMENT',$id);
		}
		return $this->db->get();
	}
}