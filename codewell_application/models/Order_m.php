<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_m extends MY_Model{
	
	protected $_table_name = 'codewell_orders';
	protected $_order_by = 'idORDER';
	protected $_primary_key = 'idORDER';

	function __construct (){
		parent::__construct();
	}

	public function selectall_order($id=NULL, $status=NULL){
		$this->db->select('orders.*');
		$this->db->select('customers.nameCUSTOMER, emailCUSTOMER, telephoneCUSTOMER, mobileCUSTOMER');
		$this->db->select('aroma.nameAROMA');
		$this->db->select('packages.namePACKAGE');
		$this->db->select('services.nameSERVICES');
		$this->db->select('jasa.nameJASA');
		$this->db->select('payment.namePAYMENT,descriptionPAYMENT');
		$this->db->select('area.nameAREA');
		$this->db->select('regions.nameREGION');


		$this->db->from('orders');
		$this->db->join('customers','customers.idCUSTOMER = orders.idCUSTOMER');
		$this->db->join('aroma','aroma.idAROMA = orders.idAROMA');
		$this->db->join('packages','packages.idPACKAGE = orders.idPACKAGE');
		$this->db->join('services','services.idSERVICES = orders.idSERVICES');
		$this->db->join('jasa','jasa.idJASA = orders.idJASA');
		$this->db->join('payment','payment.idPAYMENT = orders.idPAYMENT');
		$this->db->join('area','area.idAREA = orders.idAREA');
		$this->db->join('regions','regions.idREGION = area.idREGION');


        if($id != NULL){
            $this->db->where('orders.idORDER',$id);
		}
		if($status != NULL){
            $this->db->where('orders.statusORDER',$status);
		}
		return $this->db->get();
	}

	function counts($table=NULL,$filter=NULL){
        $fil = '';
        if($filter != ''){
            $fil="WHERE $filter";
        }
        $query = $this->db->query("SELECT statusORDER FROM $table $fil");
        return $query->num_rows();

    }
}