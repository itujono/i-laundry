<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Customer_m');
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/Login');}
	}

	public function index(){
		$this->customerlist();
	}

	public function customerlist(){
		$data['addONS'] = 'plugins_customer';

		$data['listcustomer'] = $this->Customer_m->selectall_customers()->result();

		foreach ($data['listcustomer'] as $key => $value) {
			if($value->statusCUSTOMER == 1){
				$status='md-bg-blue-900';
			} else {
				$status='md-bg-blue-A700';
			}
			$data['listcustomer'][$key]->status = $status;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        
		$data['subview'] = $this->load->view($this->data['backendDIR'].'Customer', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}
}