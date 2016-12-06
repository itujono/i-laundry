<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Area_m');
		if(empty($this->session->userdata('idUSER')) OR $this->session->userdata('roleUSER') != 22){redirect('codewelladmin/user/Login/logout');}
	}

	public function index(){
		$this->arealist();
	}

	public function arealist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listarea'] = $this->Area_m->selectall_area()->result();

		foreach ($data['listarea'] as $key => $value) {
			if($value->statusAREA == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listarea'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getarea'] = $this->Area_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getarea'] = $this->Area_m->selectall_area($id)->row();

		}
		$data['region'] = $this->Area_m->selectall_region(NULL, 1);

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Area', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savearea()
	{
		$rules = $this->Area_m->rules_area;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Area_m->array_from_post(array('idREGION','nameAREA','statusAREA'));
			if($data['statusAREA'] == 'on')$data['statusAREA']=1;
			else $data['statusAREA']=0;
			$id = decode($this->input->post('idAREA'));
			if(empty($id))$id=NULL;

			if ($this->Area_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/area');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, Sesuatu yang memalukan terjadi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/area');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->arealist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statusarea'] = $ss;
			$this->Area_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/area/arealist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu yang memalukan terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/area/arealist');
		}
	}
}