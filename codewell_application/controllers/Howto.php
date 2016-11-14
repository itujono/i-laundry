<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Howto extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
    }

	public function index(){
        
		if (!is_null($this->session->flashdata('message'))) {
        	$data['message'] = $this->session->flashdata('message');
        }

		$this->load->view($this->data['frontendDIR']. 'Howto',$data);
	}
}
