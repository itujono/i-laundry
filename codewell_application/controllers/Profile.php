<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Customer_m');
    }

	public function index() {
		$idCUSTOMER = $this->session->userdata('idCUSTOMER');
		if(empty($idCUSTOMER)){
			$data = array(
		            'text' => 'Maaf, kamu diharuskan untuk masuk/login terlebih dahulu.'
	        );
			$this->session->set_flashdata('message',$data);
			redirect(base_url());
		}

        $data['profile'] = $this->Customer_m->selectprofilecustomer($idCUSTOMER)->row();
        if(!empty($data['profile'])){

	        $map = directory_map('assets/upload/profile/'.folderENCRYPT($data['profile']->idCUSTOMER), FALSE, TRUE);

			if (empty($map)) {
				$data['profile']->imageCUSTOMER = base_url() . 'assets/frontend/images/ava.png';
			} else {
				$data['profile']->imageCUSTOMER = base_url() . 'assets/upload/profile/'.folderENCRYPT($data['profile']->idCUSTOMER).'/'.$map[0];
			}
        }
        if (!is_null($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
		$this->load->view($this->data['frontendDIR']. 'Profile',$data);
	}

	public function updatecustomer($id = NULL){
		$rules = $this->Customer_m->rules_update_customer;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
			$data = $this->Customer_m->array_from_post(array('nameCUSTOMER','telephoneCUSTOMER','mobileCUSTOMER','addressCUSTOMER'));
			$id = decode($this->input->post('idCUSTOMER'));
			if(empty($id)){
				redirect('Customer/logout');
			}

			$email = decode($this->input->post('emailCUSTOMER'));
			$filenameemail = str_replace(['@','.com'], ['',''], $email);
			
			$saveidCUSTOMER = $this->Customer_m->save($data, $id);
			
			if($saveidCUSTOMER != NULL) $Pic = $saveidCUSTOMER;

			$files = $_FILES['imgCUSTOMER'];
			$path = 'assets/upload/profile/'.folderENCRYPT($Pic);
			$map = directory_map($path, FALSE, TRUE);

			if(!empty($_FILES['imgCUSTOMER']['name'])){
				foreach ($map as $value) {
					unlink($path.'/'.$value);
				}
			}

			if (!file_exists( $path )){
            	mkdir($path, 0777, true);
        	}

			$config['upload_path']          = $path;
	      	$config['allowed_types']        = 'gif|jpg|png|jpeg';
	      	$config['max_size']             = 2048;
	      	$config['overwrite']             = TRUE;
	      	$config['file_name']             = 'Profil '.$filenameemail;

	      	$this->upload->initialize($config);

	      	if ($this->upload->do_upload('imgCUSTOMER')) {

				$data['uploads'] = $this->upload->data();
	        	$data = array(
	            'text' => 'Data kamu telah berhasil dirubah.'
	          );
	   		} else {

   			if ($_FILES['imgCUSTOMER']['error'] != 4) {
   				
					$data['upload_errors'] = $this->upload->display_errors();
					$data = array(
						'text' => $data['upload_errors'] . ' '.$msg,
						);
				} else {

					$data = array(
						'text' => 'Data kamu telah berhasil dirubah.',
						);
				}
      		}
	    	$this->session->set_flashdata('message', $data);
	  		redirect('Profile');
			} else {

					$data = array(
	          			'text' => 'Maaf, kami tidak dapat merubah data kamu, mohon ulangi beberapa saat lagi.'
	        			);
	        $this->session->set_flashdata('message',$data);
	        redirect('Profile');
			}
		}
}
