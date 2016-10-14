<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_verified extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Account_verified');
	}
}