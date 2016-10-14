<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends Frontend_Controller {

	public function Email_registrasi()
	{
		$this->load->view($this->data['frontendDIR']. 'Email_registrasi');
	}

	public function Email_forgot()
	{
		$this->load->view($this->data['frontendDIR']. 'Email_forgot');
	}

	public function Email_ordercompleted()
	{
		$this->load->view($this->data['frontendDIR']. 'Email_ordercompleted');
	}

	public function Email_promo()
	{
		$this->load->view($this->data['frontendDIR']. 'Email_promo');
	}

}