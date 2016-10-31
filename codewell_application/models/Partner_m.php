<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner_m extends MY_Model{
	
	protected $_table_name = 'codewell_partner';
	protected $_order_by = 'idPARTNER';
	protected $_primary_key = 'idPARTNER';

	public $rules_partner = array(
		'namePARTNER' => array(
			'field' => 'namePARTNER', 
			'label' => 'Nama partner', 
			'rules' => 'required'
		),
		'passwordPARTNER' => array(
			'field' => 'passwordPARTNER', 
			'label' => 'kata sandi partner', 
			'rules' => 'required'
		),
		'addressPARTNER' => array(
			'field' => 'addressPARTNER', 
			'label' => 'Alamat partner', 
			'rules' => 'required'
		),
		'telephonePARTNER' => array(
			'field' => 'telephonePARTNER', 
			'label' => 'Telepon partner', 
			'rules' => 'required'
		),
		'idREGION' => array(
			'field' => 'idREGION', 
			'label' => 'Daerah partner', 
			'rules' => 'required'
		)	  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idPARTNER = '';
		$new->namePARTNER = '';
		$new->passwordPARTNER = '';
		$new->addressPARTNER = '';
		$new->telephonePARTNER = '';
		$new->idREGION = '';
		$new->ondutyPARTNER = '';
		$new->statusPARTNER = '';
		return $new;
	}

	public function selectall_partner($id=NULL, $status=NULL){
		$this->db->select('*');
		$this->db->from('partner');
        if($status != NULL){
        	$this->db->where('statusPARTNER',1);
		}
        if($id != NULL){
            $this->db->where('idPARTNER',$id);
		}
		return $this->db->get();
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}
}