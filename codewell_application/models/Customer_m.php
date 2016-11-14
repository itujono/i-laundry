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

	public $rules_resetpass = array(
		'passwordCUSTOMER' => array(
			'field' => 'passwordCUSTOMER',
			'label'	=> 'Kata Sandi Kamu',
			'rules'	=> 'trim|required|matches[repasswordCUSTOMER]|min_length[8]'
		),
		'repasswordCUSTOMER' => array(
			'field' => 'repasswordCUSTOMER',
			'label'	=> 'Konfirmasi Kata Sandi Kamu',
			'rules'	=> 'trim|required|matches[passwordCUSTOMER]|min_length[8]'
		),
	);

	public $rules_update_customer = array(
		'nameCUSTOMER' => array(
			'field' => 'nameCUSTOMER',
			'label'	=> 'Nama kamu',
			'rules'	=> 'trim|required'
		),
		'emailCUSTOMER' => array(
			'field' => 'emailCUSTOMER',
			'label'	=> 'Email Kamu',
			'rules'	=> 'trim|required'
		),
		'telephoneCUSTOMER' => array(
			'field' => 'telephoneCUSTOMER',
			'label'	=> 'Nomor telepon Kamu',
			'rules'	=> 'trim|required|numeric|min_length[9]|max_length[14]'
		),
		'mobileCUSTOMER' => array(
			'field' => 'mobileCUSTOMER',
			'label'	=> 'Nomor handphone kamu',
			'rules'	=> 'trim|required|numeric|min_length[9]|max_length[14]'
		),
		'addressCUSTOMER' => array(
			'field' => 'addressCUSTOMER',
			'label'	=> 'Alamat kamu',
			'rules'	=> 'trim|required'
		)
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

	public function selectprofilecustomer($id){
		$this->db->select('customers.idCUSTOMER, nameCUSTOMER, emailCUSTOMER, addressCUSTOMER, telephoneCUSTOMER, mobileCUSTOMER');
		$this->db->from('customers');
		$this->db->where('customers.idCUSTOMER', $id);
		return $this->db->get();
	}
	public function selectprofilecustomer_inhome($id){
		$this->db->select('idCUSTOMER, nameCUSTOMER, addressCUSTOMER');
		$this->db->from('customers');
		$this->db->where('idCUSTOMER', $id);
		return $this->db->get();
	}

	public function checkemailcustomer($email = NULL){
		$this->db->select('idCUSTOMER, nameCUSTOMER, emailCUSTOMER');
		$this->db->from('customers');
		if (!empty($email)){
			$this->db->where('customers.emailCUSTOMER', $email);
		}
		return $this->db->get();
	}
}