<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('User_m');
		$this->load->model('Partner_m');
		$this->load->model('Attempts_m');
	}

	public function index(){
		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 22 AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
		$this->userlist();
	}

	public function userlist($id = NULL){
		$data['addONS'] = 'plugins_users';

		$id = decode(urldecode($id));

		$data['listuser'] = $this->User_m->selectall_users()->result();

		foreach ($data['listuser'] as $key => $value) {
			if($value->statusUSER == 1){
				$status='<a href="#" data-uk-tooltip title="Aktif"><i class="material-icons md-36 uk-text-success">&#xE86C;</i></a>';
			} else {
				$status='<a href="#" data-uk-tooltip title="Tak Aktif"><i class="material-icons  md-36 uk-text-danger">&#xE5C9;</i></a>';
			}
			$data['listuser'][$key]->status = $status;
		}

		if($id == NULL){
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getuser'] = $this->User_m->get_new();
		} else {
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getuser'] = $this->User_m->selectall_users($id)->row();

		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Users', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function saveuser()
	{
		$rules = $this->User_m->rules_user;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->User_m->array_from_post(array('emailUSER','roleUSER','statusUSER'));
			$data['roleUSER'] = decode($data['roleUSER']);
			if($data['statusUSER'] == 'on')$data['statusUSER']=1;
			else $data['statusUSER']=0;
			$id = decode($this->input->post('idUSER'));
			if(empty($id))$id=NULL;

			if ($this->User_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/user');
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, Sesuatu yang memalukan terjadi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/user');
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->userlist();
		}
	}

	public function actionedit($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['statususer'] = $ss;
			$this->User_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/user/userlist');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu yang memalukan terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/user/userlist');
		}
	}

	function checkbrute($email) {
	    $now = time();
	    $valid_attempts = $now - (2 * 60 * 60);

	    $idloginadmin = $this->User_m->checkuseradmin($email)->row();
	   
	    if($idloginadmin->roleUSER == 22 OR $idloginadmin->roleUSER == 24){
		    if(empty($idloginadmin)){
		    	$data = array(
		            'title' => 'Oops!',
		            'text' => 'Maaf, akun anda tidak terdaftar di data kami.',
		            'type' => 'danger'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect('codewelladmin/Login');
		    }

		    $attempts = $this->Attempts_m->checkingbruteadmin($idloginadmin->idUSER,$valid_attempts);
		    if($attempts  > 4){
		    	return true;
		    } else {
		    	return false;
		    }

		} else {

			$idloginpartner = $this->Partner_m->checkuserpartner($email)->row();
			if(empty($idloginpartner)){
		    	$data = array(
		            'title' => 'Oops!',
		            'text' => 'Maaf, akun anda tidak terdaftar di data kami.',
		            'type' => 'danger'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect('codewelladmin/Login');
		    }

		    $attempts_partner = $this->Attempts_m->checkingbrutepartner($idloginpartner->idPARTNER, $valid_attempts);
		    if($attempts_partner  > 4){
		    	return true;
		    } else {
		    	return false;
		    }
		}
	}

	public function login(){
		
		$rules = $this->User_m->rules_login;
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == TRUE){

			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			
			$attemptslogin = $this->checkbrute($email);

			if($attemptslogin == true){

				$data = array(
		            'title' => 'Maaf!,',
		            'text' => 'Untuk sementara akun anda telah terkunci, silakan hubungi programmer anda untuk melaporkan masalah ini. Terima kasih!',
		            'type' => 'danger'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect('codewelladmin/Login');
			}

			if ($this->User_m->login($email, $pass) == "ADMIN") {

				$data = array(
		            'title' => 'Welcome!',
		            'text' => 'Hallo, Selamat datang kembali '. $this->session->userdata('Email').' !',
		            'type' => 'success'
		        );
		        
		        $this->session->set_flashdata('message',$data);
				redirect($this->data['folBACKEND'].'Customer');
				
			} elseif ($this->User_m->login($email, $pass) == "ROOT") {

				$data = array(
		            'title' => 'Welcome!',
		            'text' => 'Hallo, ROOT '. $this->session->userdata('Email').' !',
		            'type' => 'success'
		        );
		        
		        $this->session->set_flashdata('message',$data);
				redirect($this->data['folBACKEND'].'Customer');

			} elseif ($this->User_m->login($email, $pass) == "KARYAWAN") {

				$data = array(
		            'title' => 'Welcome!',
		            'text' => 'Hallo, Selamat datang '. $this->session->userdata('Email'),
		            'type' => 'success'
		        );
		        
		        $this->session->set_flashdata('message',$data);
				redirect($this->data['folBACKEND'].'Customer');

			} elseif ($this->User_m->login($email, $pass) == "PARTNER") {

				$data = array(
		            'title' => 'Welcome!',
		            'text' => 'Hallo, Selamat datang kembali '. $this->session->userdata('Name').' !',
		            'type' => 'success'
		        );
		        
		        $this->session->set_flashdata('message',$data);
				redirect($this->data['folBACKEND'].'Order');

			} else {
				$mailing = $this->input->post('email');

				$logindataadmin = $this->User_m->checkuseradmin($mailing)->row();
				$logindatapartner = $this->Partner_m->checkuserpartner($mailing)->row();

				if(!empty($logindataadmin)){
					$data['idUSER'] = $logindataadmin->idUSER;
					$data['timeATTEMPTS'] = time();
					$this->Attempts_m->save($data);
				} else {
					$data['idPARTNER'] = $logindatapartner->idPARTNER;
					$data['timeATTEMPTS'] = time();
					$this->Attempts_m->insertdatabrute($data);
				}

				$data = array(
		            'title' => 'Oops!',
		            'text' => 'Maaf, email dan kata sandi yang anda masukkan salah',
		            'type' => 'danger'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect('codewelladmin/Login');
			}
		} else {
			$data = array(
            'title' => 'Terjadi Kesalahan!',
            'text' => 'Maaf, Silakan ulangi email dan kata sandi anda dibawah!',
            'type' => 'warning'
        	);
        $this->session->set_flashdata('message',$data);
		redirect('codewelladmin/Login');
		}
	}

	public function Logout (){
		$this->session->unset_userdata('data');
		$this->User_m->logout();
		redirect('codewelladmin/login');
	}

	public function changepassword(){
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/Login');}

		$data['addONS'] = 'plugins_pagesettings';

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Settings', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function processchangepassword($id = NULL){
		$ids = decode($this->input->post('idUSER'));
		
		if(empty($ids)){
			$this->Logout();
		}

		$rules = $this->User_m->rules_changepassword;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

	    if($this->form_validation->run() == TRUE) {

			$oldpassword = $this->User_m->hash($this->input->post('oldpassword'));
			$password = $this->User_m->hash($this->input->post('password'));
			$renewpassword = $this->User_m->hash($this->input->post('repassword'));
		
			if($password != $renewpassword){
				$data = array(
		            'title' => 'Maaf!',
		            'text' => 'password baru kamu tidak sama dengan form konfirmasi password baru, mohon ulangi',
		            'type' => 'danger'
		        	);
		        $this->session->set_flashdata('message',$data);
				$this->changepassword();
			}
			$email = $this->session->userdata('Email');

			$cekiduser = $this->User_m->checkpartner($email)->row();
			$cekiduseradmin = $this->User_m->checkuser($email)->row();
			
			if(!empty($cekiduser)){

				$checkoldpasswordpartner = $this->User_m->checkoldpasswordpartner($ids)->row();

				if($oldpassword == $checkoldpasswordpartner->passwordPARTNER){

					$datas['passwordPARTNER'] = $this->User_m->hash($this->input->post('password'));
					$this->Partner_m->save($datas, $ids);
					$data = array(
						'title' => 'Sukses',
						'text' => 'Perubahan kata sandi telah berhasil dilakukan',
						'type' => 'success'
						);
					$this->session->set_flashdata('message', $data);
					redirect($_SERVER['HTTP_REFERER']);

				} else {

					$data = array(
						'title' => 'Terjadi Kesalahan',
						'text' => 'Maaf, kami tidak bisa merubah kata sandi anda, karena kata sandi lama anda tidak sama dengan yang anda masukkan sebelumnya, Mohon ulangi!.',
						'type' => 'warning'
						);
					$this->session->set_flashdata('message', $data);
					redirect($_SERVER['HTTP_REFERER']);
				}

			} elseif(!empty($cekiduseradmin)) {

				$checkoldpassword = $this->User_m->checkoldpassword($ids)->row();

				if($oldpassword == $checkoldpassword->passwordUSER){

					$data['passwordUSER'] = $this->User_m->hash($this->input->post('password'));
					$this->User_m->save($data, $ids);
					$data = array(
						'title' => 'Sukses',
						'text' => 'Perubahan kata sandi telah berhasil dilakukan',
						'type' => 'success'
						);
					$this->session->set_flashdata('message', $data);
					redirect($_SERVER['HTTP_REFERER']);

				} else {

					$data = array(
						'title' => 'Terjadi Kesalahan',
						'text' => 'Maaf, kami tidak bisa merubah kata sandi anda, karena kata sandi lama anda tidak sama dengan yang anda masukkan sebelumnya, Mohon ulangi!.',
						'type' => 'warning'
						);
					$this->session->set_flashdata('message', $data);
					redirect($_SERVER['HTTP_REFERER']);
				}
			}
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, mohon ulangi inputan form anda dibawah.',
	            'type' => 'error'
	        	);
	        $this->session->set_flashdata('message',$data);
	        $this->changepassword();
		}
	}

	public function userreset($id = NULL){
		$ids = decode($this->input->post('idUSER'));
		
		if(empty($ids)){
			$this->Logout();
		}

		$rules = $this->User_m->rules_reset;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

	    if($this->form_validation->run() == TRUE) {
			$password = $this->User_m->hash($this->input->post('passwordUSER'));
			$renewpassword = $this->User_m->hash($this->input->post('repasswordUSER'));

			if($password != $renewpassword){
				$data = array(
					'title' => 'Peringatan',
					'text' => 'Maaf kata sandi kamu tidak sama, silakan ulangi kembali!',
					'type' => 'warning'
					);
				$this->session->set_flashdata('message', $data);
				redirect($_SERVER['HTTP_REFERER']);
			}

				$datas['passwordUSER'] = $password;
				$this->User_m->save($datas, $ids);
				$data = array(
					'title' => 'Sukses',
					'text' => 'Perubahan kata sandi telah berhasil dilakukan',
					'type' => 'success'
					);
				$this->session->set_flashdata('message', $data);
				redirect($_SERVER['HTTP_REFERER']);
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, mohon ulangi inputan form anda.',
	            'type' => 'error'
	        	);
	        $this->session->set_flashdata('message',$data);
	        $this->userlist();
		}
	}
}