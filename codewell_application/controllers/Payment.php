<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment extends Frontend_Controller {
	
	public function __construct() {
        parent::__construct();
        $params = array('server_key' => 'VT-server-eaL5D4wXTnis56AYtTHMkMTK', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
		$this->load->model('Order_m');
    }

	public function sendpayment() {
	$ordercode = $this->input->post('kodeORDER');
	$orderpayment = $this->Order_m->selectall_order(NULL,NULL,NULL,NULL, $ordercode)->row();
	
		$transaction_details = array(
			'order_id' 			=> $orderpayment->kodeORDER,
			'gross_amount' 	=> $orderpayment->priceORDER
		);
		//Populate items
		// $items = [
		// 	array(
		// 		'id' 			=> $orderpayment->idAROMA,
		// 		'quantity' 		=> 1,
		// 		'name' 			=> $orderpayment->nameAROMA
		// 	),
		// 	array(
		// 		'id' 			=> $orderpayment->idSERVICES,
		// 		'quantity' 		=> 1,
		// 		'name' 			=> $orderpayment->nameSERVICES
		// 	),
		// 	array(
		// 		'id' 			=> $orderpayment->idPACKAGE,
		// 		'quantity' 		=> 1,
		// 		'name' 			=> $orderpayment->namePACKAGE
		// 	),
			
		// ];
		// Populate customer's billing address
		$billing_address = array(
			'first_name' 		=> $orderpayment->nameCUSTOMER,
			'address' 			=> $orderpayment->pickupADDRESSORDERKOTOR,
			'city' 				=> "Batam",
			'phone' 			=> $orderpayment->mobileCUSTOMER,
			'country_code'		=> 'IDN'
			);
		// Populate customer's shipping address
		$shipping_address = array(
			'first_name' 		=> $orderpayment->nameCUSTOMER,
			'address' 			=> $orderpayment->pickupADDRESSORDERBERSIH,
			'city' 				=> "Batam",
			'phone' 			=> $orderpayment->mobileCUSTOMER,
			'country_code'		=> 'IDN'
			);
		// Populate customer's Info
		$customer_details = array(
			'first_name' 		=> $orderpayment->nameCUSTOMER,
			'email' 			=> $orderpayment->emailCUSTOMER,
			'phone' 			=> $orderpayment->mobileCUSTOMER,
			'billing_address' 	=> $billing_address,
			'shipping_address'	=> $shipping_address
			);
		// Data yang akan dikirim untuk request redirect_url.
		// Uncomment 'credit_card_3d_secure' => true jika transaksi ingin diproses dengan 3DSecure.
		$transaction_data = array(
			'payment_type' 			=> 'vtweb', 
			'vtweb' 				=> array(
				'enabled_payments' 		=> ['credit_card','bank_transfer']
				//'credit_card_3d_secure' => true
			),
			'transaction_details'=> $transaction_details,
			//'item_details' 			 => $items,
			'customer_details' 	 => $customer_details
		);
	
		try
		{
			$vtweb_url = $this->veritrans->vtweb_charge($transaction_data);

			header('Location: ' . $vtweb_url);
		} 
		catch (Exception $e) 
		{
    		echo $e->getMessage();	
		}
		
	}

	public function notification($id1=NULL)
	{
		$id['order_id'] = $this->input->get('order_id');
		$id['status_code'] = $this->input->get('status_code');
		$id['transaction_status'] = $this->input->get('transaction_status');

		if($id['order_id'] != NULL){
			$notif = $this->veritrans->status($id['order_id']);
		}

		$transaction = $notif->transaction_status;
		$type = $notif->payment_type;
		$order_id = $notif->order_id;
		$fraud = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP

		      $kodeORDER = $order_id;
		      $data['statusORDER'] = 4;
		      $this->Order_m->updatedata($data, $kodeORDER);
		      $data['message'] = "Transaksi dengan kode order: " . $order_id ." sedang dalam proses pengecekan, mohon menunggu.";
		      $this->load->view($this->data['frontendDIR']. 'Notification', $data);
		      } else {
		      // TODO set payment status in merchant's database to 'Success'

		      $kodeORDER = $order_id;
		      $data['statusORDER'] = 5;
		      $this->Order_m->updatedata($data, $kodeORDER);
		      $data['message'] = "Transaksi dengan kode order: " . $order_id ." telah berhasil dibayarkan menggunakan kartu kredit.";
		      $this->load->view($this->data['frontendDIR']. 'Notification', $data);
		      }
		    }
		  } else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'

		  $kodeORDER = $order_id;
	      $data['statusORDER'] = 7;
	      $this->Order_m->updatedata($data, $kodeORDER);
	      $data['message'] = "Transaksi dengan kode order: " . $order_id ." telah berhasil dibayarkan menggunakan transfer bank.";
	      $this->load->view($this->data['frontendDIR']. 'Notification', $data);

		  } else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'

		  $kodeORDER = $order_id;
	      $data['statusORDER'] = 8;
	      $this->Order_m->updatedata($data, $kodeORDER);
	      $data['message'] = "Transaksi dengan kode order: " . $order_id ." sedang menunggu anda untuk dibayarkan.";
	      $this->load->view($this->data['frontendDIR']. 'Notification', $data);

		  } else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  	
		  $kodeORDER = $order_id;
	      $data['statusORDER'] = 10;
	      $this->Order_m->updatedata($data, $kodeORDER);
	      $data['message'] = "Transaksi dengan kode order: " . $order_id ." tidak dapat kami proses.";
	      $this->load->view($this->data['frontendDIR']. 'Notification', $data);
		}

	}
}