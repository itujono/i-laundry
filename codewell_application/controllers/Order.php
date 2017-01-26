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
		$data['listregion'] = $this->Region_m->selectall_regionbaseonaroma(1)->result();
		
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

			$idlastorder = $this->Order_m->save($datas);
			$orders = $this->Order_m->selectall_order($idlastorder)->row();
			
			if ($idlastorder) {
				if($this->sendemailtemporaryinvoice($orders)){	
                	$this->load->view($this->data['frontendDIR']. 'Order_completed');
                }
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

	private function sendemailtemporaryinvoice($orders) {
		$waktujemput = dF($orders->pickupdateORDER,'l, d F Y');
		$alamatjemput = $orders->pickupADDRESSORDERKOTOR;
		$aroma = $orders->nameAROMA;
		$paket = $orders->namePACKAGE;
		$service = $orders->nameSERVICES;
		$nameCUSTOMER = $orders->nameCUSTOMER;
		$emailCUSTOMER = $orders->emailCUSTOMER;
		$notesORDER = $orders->notesORDER;

		$from_email = 'andhana@prowebmedia.org';
        $subject = 'Terimakasih Banyak - i-Laundry';
        $word1 = 'Terima kasih sudah menggunakan jasa kami. Berikut adalah detail order kamu.';
        $address = 'Komplek Permata Regency, Baloi, Batam - Indonesia';
        $telephone = 'Tel. 0778 - 741XXXX';
        $facebook = 'facebook.com';
        $twitter = 'twitter.com';
        $instagram = 'instagram.com';
        $footer = 'Jika kamu ada pertanyaan, silakan hubungi kami lewat email di support@i-laundry.co.id atau hubungi di '. $telephone .'. Waktu buka (08:30 &mdash; 20:00)';
        $message = '
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
	    <title>Terimakasih Banyak - i-Laundry</title>

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
	            border-radius: 8px;
	            box-shadow: 0 7px 21px 0 rgba(0,0,0,.1);
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
	            background: #27b9ca !important;
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
		            Terimakasih - '.$nameCUSTOMER.'
		        </div>
		        <!-- Visually Hidden Preheader Text : END -->

		       <div style="margin: 20px 0 20px 0">
		        
		        <!-- Email Body : BEGIN -->
		        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container">
		            
		            <!-- Hero Image, Flush : BEGIN -->
		            <tr>
		                <td style="font-family: sans-serif; padding: 25px 0 0 40px; font-size: 48px; color: #61e2f1; letter-spacing: 1px; font-weight: 800;">
		                    i-Laundry
		                </td>
		            </tr>
		            <tr>
		                <tr>
		                    <td style="padding: 20px 40px 0 40px; font-weight: bold; text-align: left; font-family: sans-serif; font-size: 20px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Terima kasih banyak, '.$nameCUSTOMER.'!</td>
		                </tr>
		                    <td style="padding: 10px 20px 0px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                        '.$word1.'
		                        <br>
		                    </td>
		            </tr>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Waktu jemput</h3>
		            		<p style="margin: 0">'.$waktujemput.'</p>
		            	</td>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Alamat jemput</h3>
		            		<p style="margin: 0">'.$alamatjemput.'</p>
		            	</td>
		            </tr>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Pilihan aroma</h3>
		            		<p style="margin: 0">'.$aroma.'</p>
		            	</td>
		            </tr>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Paket</h3>
		            		<p style="margin: 0">'.$paket.'</p>
		            	</td>
		            </tr>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Jenis servis</h3>
		            		<p style="margin: 0">'.$service.'</p>
		            	</td>
		            </tr>
		            <tr>
		            	<td style="padding: 10px 40px 0 40px; font-family: sans-serif;">
		            		<h3 style="margin: 0; font-size: .8em; color: #999;">Catatan order</h3>
		            		<p style="margin: 0">'.$notesORDER.'</p>
		            	</td>
		            </tr>

		            <tr id="btn-confirm">
		                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                    <a class="button-td" style="margin-top: 25px; margin-bottom: 25px; padding: 10px 15px; background-color: #2fa9e0; border-radius: 50px; transition: all 100ms ease-in; color: #fff;" href="'.base_url().'">Kembali ke website kami</a>
		                </td>
		            </tr>
		            <!-- 1 Column Text : BEGIN -->
		            </tr>
		            </tr>
		             <tr>
		                <td style="padding: 20px 20px 20px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555; background-color: #f1fafa; border-radius: 0 0 8px 8px;">
		                    <webversion style="color:#888888; font-size: 14px; text-decoration:underline; font-weight: bold; margin-bottom: 15px;">Terima Kasih</webversion>
		                    <br><br>
		                    <span style="font-size: 20px; padding: 10px 0px 15px 0px; font-weight: bold; font-style: italic;">i-Laundry.co.id</span>
		                    <br>
		                    <span class="mobile-link--footer">'.$address.'</span><br><span class="mobile-link--footer">'.$telephone.'</span>
		                    <div style="font-size: 24px; margin-top: 20px; color: #aaa;">
		                        <a href="'.$facebook.'"><i class="fa fa-facebook-square"></i></a>
		                        <a href="'.$twitter.'"><i class="fa fa-twitter-square"></i></a>
		                        <a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>
		                    </div>
		                    <div style="margin-top: 25px; color: #999;">
		                    Enjoy your quality time and let us take care your clothes.
		                    </div>
		                </td>
		            </tr>
		            <tr style="background-color: #8fcae4">
		            <td style="padding: 10px 20px 10px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #ffffff; border-radius: 0 0 8px 8px">
		                    2016 &copy; i-laundry.co.id is crafted by <a href="mailto: rivayudha@msn.com">Codewell Indonesia</a>
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
        $this->email->to($emailCUSTOMER);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}
}
