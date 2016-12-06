<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aroma_m extends MY_Model{
	
	protected $_table_name = 'codewell_aroma';
	protected $_order_by = 'idAROMA';
	protected $_primary_key = 'idAROMA';

	public $rules_aroma = array(
		'nameAROMA' => array(
			'field' => 'nameAROMA', 
			'label' => 'Nama Aroma', 
			'rules' => 'trim|required'
		),
		'idREGION' => array(
			'field' => 'idREGION', 
			'label' => 'Daerah', 
			'rules' => 'required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idAROMA = '';
		$new->idREGION = '';
		$new->nameAROMA = '';
		$new->statusAROMA = '';
		return $new;
	}

	public function selectall_aroma($id=NULL, $status=NULL){
		$this->db->select('aroma.*');
		$this->db->select('regions.idREGION, nameREGION');
		$this->db->from('aroma');
		$this->db->join('regions','regions.idREGION = aroma.idREGION');
        if($status != NULL){
        	$this->db->where('statusAROMA',1);
		}
        if($id != NULL){
            $this->db->where('aroma.idAROMA',$id);
		}
		return $this->db->get();
	}
}