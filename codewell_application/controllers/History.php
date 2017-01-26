<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Order_m');
    }

	public function index()	{
		$idCUSTOMER = $this->session->userdata('idCUSTOMER');
		if(empty($idCUSTOMER)){
			$data = array(
		            'text' => 'Maaf, kamu diharuskan untuk masuk/login terlebih dahulu.'
	        );
			$this->session->set_flashdata('message',$data);
			redirect(base_url());
		}

		$data['orders'] = $this->Order_m->selectall_order('',$idCUSTOMER,'')->result();

		foreach ($data['orders'] as $key => $value) {
			if($value->statusORDER == 1){
				$status='<a href="#" class="button login-btn" id="unpaid">Dalam proses</a>';
			} elseif($value->statusORDER == 2) {
				$status='<a href="#" class="button login-btn" id="unpaid">Proses cuci</a>';
			} elseif ($value->statusORDER == 3) {
				$status='<a href="#" class="button login-btn" id="unpaid">Bayar sekarang</a>';
			} elseif($value->statusORDER == 4) {
				$status='<a href="#" class="button login-btn" id="unpaid">Dalam proses pembayaran</a>';
			} elseif($value->statusORDER == 5) {
				$status='<a href="#" class="button login-btn" id="paid">Pembayaran berhasil (Credit card)</a>';
			} elseif($value->statusORDER == 6) {
				$status='<a href="#" class="button login-btn" id="paid">Pembayaran dibatalkan oleh admin</a>';
			} elseif($value->statusORDER == 7) {
				$status='<a href="#" class="button login-btn" id="paid">Pembayaran berhasil</a>';
			} elseif($value->statusORDER == 8) {
				$status='<a href="#" class="button login-btn" id="paid">Silakan transfer pembayaran ini</a>';
			} else{
				$status='<span class="uk-badge uk-badge-success">Pembayaran anda ditolak</span>';
			}
			$data['orders'][$key]->status = $status;
		}

		if (!is_null($this->session->flashdata('message'))) {
		    $data['message'] = $this->session->flashdata('message');
		}

		$this->load->view($this->data['frontendDIR']. 'History', $data);
	}
}
