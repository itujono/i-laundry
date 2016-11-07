<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Partner_m');
		$this->load->model('Region_m');
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/user/Login/logout');}
	}

	public function index(){
		$this->partnerlist();
	}

	public function partnerlist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listpartner'] = $this->Partner_m->selectall_partner()->result();
		$data['region'] = $this->Region_m->select_all_region_drop(NULL, 1);

		foreach ($data['listpartner'] as $key => $value) {
			if($value->statusPARTNER == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listpartner'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getpartner'] = $this->Partner_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getpartner'] = $this->Partner_m->selectall_partner($id)->row();

		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Partner', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savepartner()
	{
		$rules = $this->Partner_m->rules_partner;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Partner_m->array_from_post(array('namePARTNER','passwordPARTNER','addressPARTNER','telephonePARTNER','idREGION','statusPARTNER'));
			if($data['statusPARTNER'] == 'on')$data['statusPARTNER']=1;
			else $data['statusPARTNER']=0;
			$data['passwordPARTNER'] = $this->Partner_m->hash($data['passwordPARTNER']);
			$id = decode($this->input->post('idPARTNER'));
			if(empty($id))$id=NULL;

			if ($this->Partner_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/partner');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, Sesuatu yang memalukan terjadi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/partner');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->partnerlist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statusPARTNER'] = $ss;
			$this->Partner_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/partner/partnerlist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu telah terjadi, silakan ulangi beberapa saat lagi!',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/partner/partnerlist');
		}
	}
}