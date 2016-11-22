<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_review extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Order_review');
	}
}