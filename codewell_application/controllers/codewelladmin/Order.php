<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Order_m');
		$this->load->model('Partner_m');

		if(empty($this->session->userdata('idUSER'))){redirect('codewelladmin/user/Login/logout');}
	}
	public function cobak(){
		$cekkodeorder = $this->Order_m->cekkode()->row();
		$codeorder = str_replace("IL","",substr($cekkodeorder->kode,10))+1;
		$kodeorder = "IL" . date('Ymds') . $codeorder;
		print_r($kodeorder);
		break;
	}

	public function index(){
		$data['addONS'] = 'plugins_order';
		$ids = $this->session->userdata('idUSER');
		
		if($this->session->userdata('roleUSER') == 22) {

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

			$data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1');
	        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2');
	        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3');
	        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 4');

		} elseif($this->session->userdata('roleUSER') == 26){
			$data['orderlist'] = $this->Order_m->selectall_order(NULL,NULL,NULL,$ids)->result();
			// echo "<pre>";
			// print_r($ids);
			// break;
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

			$data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1',$ids);
	        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2',$ids);
	        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3',$ids);
	        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 4',$ids);
		}
		
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        
		$data['subview'] = $this->load->view('templates/backend/Order', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function detail($id = NULL){
		$data['addONS'] = 'plugins_orderdetail';

		$id = decode(urldecode($id));

		$detailorder = $this->Order_m->selectall_order($id)->row();
		if($this->session->userdata('roleUSER') == 26){
			if($detailorder->isreadORDER == 0){
				$datas['isreadORDER'] = 1;
				$this->Order_m->save($datas,$id);
			}
		} elseif ($this->session->userdata('roleUSER') == 22) {
			if($detailorder->isreadadminORDER == 0){
				$datas['isreadadminORDER'] = 1;
				$this->Order_m->save($datas,$id);
			}
		}
			if($detailorder->statusORDER == 1){
				$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
			} elseif($detailorder->statusORDER == 2) {
				$status='<span class="uk-badge uk-badge-danger">Proses pencucian</span>';
			} elseif ($detailorder->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} elseif($detailorder->statusORDER == 4){
				$status='<span class="uk-badge uk-badge-success">Selesai Order</span>';
			}
			$detailorder->status = $status;

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['detailorder'] = $detailorder;
        
        $data['partner'] = $this->Order_m->selectpartneronly($id)->row();

		$data['subview'] = $this->load->view('templates/backend/Detail', $data, TRUE);
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

	public function editorder($id = NULL){
		$data['addONS'] = 'plugins_editorder';

		$id = decode(urldecode($id));
		if(empty($id))redirect($this->data['folBACKEND'].'Customer');

		$editorder = $this->Order_m->selectall_order($id)->row();
		
			if($editorder->statusORDER == 1){
				$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
			} elseif($editorder->statusORDER == 2) {
				$status='<span class="uk-badge uk-badge-danger">Proses pencucian</span>';
			} elseif ($editorder->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else{
				$status='<span class="uk-badge uk-badge-success">Selesai Order</span>';
			}
			$editorder->status = $status;

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['partner'] = $this->Partner_m->select_all_partner_drop(NULL, 1);

        $data['editorder'] = $editorder;
        $data['subview'] = $this->load->view('templates/backend/Update_order', $data, TRUE);
		$this->load->view($this->data['rootDIR'].'_layout_base',$data);
	}

	public function processeditorder()
	{
		$rules = $this->Order_m->rules_editorder;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Order_m->array_from_post(array('pickupfinishedtimeORDER','pickupADDRESSORDERBERSIH','beratORDER','priceORDER','idPARTNER','rejectedmessagesORDER'));
			$data['pickupfinishedtimeORDER'] = str_replace(['PM',' '], [':00',''], $data['pickupfinishedtimeORDER']);
			$data['pickupfinishedtimeORDER'] = date("Y-m-d H:i:s",strtotime($data['pickupfinishedtimeORDER']));
			$data['priceORDER'] = str_replace(['Rp.',' '], ['',''], $data['priceORDER']);

			$id = decode($this->input->post('idORDER'));
			if(empty($id))$id=NULL;
			
			if ($this->Order_m->save($data, $id)) {
				$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penyimpanan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/order/detail/'.encode($id));
			} else {
				$data = array(
                    'title' => 'Terjadi Kesalahan',
                    'text' => 'Maaf, sistem tidak dapat menyimpan perubahan anda, mohon ulangi',
                    'type' => 'error'
                );
                $this->session->set_flashdata('message',$data);
                redirect('codewelladmin/order/detail/'.encode($id));
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

	public function countunreadorder(){
		$counts = count_notif();
		echo $counts;
	}

	public function unreadorder(){
		$data = selectunreadorders();
		if(!empty($data)){
			$no = 1;
			foreach ($data as $key => $unreads) {
				echo "<li>
	                  <div class='md-list-addon-element'>
	                      <span class='md-user-letters md-bg-light-green'>".$no++."</span>
	                  </div>
	                  <div class='md-list-content'>
	                      <span class='md-list-heading'><a href='".base_url()."codewelladmin/Order/detail/".encode($unreads->idORDER)."'>".$unreads->nameCUSTOMER." - ".$unreads->kodeORDER."</a></span>
	                      <span class='uk-text-small uk-text-muted'>".$unreads->pickupADDRESSORDERKOTOR."<br><p class='uk-text-danger'>".timeAgo(dF('H:i:s',strtotime($unreads->createdateORDER)))."</p></span>
	                  </div>
	              	  </li>";
			}
		} else {
			echo "<div class='uk-text-center uk-margin-top uk-margin-small-bottom'>
                  <a href='#' class='md-btn md-btn-flat md-btn-flat-primary js-uk-prevent'>BELUM ADA NOTIFIKASI</a>
                 </div>";
		}
	}
}