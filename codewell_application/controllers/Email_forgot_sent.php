<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_forgot_sent extends Frontend_Controller {

	public function index()
	{
		$this->load->view($this->data['frontendDIR']. 'Email_forgot_sent');
	}
}