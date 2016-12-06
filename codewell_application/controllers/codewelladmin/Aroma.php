<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aroma extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Aroma_m');
		$this->load->model('Region_m');
		if(empty($this->session->userdata('idUSER')) OR $this->session->userdata('roleUSER') != 22){redirect('codewelladmin/user/Login/logout');}
	}

	public function index(){
		$this->aromalist();
	}

	public function aromalist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listaroma'] = $this->Aroma_m->selectall_aroma()->result();
		$data['listregion'] = $this->Region_m->select_all_region_drop(NULL, 1);

		foreach ($data['listaroma'] as $key => $value) {
			if($value->statusAROMA == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listaroma'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getaroma'] = $this->Aroma_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getaroma'] = $this->Aroma_m->selectall_aroma($id)->row();

		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Aroma', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savearoma()
	{
		$rules = $this->Aroma_m->rules_aroma;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Aroma_m->array_from_post(array('nameAROMA','idREGION','statusAROMA'));
			if($data['statusAROMA'] == 'on')$data['statusAROMA']=1;
			else $data['statusAROMA']=0;
			$id = decode($this->input->post('idAROMA'));
			if(empty($id))$id=NULL;

			if ($this->Aroma_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/aroma');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, Sesuatu yang memalukan terjadi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/aroma');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->aromalist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statusaroma'] = $ss;
			$this->Aroma_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/aroma/aromalist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu yang memalukan terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/aroma/aromalist');
		}
	}
}