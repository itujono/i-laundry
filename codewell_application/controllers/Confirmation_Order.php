<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation_Order extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'confirmation_order');
	}
}