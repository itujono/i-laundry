<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Satuan_m');
		$this->load->model('Category_satuan_m');
		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 22 AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
	}

	public function index(){
		$this->satuanlist();
	}

	public function satuanlist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listsatuan'] = $this->Satuan_m->selectall_satuan()->result();
		$data['categorysatuan'] = $this->Category_satuan_m->select_all_category_drop(NULL, 1);
		foreach ($data['listsatuan'] as $key => $value) {
			if($value->statusSATUAN == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listsatuan'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getsatuan'] = $this->Satuan_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getsatuan'] = $this->Satuan_m->selectall_satuan($id)->row();
			$data['categorysatuan'] = $this->Category_satuan_m->select_all_category_drop(NULL, 1);
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Satuan', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savesatuan()
	{
		$rules = $this->Satuan_m->rules_satuan;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('numeric', 'Form %s adalah harus berbentuk angka');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Satuan_m->array_from_post(array('nameSATUAN','idCATEGORYSATUAN','statusSATUAN','priceSATUAN'));
			if($data['statusSATUAN'] == 'on')$data['statusSATUAN']=1;
			else $data['statusSATUAN']=0;
			$data['priceSATUAN'] = str_replace(['Rp.',' '], ['',''], $data['priceSATUAN']);
			
			$id = decode($this->input->post('idSATUAN'));
			if(empty($id))$id=NULL;

			if ($this->Satuan_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/satuan');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, data anda tidak bisa kami simpan, mohon dicoba kembali',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/satuan');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->satuanlist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statusSATUAN'] = $ss;
			$this->Satuan_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/satuan/satuanlist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data anda tidak bisa kami simpan, mohon dicoba kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/satuan/satuanlist');
		}
	}
}