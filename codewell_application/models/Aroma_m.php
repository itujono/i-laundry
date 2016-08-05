<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aroma_m extends MY_Model{
	
	protected $_table_name = 'codewell_aroma';
	protected $_order_by = 'idAROMA';
	protected $_primary_key = 'idAROMA';

	public $rules_aroma = array(
		'nameAROMA' => array(
			'field' => 'nameAROMA', 
			'label' => 'nameAROMA', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idAROMA = '';
		$new->nameAROMA = '';
		$new->statusAROMA = '';
		return $new;
	}

	public function selectall_aroma($id=NULL){
		$this->db->select('aroma.*');
		$this->db->from('aroma');
        if($id != NULL){
            $this->db->where('aroma.idAROMA',$id);
		}
		return $this->db->get();
	}
}