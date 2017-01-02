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

	public function checkingbrute($idUSER = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM codewell_loginattempts WHERE idUSER = ".$idUSER." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	function deletedata($id){
        $this->db->where('idATTEMPTS', $id);
        $this->db->delete('loginattempts');
    }
}