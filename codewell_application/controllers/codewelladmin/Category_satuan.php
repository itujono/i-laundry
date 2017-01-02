<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_satuan extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Category_satuan_m');
		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 22 AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
	}

	public function index(){
		$this->categorysatuanlist();
	}

	public function categorysatuanlist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listcatsatuan'] = $this->Category_satuan_m->selectall_category()->result();

		foreach ($data['listcatsatuan'] as $key => $value) {
			if($value->statusCATEGORYSATUAN == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listcatsatuan'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getcatsatuan'] = $this->Category_satuan_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getcatsatuan'] = $this->Category_satuan_m->selectall_category($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Category_satuan', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savecategorysatuan()
	{
		$rules = $this->Category_satuan_m->rules_categorysatuan;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Category_satuan_m->array_from_post(array('nameCATEGORYSATUAN','statusCATEGORYSATUAN'));
			if($data['statusCATEGORYSATUAN'] == 'on')$data['statusCATEGORYSATUAN']=1;
			else $data['statusCATEGORYSATUAN']=0;
			$id = decode($this->input->post('idCATEGORYSATUAN'));
			if(empty($id))$id=NULL;

			if ($this->Category_satuan_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/category_satuan');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, data anda tidak bisa kami simpan, mohon dicoba kembali',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/category_satuan');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->categorysatuanlist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statusCATEGORYSATUAN'] = $ss;
			$this->Category_satuan_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/category_satuan/categorysatuanlist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data anda tidak bisa kami simpan, mohon dicoba kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/category_satuan/categorysatuanlist');
		}
	}
}