<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller{

	function __construct (){
		parent::__construct();
		$this->load->helper('codewell');

		$this->data['folBACKEND'] = $this->data['folder_admin'];
		$this->data['backendDIR'] = 'templates/backend/';
		$this->data['asback'] = 'assets/backend/';
		$this->data['rootDIR'] = 'templates/';
	}

	function mail_config(){
	$config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.codewell.id';
        $config['smtp_port'] = '587'; 
        $config['smtp_timeout'] = 30;
        $config['smtp_user'] = 'no-reply@i-laundry.co.id';
        $config['smtp_pass'] = '88+;P&IZlh9+';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        return $config;
	}
}