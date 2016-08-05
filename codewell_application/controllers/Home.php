<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Home');
	}
}
