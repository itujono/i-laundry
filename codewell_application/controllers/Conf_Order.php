<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conf_Order extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Conf_Order');
	}
}
