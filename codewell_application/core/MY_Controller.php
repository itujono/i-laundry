<?php
class MY_Controller extends CI_Controller {
	
	public $data = array();
	public function __construct() {
		parent::__construct();
		// $this->data['errors'] = array();
		$this->data['folder_admin'] = 'codewelladmin/';
	}
	
}