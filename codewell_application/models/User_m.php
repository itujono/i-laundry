<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends MY_Model{
	
	protected $_table_name = 'codewell_users';
	protected $_order_by = 'idUSER';
	protected $_primary_key = 'idUSER';

	public $rules_user = array(
		'emailUSER' => array(
			'field' => 'emailUSER', 
			'label' => 'emailUSER', 
			'rules' => 'trim|required|valid_email'
		),
		'roleUSER' => array(
			'field' => 'roleUSER', 
			'label' => 'roleUSER', 
			'rules' => 'trim|required'
		),
		'passwordUSER' => array(
			'field' => 'passwordUSER', 
			'label' => 'passwordUSER', 
			'rules' => 'trim|required'
		)	  
	);

	public $rules_login = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Kata sandi',
			'rules' => 'trim|required'
		)
	);

	public $rules_login_customer = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email kamu',
			'rules' => 'trim|required|valid_email'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'password kamu',
			'rules' => 'trim|required'
		)
	);

	public $rules_changepassword = array(
		'oldpassword' => array(
			'field' => 'oldpassword',
			'label' => 'Kata sandi lama',
			'rules' => 'trim|required'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Kata sandi',
			'rules' => 'trim|required'
		),
		'repassword' => array(
			'field' => 'repassword',
			'label' => 'Ulangi kata sandi',
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idUSER = '';
		$new->emailUSER = '';
		$new->roleUSER = '';
		$new->passwordUSER = '';
		$new->statusUSER = '';
		return $new;
	}

	public function selectall_users($id=NULL){
		$this->db->select('users.*');

		$this->db->from('users');

        if($id != NULL){
            $this->db->where('users.idUSER',$id);
		}
		return $this->db->get();
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function login($email, $pass){
    	
    	$dat1 = array(
    		'emailUSER' => $email,
    		'passwordUSER' => $this->hash($pass)
    	);

    	$dat2 = array(
    		'emailCUSTOMER' => $email,
    		'passwordCUSTOMER' => $this->hash($pass)
    	);

    	$dat3 = array(
    		'emailUSER' => $email,
    		'passwordUSER' => $this->hash($pass)
    	);

    	$dat4 = array(
    		'emailPARTNER' => $email,
    		'passwordPARTNER' => $this->hash($pass)
    	);

    	$Administrator = $this->db->get_where('codewell_users',$dat1)->row();
    	$Customer = $this->db->get_where('codewell_customers',$dat2)->row();
    	$Karyawan = $this->db->get_where('codewell_users',$dat3)->row();
    	$Partner = $this->db->get_where('codewell_partner',$dat4)->row();

    	if(count($Customer)){
    		if($Customer->statusCUSTOMER == 1){
	    		$datacustomer = array(
	    			'Name' => $Customer->nameCUSTOMER,
	    			'Email' => $Customer->emailCUSTOMER,
	    			'idCUSTOMER' => $Customer->idCUSTOMER,
	    			'logged_in' => TRUE,
	    		);
	    		$this->session->set_userdata($datacustomer);
	    		return "CUSTOMER";
    		}
    	}

    	if(count($Administrator)){
    		$data = array(
    			'Email' => $Administrator->emailUSER,
    			'idUSER' => $Administrator->idUSER,
    			'roleUSER' => 22,
    			'logged_in' => TRUE,
    		);
    		$this->session->set_userdata($data);
    		return "ADMIN";
    	}

    	if(count($Karyawan)){
    		$data = array(
    			'Email' => $Karyawan->emailUSER,
    			'idUSER' => $Karyawan->idUSER,
    			'roleUSER' => 24,
    			'logged_in' => TRUE,
    		);
    		$this->session->set_userdata($data);
    		return "KARYAWAN";
    	}

    	if(count($Partner)){
    		$data = array(
    			'Name' => $Partner->namePARTNER,
    			'Email' => $Partner->emailPARTNER,
    			'idUSER' => $Partner->idPARTNER,
    			'roleUSER' => 26,
    			'logged_in' => TRUE,
    		);
    		$this->session->set_userdata($data);
    		return "PARTNER";
    	}	
    }

	public function logout(){
		$this->session->sess_destroy();
	}

	public function checkpartner($mail){
		$this->db->select('emailPARTNER');
		$this->db->from('partner');
		$this->db->where('emailPARTNER', $mail);

		return $this->db->get();
	}

	public function checkuser($mail){
		$this->db->select('emailUSER');
		$this->db->from('users');
		$this->db->where('emailUSER', $mail);

		return $this->db->get();
	}

	public function checkoldpasswordpartner($id){
		$this->db->select('idPARTNER, passwordPARTNER');
		$this->db->from('partner');
		$this->db->where('idPARTNER', $id);

		return $this->db->get();
	}

	public function checkoldpassword($id){
		$this->db->select('idUSER, passwordUSER');
		$this->db->from('users');
		$this->db->where('idUSER', $id);

		return $this->db->get();
	}
}