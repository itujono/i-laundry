<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_confirmation extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Payment_confirmation');
	}
}