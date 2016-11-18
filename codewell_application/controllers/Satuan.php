<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Satuan_m');
        $this->load->model('Category_satuan_m');
    }

    public function index(){
        
    	$data['listsatuan'] = $this->Satuan_m->selectall_satuan()->result();

    	$data['listcatsatuan'] = $this->Category_satuan_m->selectall_category()->result();
		
		if (!is_null($this->session->flashdata('message'))) {
        	$data['message'] = $this->session->flashdata('message');
        }

		$this->load->view($this->data['frontendDIR']. 'Satuan',$data);
	}
}