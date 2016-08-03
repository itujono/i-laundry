<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Order_m');
		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/Login');}
	}

	public function index($id = NULL){
		$data['addONS'] = 'plugins_order';

		$data['orderlist'] = $this->Order_m->selectall_order()->result();

		foreach ($data['orderlist'] as $key => $value) {
			if($value->statusORDER == 1){
				$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
			} elseif($value->statusORDER == 2) {
				$status='<span class="uk-badge uk-badge-danger">Proses pencucian</span>';
			} elseif ($value->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else{
				$status='<span class="uk-badge uk-badge-success">Selesai Order</span>';
			}
			$data['orderlist'][$key]->status = $status;
		}
		
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1');
        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2');
        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3');
        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 4');
		
		$data['subview'] = $this->load->view($this->data['backendDIR'].'Order', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function detail($id = NULL){
		$data['addONS'] = 'plugins_orderdetail';

		$id = decode(urldecode($id));

		$detailorder = $this->Order_m->selectall_order($id)->row();
		
			if($detailorder->statusORDER == 1){
				$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
			} elseif($detailorder->statusORDER == 2) {
				$status='<span class="uk-badge uk-badge-danger">Proses pencucian</span>';
			} elseif ($detailorder->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else{
				$status='<span class="uk-badge uk-badge-success">Selesai Order</span>';
			}
			$detailorder->status = $status;

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['detailorder'] = $detailorder;

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Detail', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function changestatus($id=NULL, $ss=NULL){
		$id = decode(urldecode($id));
		$ss = $ss;

		if($id != 0){
			$data['statusORDER'] = $ss;
			$this->Order_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/order');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, Sesuatu yang memalukan terjadi',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('codewelladmin/order');
		}
	}
}