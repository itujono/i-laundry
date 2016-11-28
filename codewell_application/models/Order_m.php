<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_m extends MY_Model{
	
	protected $_table_name = 'codewell_orders';
	protected $_order_by = 'idORDER';
	protected $_primary_key = 'idORDER';

	public $rules_order = array(
		'pickuptimeORDER' => array(
			'field' => 'pickuptimeORDER', 
			'label' => 'Jam Jemput', 
			'rules' => 'required'
		),
		'pickupdateORDER' => array(
			'field' => 'pickupdateORDER', 
			'label' => 'Tanggal Jemput', 
			'rules' => 'required'
		),
		'pickupADDRESSORDERKOTOR' => array(
			'field' => 'pickupADDRESSORDERKOTOR', 
			'label' => 'Alamat Jemput', 
			'rules' => 'required'
		),
		'idAROMA' => array(
			'field' => 'idAROMA', 
			'label' => 'Aroma', 
			'rules' => 'required'
		),
		'idSERVICES' => array(
			'field' => 'idSERVICES', 
			'label' => 'Layanan', 
			'rules' => 'required'
		),
		'idPACKAGE' => array(
			'field' => 'idPACKAGE', 
			'label' => 'Paket', 
			'rules' => 'required'
		),
		'idREGION' => array(
			'field' => 'idREGION', 
			'label' => 'Daerah', 
			'rules' => 'required'
		)
	);

	public $rules_editorder = array(
		'pickupfinishedtimeORDER' => array(
			'field' => 'pickupfinishedtimeORDER', 
			'label' => 'Waktu Antar', 
			'rules' => 'required'
		),
		'pickupfinisheddateORDER' => array(
			'field' => 'pickupfinisheddateORDER', 
			'label' => 'Tanggal Antar', 
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

	public $rules_order_confirmation = array(
		'pickuptimeORDER' => array(
			'field' => 'pickuptimeORDER', 
			'label' => 'Jam Jemput', 
			'rules' => 'required'
		),
		'pickupdateORDER' => array(
			'field' => 'pickupdateORDER', 
			'label' => 'Tanggal Jemput', 
			'rules' => 'required'
		),
		'pickupADDRESSORDERKOTOR' => array(
			'field' => 'pickupADDRESSORDERKOTOR', 
			'label' => 'Alamat Jemput', 
			'rules' => 'required'
		),
		'idAROMA' => array(
			'field' => 'idAROMA', 
			'label' => 'Aroma', 
			'rules' => 'required'
		),
		'idSERVICES' => array(
			'field' => 'idSERVICES', 
			'label' => 'Layanan', 
			'rules' => 'required'
		),
		'idPACKAGE' => array(
			'field' => 'idPACKAGE', 
			'label' => 'Paket', 
			'rules' => 'required'
		),
		'idREGION' => array(
			'field' => 'idREGION', 
			'label' => 'Daerah', 
			'rules' => 'required'
		),
		'kodeORDER' => array(
			'field' => 'kodeORDER', 
			'label' => 'Kode Order', 
			'rules' => 'required|is_unique[codewell_orders.kodeORDER]'
		)
	);
	
	function __construct (){
		parent::__construct();
	}

	public function selectall_order($id=NULL, $id2= NULL, $status=NULL, $partner=NULL){
		$this->db->select('orders.*');
		$this->db->select('customers.nameCUSTOMER, emailCUSTOMER, telephoneCUSTOMER, mobileCUSTOMER, addressCUSTOMER');
		$this->db->select('aroma.nameAROMA');
		$this->db->select('packages.namePACKAGE');
		$this->db->select('services.nameSERVICES');

		$this->db->from('orders');
		$this->db->join('customers','customers.idCUSTOMER = orders.idCUSTOMER');
		$this->db->join('aroma','aroma.idAROMA = orders.idAROMA');
		$this->db->join('packages','packages.idPACKAGE = orders.idPACKAGE');
		$this->db->join('services','services.idSERVICES = orders.idSERVICES');
		
        if($id != NULL){
            $this->db->where('orders.idORDER',$id);
		}
		if($id2 != NULL){
            $this->db->where('customers.idCUSTOMER',$id2);
		}
		if($status != NULL){
            $this->db->where('orders.statusORDER',$status);
		}
		if($partner != NULL){
            $this->db->where('orders.idPARTNER',$partner);
		}
		return $this->db->get();
	}

	function counts($table=NULL,$filter=NULL, $session = NULL){
        $fil = '';
        if($filter != ''){
            $fil="WHERE $filter";
        }
        $sess = '';
        if($session != ''){
            $sess = " AND idPARTNER = $session";
        }
        $query = $this->db->query("SELECT statusORDER FROM $table $fil $sess");
        return $query->num_rows();
    }

    public function selectpartneronly($id=NULL){
		$this->db->select('orders.idPARTNER');
        $this->db->select('partner.namePARTNER');
		$this->db->from('orders');
		$this->db->join('partner','partner.idPARTNER = orders.idPARTNER');
		
        if($id != NULL){
            $this->db->where('orders.idORDER',$id);
		}

		return $this->db->get();
	}

	public function cekkode(){
		$this->db->select('max(kodeORDER) as kode');
		$this->db->from('orders');
		
		return $this->db->get();

	}

	public function checkkodeorder($kodeorder){
		$this->db->select('kodeORDER');
		$this->db->from('orders');
		$this->db->where('kodeORDER', $kodeorder);
		return $this->db->get();
	}

}