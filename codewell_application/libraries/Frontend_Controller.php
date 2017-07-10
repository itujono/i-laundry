<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller{

	function __construct (){
    	parent::__construct();

    	$this->load->helper('codewell');
    	
    	$this->data['folBACKEND'] = $this->data['folder_admin'];
    	$this->data['frontendDIR'] = 'templates/frontend/';
    	$this->data['asfront'] = 'assets/frontend/';
    	$this->data['rootDIR'] = 'templates/';
	}

	function mail_config(){
    	$config['protocol'] = 'smtp';
        $config['smtp_host'] = '';
        $config['smtp_port'] = '587'; 
        $config['smtp_timeout'] = 30;
        $config['smtp_user'] = '';
        $config['smtp_pass'] = '';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        
        return $config;
	}
}