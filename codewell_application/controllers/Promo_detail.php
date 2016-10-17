<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo_detail extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Promo_detail');
	}
}