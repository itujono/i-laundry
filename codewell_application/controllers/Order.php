<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Customer_m');
        $this->load->model('Aroma_m');
        $this->load->model('Services_m');
        $this->load->model('Package_m');
		$this->load->model('Payment_m');
		$this->load->model('Order_m');
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

		$data['listaroma'] = $this->Aroma_m->selectall_aroma(NULL, 1)->result();
		$data['listservices'] = $this->Services_m->selectall_services(NULL, 1)->result();
		$data['listpackage'] = $this->Package_m->selectall_package(NULL, 1)->result();
		$data['listpayment'] = $this->Payment_m->selectall_payment(NULL, 1)->result();
		
		$this->load->view($this->data['frontendDIR']. 'Order',$data);
	}

	public function confirmation_order(){
		$rules = $this->Order_m->rules_order;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {

			$datas = $this->Order_m->array_from_post(array('pickuptimeORDER','pickupADDRESSORDERKOTOR','idAROMA','idSERVICES','idPACKAGE','idPAYMENT'));
			$datas['pickuptimeORDER'] = str_replace(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus' , 'September' , 'Oktober', 'November', 'Desember','Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', ',', ' '], ['01', '02', '03', '04', '05', '06', '07', '08' , '09' , '10', '11', '12', '', '', '', '', '', '', '', '','.'], $datas['pickuptimeORDER']);

			$datas['pickuptimeORDER'] = date("Y-m-d",strtotime($datas['pickuptimeORDER']));
			
			if(!empty($datas)){
				$data['confirm_order'] = $datas;
				$this->load->view($this->data['frontendDIR']. 'confirmation_order',$data);
			} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'salah wak data nya gak ada',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->index();
			}
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form anda dibawah.',
		            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->index();
		}

	}

	public function saveorder(){

		$rules = $this->Order_m->rules_order;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$datas = $this->Order_m->array_from_post(array('pickuptimeORDER','pickupADDRESSORDERKOTOR','idAROMA','idSERVICES','idPACKAGE','idPAYMENT'));
			$datas['pickuptimeORDER'] = str_replace(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus' , 'September' , 'Oktober', 'November', 'Desember','Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', ',', ' '], ['01', '02', '03', '04', '05', '06', '07', '08' , '09' , '10', '11', '12', '', '', '', '', '', '', '', '','.'], $datas['pickuptimeORDER']);
			// echo "<pre>";
			// print_r(date("Y-m-d",strtotime($datas['pickuptimeORDER'])));
			// break;
			if ($this->Order_m->save($datas)) {
                //$this->confirmation_order($data);
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
}
