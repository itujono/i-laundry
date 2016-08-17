<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends MY_Model{
	
	protected $_table_name = 'codewell_customers';
	protected $_order_by = 'idCUSTOMER';
	protected $_primary_key = 'idCUSTOMER';

	public $rules_customer = array(
		'nameCUSTOMER' => array(
			'field' => 'nameCUSTOMER', 
			'label' => 'Nama Pelanggan', 
			'rules' => 'trim|required'
		),
		'emailCUSTOMER' => array(
			'field' => 'emailCUSTOMER', 
			'label' => 'Email Pelanggan', 
			'rules' => 'trim|required|valid_email'
		),
		'passwordCUSTOMER' => array(
			'field' => 'passwordCUSTOMER', 
			'label' => 'Kata sandi Pelanggan', 
			'rules' => 'trim|required'
		)		  
	);

	public $rules_recoverypass = array(
		'oldpasswordCUSTOMER' => array(
			'field' => 'oldpasswordCUSTOMER',
			'label'	=> 'Kata Sandi Lama kamu',
			'rules'	=> 'trim|required'
		),
		'passwordCUSTOMER' => array(
			'field' => 'passwordCUSTOMER',
			'label'	=> 'Kata Sandi Kamu',
			'rules'	=> 'trim|required'
		),
		'repasswordCUSTOMER' => array(
			'field' => 'repasswordCUSTOMER',
			'label'	=> 'Konfirmasi Kata Sandi Kamu',
			'rules'	=> 'trim|required'
		),
	);


	function __construct (){
		parent::__construct();
	}

	public function selectall_customers($id=NULL){
		$this->db->select('customers.*');

		$this->db->from('customers');

        if($id != NULL){
            $this->db->where('customers.idCUSTOMER',$id);
		}
		return $this->db->get();
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function checkuser($idCUSTOMER = NULL)
	{
		$this->db->select('idCUSTOMER');
		$this->db->from('customers');
		if (!empty($idCUSTOMER)){
			$this->db->where('customers.idCUSTOMER', $idCUSTOMER);
		}
		return $this->db->get();
	}

	public function checkoldpassword($id){
		$this->db->select('customers.idCUSTOMER, passwordCUSTOMER, emailCUSTOMER, nameCUSTOMER');
		$this->db->from('customers');
		$this->db->where('customers.idCUSTOMER', $id);
		return $this->db->get();
	}
}