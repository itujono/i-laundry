<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Settings');
	}
}
