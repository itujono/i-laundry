<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends Frontend_Controller {

	public function emailregistrasi()
	{
		$this->load->view($this->data['frontendDIR']. 'emailregistrasi');
	}

	public function emailforgotpassword()
	{
		$this->load->view($this->data['frontendDIR']. 'emailforgotpassword');
	}

	public function emailselesaiorder()
	{
		$this->load->view($this->data['frontendDIR']. 'emailselesaiorder');
	}

	Dst....
	ntar engko panggil nya di browser macam gini!
	localhost/codewell/email/emailregistrasi
	localhost/codewell/email/emailforgotpassword
	localhost/codewell/email/emailselesaiorder
	dst...

	samakan aja filename controller dan view-nya, biar tak bingung.

}