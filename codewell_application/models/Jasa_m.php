<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jasa_m extends MY_Model{
	
	protected $_table_name = 'codewell_jasa';
	protected $_order_by = 'idJASA';
	protected $_primary_key = 'idJASA';

	public $rules_jasa = array(
		'nameJASA' => array(
			'field' => 'nameJASA', 
			'label' => 'nameJASA', 
			'rules' => 'trim|required'
		),
		'pricesJASA' => array(
			'field' => 'pricesJASA', 
			'label' => 'pricesJASA', 
			'rules' => 'trim|required'
		)		  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idJASA = '';
		$new->nameJASA = '';
		$new->pricesJASA = '';
		$new->statusJASA = '';
		return $new;
	}

	public function selectall_jasa($id=NULL){
		$this->db->select('jasa.*');

		$this->db->from('jasa');

        if($id != NULL){
            $this->db->where('jasa.idJASA',$id);
		}
		return $this->db->get();
	}
}