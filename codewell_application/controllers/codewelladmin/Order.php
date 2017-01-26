<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Order_m');
		$this->load->model('Partner_m');

		if(empty($this->session->userdata('idUSER')) AND $this->session->userdata('roleUSER') != 22 AND $this->session->userdata('roleUSER') != 21){
			redirect('codewelladmin/user/Login/logout');
		}
	}
	
	public function index(){
		$data['addONS'] = 'plugins_order';
		$ids = $this->session->userdata('idUSER');
		
		if($this->session->userdata('roleUSER') == 21 OR $this->session->userdata('roleUSER') == 22) {

			$data['orderlist'] = $this->Order_m->selectall_order()->result();
				foreach ($data['orderlist'] as $key => $value) {
					if($value->statusORDER == 1){
						$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
					} elseif($value->statusORDER == 2) {
						$status='<span class="uk-badge uk-badge-primary">Proses pencucian</span>';
					} elseif ($value->statusORDER == 3) {
						$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
					} else if ($value->statusORDER == 4){
						$status='<span class="uk-badge uk-badge-warning">Dalam proses pembayaran</span>';
					} else if ($value->statusORDER == 5){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil (Credit card)</span>';
					} elseif($value->statusORDER == 6){
						$status='<span class="uk-badge uk-badge-danger">Pembayaran dibatalkan oleh admin</span>';
					} elseif($value->statusORDER == 7){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil</span>';
					} elseif($value->statusORDER == 8){
						$status='<span class="uk-badge uk-badge-warning">Menunggu pembayaran pelanggan</span>';
					} else {
						$status='<span class="uk-badge uk-badge-danger">Pembayaran ditolak</span>';
					}
					$data['orderlist'][$key]->status = $status;
				}

			$data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1');
	        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2');
	        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3 OR statusORDER = 8');
	        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 5 OR statusORDER = 7');

		} elseif($this->session->userdata('roleUSER') == 26){
			$data['orderlist'] = $this->Order_m->selectall_order(NULL,NULL,NULL,$ids)->result();
			
				foreach ($data['orderlist'] as $key => $value) {
					if($value->statusORDER == 1){
						$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
					} elseif($value->statusORDER == 2) {
						$status='<span class="uk-badge uk-badge-primary">Proses pencucian</span>';
					} elseif ($value->statusORDER == 3) {
						$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
					} else if ($value->statusORDER == 4){
						$status='<span class="uk-badge uk-badge-warning">Dalam proses pembayaran</span>';
					} else if ($value->statusORDER == 5){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil (Credit card)</span>';
					} elseif($value->statusORDER == 6){
						$status='<span class="uk-badge uk-badge-danger">Pembayaran dibatalkan oleh admin(Credit Card)</span>';
					} elseif($value->statusORDER == 7){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil</span>';
					} elseif($value->statusORDER == 8){
						$status='<span class="uk-badge uk-badge-warning">Menunggu pembayaran pelanggan</span>';
					} else {
						$status='<span class="uk-badge uk-badge-danger">Pembayaran ditolak</span>';
					}
					$data['orderlist'][$key]->status = $status;
				}

			$data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1',$ids);
	        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2',$ids);
	        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3 OR statusORDER = 8',$ids);
	        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 5 OR statusORDER = 7',$ids);

		} elseif ($this->session->userdata('roleUSER') == 24) {

			$data['orderlist'] = $this->Order_m->selectall_order()->result();
				foreach ($data['orderlist'] as $key => $value) {
					if($value->statusORDER == 1){
						$status='<span class="uk-badge uk-badge-primary">Dalam Proses</span>';
					} elseif($value->statusORDER == 2) {
						$status='<span class="uk-badge uk-badge-primary">Proses pencucian</span>';
					} elseif ($value->statusORDER == 3) {
						$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
					} else if ($value->statusORDER == 4){
						$status='<span class="uk-badge uk-badge-warning">Dalam proses pembayaran</span>';
					} else if ($value->statusORDER == 5){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil (Credit card)</span>';
					} elseif($value->statusORDER == 6){
						$status='<span class="uk-badge uk-badge-danger">Pembayaran dibatalkan oleh admin(Credit Card)</span>';
					} elseif($value->statusORDER == 7){
						$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil</span>';
					} elseif($value->statusORDER == 8){
						$status='<span class="uk-badge uk-badge-warning">Menunggu pembayaran pelanggan</span>';
					} else {
						$status='<span class="uk-badge uk-badge-danger">Pembayaran ditolak</span>';
					}
					$data['orderlist'][$key]->status = $status;
				}

			$data['process'] = $this->Order_m->counts('codewell_orders','statusORDER = 1');
	        $data['wash'] = $this->Order_m->counts('codewell_orders','statusORDER = 2');
	        $data['waitingpayment'] = $this->Order_m->counts('codewell_orders','statusORDER = 3 OR statusORDER = 8');
	        $data['done'] = $this->Order_m->counts('codewell_orders','statusORDER = 5 OR statusORDER = 7');
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
				$status='<span class="uk-badge uk-badge-primary">Proses pencucian</span>';
			} elseif ($detailorder->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else if ($detailorder->statusORDER == 4){
				$status='<span class="uk-badge uk-badge-warning">Dalam proses pembayaran</span>';
			} else if ($detailorder->statusORDER == 5){
				$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil (Credit card)</span>';
			} elseif($detailorder->statusORDER == 6){
				$status='<span class="uk-badge uk-badge-danger">Pembayaran dibatalkan oleh admin(Credit Card)</span>';
			} elseif($detailorder->statusORDER == 7){
				$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil</span>';
			} elseif($detailorder->statusORDER == 8){
				$status='<span class="uk-badge uk-badge-warning">Menunggu pembayaran pelanggan</span>';
			} else {
				$status='<span class="uk-badge uk-badge-danger">Pembayaran ditolak</span>';
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
	            'text' => 'Maaf, data tidak berhasil dirubah, silakan ulangi beberapa saat kembali!',
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
				$status='<span class="uk-badge uk-badge-primary">Proses pencucian</span>';
			} elseif ($editorder->statusORDER == 3) {
				$status='<span class="uk-badge uk-badge-warning">Menunggu Pembayaran</span>';
			} else if ($editorder->statusORDER == 4){
				$status='<span class="uk-badge uk-badge-warning">Dalam proses pembayaran</span>';
			} else if ($editorder->statusORDER == 5){
				$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil (Credit card)</span>';
			} elseif($editorder->statusORDER == 6){
				$status='<span class="uk-badge uk-badge-danger">Pembayaran dibatalkan oleh admin(Credit Card)</span>';
			} elseif($editorder->statusORDER == 7){
				$status='<span class="uk-badge uk-badge-success">Pembayaran berhasil</span>';
			} elseif($editorder->statusORDER == 8){
				$status='<span class="uk-badge uk-badge-warning">Menunggu pembayaran pelanggan</span>';
			} else {
				$status='<span class="uk-badge uk-badge-danger">Pembayaran ditolak</span>';
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

	public function processeditorder(){

		$data = $this->Order_m->array_from_post(array('pickupfinishedtimeORDER','pickupfinisheddateORDER','pickupADDRESSORDERBERSIH','beratORDER','priceORDER','idPARTNER','rejectedmessagesORDER'));
		$data['pickupfinisheddateORDER'] = date("Y-m-d",strtotime($data['pickupfinisheddateORDER']));
		$data['priceORDER'] = str_replace(['Rp.',' '], ['',''], $data['priceORDER']);
		if($data['rejectedmessagesORDER'] != NULL){
			$data['statusORDER'] = 5;
		}
		$id = decode($this->input->post('idORDER'));
		if(empty($id))$id=NULL;
		
		$saveID = $this->Order_m->save($data, $id);
		$data = $this->Order_m->selectpartnerassignoder($saveID)->row();
		
		if($this->sendemailassignpartner($data)){
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

	public function autoloaddivorder(){
		
	}

	private function sendemailassignpartner($data = NULL) {
		$from_email = 'cs@dunia-otomotif.com';
        $subject = 'Pemberitahuan Pesanan Partner - i-Laundry';
        $word1 = 
        'kamu telah mendapatkan notifikasi pesanan terbaru pada <b>'.date("l, d F Y H:i:s").'</b>, berikut data:<br>
        Kode Order: <b>'.$data->kodeORDER.'</b><br>
        Tanggal Jemput: '.dF($data->pickupdateORDER,'l, d F Y').'<br>
        Jam Jemput: '.dF($data->pickuptimeORDER,'H:i:s').'<br>
        Alamat: <b>'.$data->pickupADDRESSORDERKOTOR.'</b><br>
        <br>
        Silakan cek dengan cara masuk ke aplikasi admin kamu, lalu proses orderan cucian kamu!<br>
        <b>Terima kasih!</b>';
        $address = 'Komplek Permata Regency, Baloi, Batam - Indonesia';
        $telephone = '0778 - 741XXXX';
        $facebook = 'facebook.com';
        $twitter = 'twitter.com';
        $instagram = 'instagram.com';
        $footer = 'Jika kamu ada pertanyaan, silakan hubungi kami lewat email di support@i-laundry.co.id atau hubungi di '. $telephone .'. Waktu buka (08:30 &mdash; 20:00)';
        $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
	    <title>'. $subject .'</title>

	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	    <!-- CSS Reset -->
	    <style type="text/css">
	        html,
	        body {
	            margin: 0 !important;
	            padding: 0 !important;
	            height: 100% !important;
	            width: 100% !important;
	        }
	        
	        * {
	            -ms-text-size-adjust: 100%;
	            -webkit-text-size-adjust: 100%;
	        }
	        
	        div[style*="margin: 16px 0"] {
	            margin:0 !important;
	        }
	        
	        table,
	        td {
	            mso-table-lspace: 0pt !important;
	            mso-table-rspace: 0pt !important;
	        }

	        table {
	            border-spacing: 0 !important;
	            border-collapse: collapse !important;
	            table-layout: fixed !important;
	            margin: 0 auto !important;
	            border-radius: 3px;
	            box-shadow: 1px 3px 5px rgba(0,0,0,0.2);
	        }

	        table table table {
	            table-layout: auto; 
	        }
	        
	        img {
	            -ms-interpolation-mode:bicubic;
	        }

	        .yshortcuts a {
	            border-bottom: none !important;
	        }

	        .mobile-link--footer a,
	        a[x-apple-data-detectors] {
	            color:inherit !important;
	            text-decoration: underline !important;
	        }
	      
	    </style>
    
	    <!-- Progressive Enhancements -->
	    <style>

	        a {
	            text-decoration: none;
	            color: inherit;
	        }

	        #btn-confirm {
	            margin-bottom: 25px;
	            margin-top: 25px;
	        }
	        
	        .button-td,
	        .button-a {
	        }

	        .button-td:hover, .button-a:hover {
	            background: #FF9C02 !important;
	            color: #fff;
	            border-color: #555555 !important;
	        }

	        @media screen and (max-width: 600px) {

	            .email-container {
	                width: 100% !important;
	                padding-left: 25px;
	                padding-right: 25px;
	            }

	            .fluid,
	            .fluid-centered {
	                max-width: 100% !important;
	                height: auto !important;
	                margin-left: auto !important;
	                margin-right: auto !important;
	            }

	            .fluid-centered {
	                margin-left: auto !important;
	                margin-right: auto !important;
	            }

	            .stack-column,
	            .stack-column-center {
	                display: block !important;
	                width: 100% !important;
	                max-width: 100% !important;
	                direction: ltr !important;
	            }

	            .stack-column-center {
	                text-align: center !important;
	            }
	        
	            .center-on-narrow {
	                text-align: center !important;
	                display: block !important;
	                margin-left: auto !important;
	                margin-right: auto !important;
	                float: none !important;
	            }
	            table.center-on-narrow {
	                display: inline-block !important;
	            }       
	        }
	        
	    </style>

		</head>
		<body bgcolor="#ededed" width="100%" style="Margin: 0;">
		<table bgcolor="#ededed" cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse;"><tr><td valign="top">
		    <center style="width: 100%;">
		        <!-- Visually Hidden Preheader Text : BEGIN -->
		        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
		            Pemberitahuan Pesanan Partner
		        </div>
		        <!-- Visually Hidden Preheader Text : END -->

		       <div style="margin: 20px 0 20px 0">
		        
		        <!-- Email Body : BEGIN -->
		        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container">
		            
		            <!-- Hero Image, Flush : BEGIN -->
		            <tr>
		                <td style="font-family: sans-serif; padding: 25px 0 0 40px; font-size: 48px; color: #17C3D6; letter-spacing: 20px;">
		                    i-Laundry
		                </td>
		            </tr>
		            
		            <tr>
		                <tr>
		                    <td style="padding: 20px 40px 0 40px; font-weight: bold; text-align: left; font-family: sans-serif; font-size: 20px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Hallo! '.$data->namePARTNER.'</td>
		                </tr>
		                    <td style="padding: 10px 20px 0px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                        '.$word1.'
		                        <br>
		                    </td>
		            </tr>
		            <tr id="btn-confirm">
		                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                    
		                </td>
		            </tr>
		            <!-- 1 Column Text : BEGIN -->
		            </tr>
		            </tr>
		             <tr>
		                <td style="padding: 20px 20px 20px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555; background-color: #f1fafa;">
		                    <webversion style="color:#888888; font-size: 14px; text-decoration:underline; font-weight: bold;">Terima Kasih</webversion>
		                    <br>
		                    <span style="font-size: 20px; padding: 10px 0px 15px 0px; font-weight: bold; font-style: italic;">www.i-laundry.co.id</span>
		                    <br>
		                    <span class="mobile-link--footer">'.$address.'</span><br><span class="mobile-link--footer">'.$telephone.'</span>
		                    <div style="font-size: 24px; margin-top: 20px; color: #aaa;">
		                        <a href="'.$facebook.'"><i class="fa fa-facebook-square"></i></a>
		                        <a href="'.$twitter.'"><i class="fa fa-twitter-square"></i></a>
		                        <a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>
		                    </div>
		                    <div style="margin-top: 25px; color: #999;">'.$footer.'</div>
		                </td>
		            </tr>
		            <tr style="background-color: #777">
		            <td style="padding: 10px 20px 10px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;">
		                    2016 &copy; i-laundry.co.id is crafted by Codewell Team.
		                    <br>
		                </td>
		            </tr>
		        </table>
		        <!-- Email Body : END -->
		        <table>
		        </table>
		    </center>
			</td></tr></table>
			</body>
			</html>';
						        
        //configure email settings
        $config = $this->mail_config();
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'i-Laundry');
        $this->email->to($data->emailPARTNER);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}
}