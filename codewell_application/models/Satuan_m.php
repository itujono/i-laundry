<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_m extends MY_Model{
	
	protected $_table_name = 'codewell_satuan';
	protected $_order_by = 'idSATUAN';
	protected $_primary_key = 'idSATUAN';

	public $rules_jasa = array(
		'nameSATUAN' => array(
			'field' => 'nameSATUAN', 
			'label' => 'nameSATUAN', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idSATUAN = '';
		$new->nameSATUAN = '';
		$new->statusSATUAN = '';
		return $new;
	}

	public function selectall_satuan($id=NULL){
		$this->db->select('satuan.*');

		$this->db->from('satuan');

        if($id != NULL){
            $this->db->where('satuan.idSATUAN',$id);
		}
		return $this->db->get();
	}
}