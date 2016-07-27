<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller {

	public function __construct (){
		parent::__construct();
	}

	public function index(){
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        } else {
        	$data['message'] = '';
        }

		$this->load->view($this->data['backendDIR']. 'Login', $data);
	}
}