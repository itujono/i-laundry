<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Region_m extends MY_Model{
	
	protected $_table_name = 'codewell_regions';
	protected $_order_by = 'idREGION';
	protected $_primary_key = 'idREGION';

	public $rules_region = array(
		'nameREGION' => array(
			'field' => 'nameREGION', 
			'label' => 'nameREGION', 
			'rules' => 'trim|required'
		)	  
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$new = new stdClass();
		$new->idREGION = '';
		$new->nameREGION = '';
		$new->statusREGION = '';
		return $new;
	}

	public function selectall_region($id=NULL,$status=NULL){
		$this->db->select('regions.*');

		$this->db->from('regions');

		if($status != NULL){
        	$this->db->where('statusREGION',1);
		}
        if($id != NULL){
            $this->db->where('regions.idREGION',$id);
		}

		return $this->db->get();
	}

	public function select_all_region_drop($id = NULL, $dropdown=NULL){
        $this->db->select('*');
        $this->db->from('regions');
        $this->db->where('statusREGION',1);
        if($id != NULL)$this->db->where('idREGION', $id);
        if($dropdown != NULL){
            $ddown = array();
            foreach ($this->db->get()->result() as $value) {
                $ddown[$value->idREGION] = $value->nameREGION;
            }
            return $ddown;
        }else{
            return $this->db->get();
        }
    }

    public function get_aroma_by_region($id){
  		$this->db->select('idAROMA, idREGION, nameAROMA');
  		$this->db->from('Aroma');
  		$this->db->where('idREGION',$id);

  		return $this->db->get();
 	}

 	public function selectall_regionbaseonaroma($status = NULL){
		$this->db->select('regions.*');
		$this->db->select('aroma.idAROMA, nameAROMA');
		$this->db->from('regions');
		$this->db->join('aroma','aroma.idREGION = regions.idREGION');
		$this->db->group_by('regions.nameREGION');
		if($status != NULL){
        	$this->db->where('statusREGION',1);
        	$this->db->where('statusAROMA',1);
		}

		return $this->db->get();
	}
}