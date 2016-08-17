<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function index(){

		if (!is_null($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
		$this->load->view($this->data['frontendDIR']. 'Home');
	}
}
