<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brute extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Attempts_m');
		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
	}

	public function index(){
		$this->brutelist();
	}

	public function brutelist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listbrute'] = $this->Attempts_m->selectallbrute()->result();

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Brute', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function deletedata($id){
		$id = decode(urldecode($id));
    	if ($this->Attempts_m->deletedata($id)) {
			$data = array(
                'title' => 'Sukses',
                'text' => 'Hapus Data berhasil dilakukan',
                'type' => 'success'
            );
            $this->session->set_flashdata('message',$data); 
        }
        redirect('codewelladmin/brute');
    }
}