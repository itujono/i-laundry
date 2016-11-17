<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Promo_m');
		$this->load->model('Partner_m');
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/user/Login/logout');}
	}

	public function index(){
		$this->promolist();
	}

	public function promolist($id = NULL){
		$data['addONS'] = 'plugins_datatables';

		$id = decode(urldecode($id));

		$data['listpromo'] = $this->Promo_m->selectall_promo()->result();

		foreach ($data['listpromo'] as $key => $value) {

			$map = directory_map('assets/upload/promo/'.folderENCRYPT($data['listpromo'][$key]->idPARTNER).'/'.folderENCRYPT($data['listpromo'][$key]->idPROMO), FALSE, TRUE);

			if (empty($map)) {
				$data['listpromo'][$key]->imagePROMO = base_url() . 'assets/upload/no_image_available.png';
			} else {
				$data['listpromo'][$key]->imagePROMO = base_url() . 'assets/upload/promo/'.folderENCRYPT($data['listpromo'][$key]->idPARTNER).'/'.folderENCRYPT($data['listpromo'][$key]->idPROMO).'/'.$map[0];
			}
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getpromo'] = $this->Promo_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getpromo'] = $this->Promo_m->selectall_promo($id)->row();
			$map = directory_map('assets/upload/promo/'.folderENCRYPT($data['getpromo']->idPARTNER).'/'.folderENCRYPT($id), FALSE, TRUE);
			
			if (empty($map)) {

				$data['getpromo']->imagePROMO = '';

			} else {

				$data['getpromo']->imagePROMO = base_url() . 'assets/upload/promo/'.folderENCRYPT($data['getpromo']->idPARTNER).'/'.folderENCRYPT($id).'/'.$map[0];
			}

		}
		$data['partners'] = $this->Partner_m->select_partner_drop(NULL, 1);

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Promo', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function savepromo()
	{
		$rules = $this->Promo_m->rules_promo;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Promo_m->array_from_post(array('idPARTNER','namePROMO','descriptionPROMO','statusPROMO','startPROMO','endPROMO'));
			if($data['statusPROMO'] == 'on')$data['statusPROMO']=1;
			else $data['statusPROMO']=0;
			$data['startPROMO'] = date("Y-m-d",strtotime($data['startPROMO'] ));
			$data['endPROMO'] = date("Y-m-d",strtotime($data['endPROMO'] ));
			$id = decode($this->input->post('idPROMO'));
			if(empty($id))$id=NULL;

			$subject = strtolower($this->input->post('namePROMO'));
			$filenamesubject = str_replace([' ','_'], ['',''], $subject);
			$partner = folderENCRYPT($this->input->post('idPARTNER'));

			$idpromo = $this->Promo_m->save($data, $id);
			if($idpromo != NULL) $Pic = $idpromo;

			$files = $_FILES['imagePROMO'];
			$path = 'assets/upload/promo/'.$partner.'/'.folderENCRYPT($Pic);
			$map = directory_map($path, FALSE, TRUE);

			if(!empty($_FILES['imagePROMO']['name'])){
				foreach ($map as $value) {
					unlink($path.'/'.$value);
				}
			}

			if (!file_exists( $path )){
            	mkdir($path, 0777, true);
        	}

			$config['upload_path']          = $path;
	      	$config['allowed_types']        = 'gif|jpg|png|jpeg';
	      	//$config['max_size']             = 2048;
	      	$config['overwrite']             = TRUE;
	      	$config['file_name']             = 'Promo '.$filenamesubject;

	      	$this->upload->initialize($config);

	      	if ($this->upload->do_upload('imagePROMO')) {

				$data['uploads'] = $this->upload->data();
	        	$data = array(
	            	'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
	          	);

	   		} else {

   				if ($_FILES['imagePROMO']['error'] != 4) {
				$data['upload_errors'] = $this->upload->display_errors();
				$data = array(
					'title' => 'Gagal',
					'text' => $data['upload_errors'].' '.$msg,
					'type' => 'error'
					);

				} else {

				$data = array(
					'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
					);
				}
      		}
	    	$this->session->set_flashdata('message', $data);
	  		redirect('codewelladmin/Promo');

		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'warning'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->promolist();
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

	public function deleteimgpromo($id1=NULL, $id2=NULL){
		if($id1 != NULL){

			$id = decode($id1);
			$map = directory_map('assets/upload/promo/'.folderENCRYPT($id2).'/'.folderENCRYPT($id), FALSE, TRUE);
			foreach ($map as $value) {
				unlink('assets/upload/promo/'.folderENCRYPT($id2).'/'.folderENCRYPT($id).'/'.$value);
			}
		}
		redirect('codewelladmin/Promo/promolist/'.$id1);
	}
}