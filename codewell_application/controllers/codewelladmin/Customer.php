<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Customer_m');
		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 22 AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
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

		$map = directory_map('assets/upload/profile/'.folderENCRYPT($value->idCUSTOMER), FALSE, TRUE);
			if(!empty($map)){
				$value->imageSELLER = base_url() . 'assets/upload/profile/'.folderENCRYPT($value->idCUSTOMER).'/'.$map[0];
			} else {
				$value->imageSELLER = base_url() . 'assets/frontend/img/photos/user.png';
			}

		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        
		$data['subview'] = $this->load->view($this->data['backendDIR'].'Customer', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}
}