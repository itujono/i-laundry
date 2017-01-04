<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attempts_m extends MY_Model{
	
	protected $_table_name = 'codewell_loginattempts';
	protected $_order_by = 'idATTEMPTS';
	protected $_primary_key = 'idATTEMPTS';

	function __construct (){
		parent::__construct();
	}

	public function selectallbrute(){
		$this->db->select('*');
		$this->db->select('users.emailUSER');
		$this->db->from('loginattempts');
		$this->db->join('users','users.idUSER = loginattempts.idUSER');
		return $this->db->get();
	}

	public function selectallbrutepartner(){
		$this->db->select('*');
		$this->db->select('partner.emailPARTNER');
		$this->db->from('loginattempts_partner');
		$this->db->join('partner','partner.idPARTNER = loginattempts_partner.idPARTNER');
		return $this->db->get();
	}

	public function selectallbrutecustomer(){
		$this->db->select('*');
		$this->db->select('customer.emailCUSTOMER');
		$this->db->from('loginattempts_customer');
		$this->db->join('customer','customer.idCUSTOMER = loginattempts_customer.idCUSTOMER');
		return $this->db->get();
	}

	public function checkingbruteadmin($idUSER = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM codewell_loginattempts WHERE idUSER = ".$idUSER." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	public function checkingbrutepartner($idPARTNER = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM codewell_loginattempts_partner WHERE idPARTNER = ".$idPARTNER." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	public function checkingbrutecustomer($idCUSTOMER = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM codewell_loginattempts_customer WHERE idCUSTOMER = ".$idCUSTOMER." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	function deletedata($id){
        $this->db->where('idUSER', $id);
        $this->db->delete('loginattempts');
    }

    function deletedatapartner($id){
        $this->db->where('idPARTNER', $id);
        $this->db->delete('loginattempts_partner');
    }

    function deletedatacustomer($id){
        $this->db->where('idCUSTOMER', $id);
        $this->db->delete('loginattempts_customer');
    }

    function insertdatabrute($data){
        $this->db->insert('loginattempts_partner', $data);
    }

    function insertdatabrutecustomer($data){
        $this->db->insert('loginattempts_customer', $data);
    }
}