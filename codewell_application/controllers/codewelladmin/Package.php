<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Package_m');
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/Login');}
	}

	public function index(){
		$this->packagelist();
	}

	public function packagelist($id = NULL){
		$data['addONS'] = 'plugins_payment';

		$id = decode(urldecode($id));

		$data['listpackage'] = $this->Package_m->selectall_package()->result();

		foreach ($data['listpackage'] as $key => $value) {
			if($value->statusPACKAGE == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listpackage'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getpackage'] = $this->Package_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getpackage'] = $this->Package_m->selectall_package($id)->row();

		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Package', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savepackage()
	{
		$rules = $this->Package_m->rules_package;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Package_m->array_from_post(array('namePACKAGE','descriptionPACKAGE','statusPACKAGE'));
			if($data['statusPACKAGE'] == 'on')$data['statusPACKAGE']=1;
			else $data['statusPACKAGE']=0;
			$id = decode($this->input->post('idPACKAGE'));
			if(empty($id))$id=NULL;

			if ($this->Package_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/package');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, Sesuatu yang memalukan terjadi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/package');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->packagelist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statuspackage'] = $ss;
			$this->Package_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/package/packagelist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu yang memalukan terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/package/packagelist');
		}
	}
}