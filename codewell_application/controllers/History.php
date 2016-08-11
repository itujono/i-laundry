<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'History');
	}
}
