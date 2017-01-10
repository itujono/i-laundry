<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Customer_m');
        $this->load->model('Aroma_m');
        $this->load->model('Services_m');
        $this->load->model('Package_m');
		$this->load->model('Order_m');
		$this->load->model('Region_m');
    }

	public function index() {

		$idCUSTOMER = $this->session->userdata('idCUSTOMER');
		if(empty($idCUSTOMER)){
			$data = array(
		            'text' => 'Maaf, kamu diharuskan untuk masuk/login terlebih dahulu.'
	        );
			$this->session->set_flashdata('message',$data);
			redirect('Customer/login');
		}
		//$data = '';
		$data['listaroma'] = $this->Aroma_m->selectall_aroma(NULL, 1)->result();
		$data['listservices'] = $this->Services_m->selectall_services(NULL, 1)->result();
		$data['listpackage'] = $this->Package_m->selectall_package(NULL, 1)->result();
		$data['listregion'] = $this->Region_m->selectall_region(NULL, 1)->result();
		
		$this->load->view($this->data['frontendDIR']. 'Order',$data);
	}

	public function confirmation_order(){
		$rules = $this->Order_m->rules_order;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
		$this->form_validation->set_message('is_unique', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {

			$datas = $this->Order_m->array_from_post(array('pickupdateORDER','pickuptimeORDER','pickupADDRESSORDERKOTOR','idAROMA','idSERVICES','idPACKAGE','idPAYMENT','idREGION','notesORDER'));
			$datas['pickuptimeORDER'] = str_replace([' '], [':'], $datas['pickuptimeORDER']);

			//START GENERATE KODE ORDER //
			$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$res = "";
			for ($i = 0; $i < 4; $i++) {
			    $res .= $chars[mt_rand(0, strlen($chars)-1)];
			}
			$kodeorder = "IL" . date('Ymd') . $res;
			//END GENERATE KODE ORDER //

			$datas['kodeORDER'] = $kodeorder;

			if(!empty($datas)){
				$data['confirm_order'] = $datas;

				$data['aroma'] = $this->Aroma_m->selectall_aroma($datas['idAROMA'], 1)->row();
				$data['services'] = $this->Services_m->selectall_services($datas['idSERVICES'], 1)->row();
				$data['package'] = $this->Package_m->selectall_package($datas['idPACKAGE'], 1)->row();
				$data['region'] = $this->Region_m->selectall_region($datas['idREGION'], 1)->row();

				$this->load->view($this->data['frontendDIR']. 'Order_review',$data);
			} else {

				$data = array(
		            'text' => 'Maaf, data yang anda masukkan mengalami kesalahan, silakan ulangi beberapa saat lagi.'
		        );

		        $this->session->set_flashdata('message',$data);
		        redirect(base_url());
			}
		} else {
			$data = array(
		            'text' => 'Maaf, silakan cek kembali inputan anda, terima kasih!'
		    );

	        $this->session->set_flashdata('message',$data);
	        redirect(base_url());
		}

	}

	public function saveorder(){

		$rules = $this->Order_m->rules_order_confirmation;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$datas = $this->Order_m->array_from_post(array('pickupdateORDER','pickuptimeORDER','pickupADDRESSORDERKOTOR','idAROMA','idSERVICES','idPACKAGE','idREGION','idCUSTOMER','kodeORDER','notesORDER'));
			$datas['idCUSTOMER'] = decode($datas['idCUSTOMER']);
			
			$checkkodeorder = $this->Order_m->checkkodeorder($datas['kodeORDER'])->row();

			if($checkkodeorder != NULL){
				$data = array(
		            'text' => 'Maaf, kami tidak dapat memproses data order anda, silakan ulangi beberapa saat kembali.'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect(base_url());
			}
			
			if ($this->Order_m->save($datas)) {
                $this->load->view($this->data['frontendDIR']. 'Order_completed');
			} else {
				$data = array(
                    'text' => 'Maaf, data order anda tidak dapat kami proses, silakan ulangi beberapa saat kembali.'
                );
                $this->session->set_flashdata('message',$data);
                redirect(base_url());
			}
		} else {
				$data = array(
		            'text' => 'Maaf, silakan cek kembali inputan anda, terima kasih!'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect(base_url());
		}
	}

	public function load_aroma($id = NULL){

	  $aroma = $this->Region_m->get_aroma_by_region($id)->result();
	  if(!empty($aroma)){
	      //$data = "<option value='' selected disabled>Pilih aroma kamu</option>";
	      foreach ($aroma as $value) {
	          $data .= "<option value='".$value->idAROMA."'>".$value->nameAROMA."</option>";
	      }
	      echo $data;
	  } else {
	  	  $data = "<option value='' selected disabled>Maaf, Aroma belum tersedia</option>";
	      echo $data;
	  }
	}
}
