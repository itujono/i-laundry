<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password_Reset extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Password_Reset');
	}
}
