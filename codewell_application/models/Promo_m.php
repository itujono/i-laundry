<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_m extends MY_Model{
	
	protected $_table_name = 'codewell_promo';
	protected $_order_by = 'idPROMO';
	protected $_primary_key = 'idPROMO';

	public $rules_promo = array(
		'namePROMO' => array(
			'field' => 'namePROMO', 
			'label' => 'Judul Promo', 
			'rules' => 'trim|required'
		),
		'idPARTNER' => array(
			'field' => 'idPARTNER', 
			'label' => 'Partner Terkait', 
			'rules' => 'trim|required'
		),
		'descriptionPROMO' => array(
			'field' => 'descriptionPROMO', 
			'label' => 'Deskripsi Promo', 
			'rules' => 'trim|required'
		),
		'startPROMO' => array(
			'field' => 'startPROMO', 
			'label' => 'Mulai Promo', 
			'rules' => 'trim|required'
		),
		'endPROMO' => array(
			'field' => 'endPROMO', 
			'label' => 'Habis Promo', 
			'rules' => 'trim|required'
		),
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$promo = new stdClass();
		$promo->idPROMO = '';
		$promo->idPARTNER = '';
		$promo->namePROMO = '';
		$promo->imagePROMO = '';
		$promo->descriptionPROMO = '';
		$promo->startPROMO = '';
		$promo->endPROMO = '';
		$promo->statusPROMO = '';
		return $promo;
	}

	public function selectall_promo($id = null, $status = null)
	{
		$this->db->select('*');
		$this->db->from('promo');
		$this->db->from('partner');
		$this->db->where('promo.idPARTNER = partner.idPARTNER');

		if (!empty($id)) {
			$this->db->where('promo.idPROMO',$id);
		}

		if (!empty($status)) {
			$this->db->where('promo.statusPROMO',$status);
		}
		
		return $this->db->get();
	}

	public function select_promo_in_frontend(){
    	$this->db->select('promo.*');
    	$this->db->select('partner.namePARTNER');
    	
		$this->db->from('promo');
		$this->db->join('partner','partner.idPARTNER = promo.idPARTNER');

        $this->db->where('promo.statusPROMO',1);
        $this->db->where('now() BETWEEN promo.startPROMO AND codewell_promo.endPROMO');
        $this->db->order_by('idPROMO','DESC');
        return $this->db->get();
	}

}