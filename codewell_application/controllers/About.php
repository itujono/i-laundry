<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'About');
	}
}