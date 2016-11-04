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

		$data['order'] = $this->Order_m->selectall_order('',$idCUSTOMER,'')->result();
		
		foreach ($data['order'] as $key => $value) {
			if($value->statusORDER == 1){
				$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
			} elseif($value->statusORDER == 2) {
				$status='<span class="uk-badge uk-badge-danger">Proses pencucian</span>';
			} elseif ($value->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else{
				$status='<span class="uk-badge uk-badge-success">Selesai Order</span>';
			}
			$data['order'][$key]->status = $status;
		}

		if (!is_null($this->session->flashdata('message'))) {
		    $data['message'] = $this->session->flashdata('message');
		}

		$this->load->view($this->data['frontendDIR']. 'History', $data);
	}
}
