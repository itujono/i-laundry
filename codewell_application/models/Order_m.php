<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_m extends MY_Model{
	
	protected $_table_name = 'codewell_orders';
	protected $_order_by = 'idORDER';
	protected $_primary_key = 'idORDER';

	public $rules_order = array(
		'pickuptimeORDER' => array(
			'field' => 'pickuptimeORDER', 
			'label' => 'pickuptimeORDER', 
			'rules' => 'required'
		),
		'pickupADDRESSORDERKOTOR' => array(
			'field' => 'pickupADDRESSORDERKOTOR', 
			'label' => 'pickupADDRESSORDERKOTOR', 
			'rules' => 'required'
		),
		'idAROMA' => array(
			'field' => 'idAROMA', 
			'label' => 'idAROMA', 
			'rules' => 'required'
		),
		'idSERVICES' => array(
			'field' => 'idSERVICES', 
			'label' => 'idSERVICES', 
			'rules' => 'required'
		),
		'idPACKAGE' => array(
			'field' => 'idPACKAGE', 
			'label' => 'idPACKAGE', 
			'rules' => 'required'
		),
		'idPAYMENT' => array(
			'field' => 'idPAYMENT', 
			'label' => 'idPAYMENT', 
			'rules' => 'required'
		)
	);

	public $rules_editorder = array(
		'pickupfinishedtimeORDER' => array(
			'field' => 'pickupfinishedtimeORDER', 
			'label' => 'Waktu Antar', 
			'rules' => 'required'
		),
		'pickupADDRESSORDERBERSIH' => array(
			'field' => 'pickupADDRESSORDERBERSIH', 
			'label' => 'Alamat Antar', 
			'rules' => 'required'
		),
		'beratORDER' => array(
			'field' => 'beratORDER', 
			'label' => 'Berat Order', 
			'rules' => 'required'
		),
		'priceORDER' => array(
			'field' => 'priceORDER', 
			'label' => 'Price Order', 
			'rules' => 'required'
		)
	);
	
	function __construct (){
		parent::__construct();
	}

	public function selectall_order($id=NULL, $id2= NULL, $status=NULL){
		$this->db->select('orders.*');
		$this->db->select('customers.nameCUSTOMER, emailCUSTOMER, telephoneCUSTOMER, mobileCUSTOMER, addressCUSTOMER');
		$this->db->select('aroma.nameAROMA');
		$this->db->select('packages.namePACKAGE');
		$this->db->select('payment.namePAYMENT,descriptionPAYMENT');
		$this->db->select('services.nameSERVICES');
		$this->db->select('partner.namePARTNER');

		$this->db->from('orders');
		$this->db->join('customers','customers.idCUSTOMER = orders.idCUSTOMER');
		$this->db->join('aroma','aroma.idAROMA = orders.idAROMA');
		$this->db->join('packages','packages.idPACKAGE = orders.idPACKAGE');
		$this->db->join('payment','payment.idPAYMENT = orders.idPAYMENT');
		$this->db->join('services','services.idSERVICES = orders.idSERVICES');
		$this->db->join('partner','partner.idPARTNER = orders.idPARTNER');

        if($id != NULL){
            $this->db->where('orders.idORDER',$id);
		}
		if($id2 != NULL){
            $this->db->where('customers.idCUSTOMER',$id2);
		}
		if($status != NULL){
            $this->db->where('orders.statusORDER',$status);
		}
		return $this->db->get();
	}

	function counts($table=NULL,$filter=NULL, $session = NULL){
        $fil = '';
        $session = $this->session->userdata('idCUSTOMER');
        if($session != ''){
            $fil="WHERE idCUSTOMER = $session";
        }
        if($filter != ''){
            $fil="WHERE $filter";
        }
        $query = $this->db->query("SELECT statusORDER FROM $table $fil");
        return $query->num_rows();
    }


}