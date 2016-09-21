<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('User_m');
        $this->load->model('Customer_m');
    }

	public function login(){
		
		$rules = $this->User_m->rules_login_customer;
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == TRUE){

			$email = $this->input->post('emailCUSTOMER');
			$pass = $this->input->post('passwordCUSTOMER');

			if ($this->User_m->login($email, $pass) == "CUSTOMER"){
				
				$data = array(
		            'text' => 'Hallo, Selamat datang '. $this->session->userdata('Name')
		        );

		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			} else {

				$data = array(
		            'text' => 'Maaf, email dan kata sandi yang anda masukkan salah'
		        	);
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$data = array(
            'text' => 'Maaf, Silakan ulangi email dan kata sandi anda dibawah!'
        	);
        $this->session->set_flashdata('message',$data);
		redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function logout (){
		$this->User_m->logout();
		$data = array(
            'text' => 'Selamat! Kamu sudah logout. Sampai jumpa lagi!'
        	);
        $this->session->set_flashdata('message',$data);
		redirect(base_url().'#!/'.base_url().'Home');
	}

	public function savecustomer($id = NULL){
		$rules = $this->Customer_m->rules_customer;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Customer_m->array_from_post(array('nameCUSTOMER','emailCUSTOMER','passwordCUSTOMER'));
            $data['passwordCUSTOMER'] = $this->Customer_m->hash($data['passwordCUSTOMER']);
            
			$id = decode($this->input->post('idCUSTOMER'));
			if(empty($id))$id=NULL;
			$idCUSTOMER = $this->Customer_m->save($data, $id);

			if ($idCUSTOMER) {

				$email = $this->input->post('emailCUSTOMER');
                $name = ucwords($this->input->post('nameCUSTOMER'));

	                if($this->sendemailconfirmation($idCUSTOMER, $name, $email)){

					$data = array(
	                    'text' => 'Terima kasih sudah mendaftar di i-Laundry, silakan cek kotak masuk ataupun kotak spam anda!. Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('Home');

					} else {
					$data = array(
	                    'text' => 'Maaf, mungkin ada Kesalahan koneksi, mohon ulangi beberapa saat lagi.'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('Home');
					}

			} else {
				$data = array(
		            'text' => 'Maaf, Sistem tidak dapat menyimpan data anda, silakan ulangi beberapa saat lagi.'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('Home');
			}
		} else {
			$data = array(
	            'text' => 'Maaf Sesuatu telah terjadi, mohon ulangi inputan form registrasi anda!.'
	        );
	        $this->session->set_flashdata('message',$data);
	        redirect('Home');
		}
	}

	private function sendemailconfirmation($idCUSTOMER = NULL, $nameCUSTOMER = NULL, $emailCUSTOMER = NULL)
	{
		$from_email = 'cs@dunia-otomotif.com'; //change this to yours
     	$idCODE = encode($idCUSTOMER);
        $subject = 'Konfirmasi Email - i-Laundry';
        $word1 = 'Terima kasih telah mendaftar di i-Laundry! Kami sangat senang kamu telah bergabung bersama kami<br>Silakan ikuti tautan dibawah untuk verifikasi email kamu. Terima Kasih! ';
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
		            Terima kasih sudah mendaftar, ' . $nameCUSTOMER . '!
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
		                    <td style="padding: 20px 40px 0 40px; font-weight: bold; text-align: left; font-family: sans-serif; font-size: 20px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Halo, '.$nameCUSTOMER.'</td>
		                </tr>
		                    <td style="padding: 10px 20px 0px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                        '.$word1.'
		                        <br>
		                    </td>
		            </tr>
		            <tr id="btn-confirm">
		                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                    <a class="button-td" style="margin-top: 25px; margin-bottom: 25px; padding: 10px 15px; background-color: #fed501; transition: all 100ms ease-in; color: #111;" href="' . base_url() . 'Customer/confirmuser/' . $idCODE . '">Konfirmasi Email Kamu</a>
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
        $this->email->to($emailCUSTOMER);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function confirmuser($idCUSTOMER = NULL) {
		if (empty($idCUSTOMER)){
			$data = array(
	            'text' => 'Maaf sesuatu telah terjadi, silakan hubungi customer service kami di 0778 - 743XXXX.'
        	);
		} else {
			$idCUSTOMER = decode($idCUSTOMER);
			$checkuser = $this->Customer_m->checkuser($idCUSTOMER);
			if ($checkuser) {
				$data['statusCUSTOMER'] = '1';
				if ($this->Customer_m->save($data,$idCUSTOMER)) {

					$data = array(
		                'text' => 'Kami telah mengonfirmasi email anda, silakan masuk untuk memulai'
	            	);
				} else{
					$data = array(
			            'text' => 'Maaf sesuatu memalukan telah terjadi, silakan hubungi customer service kami di 0778 - 743XXXX.'
		        	);
				}

			} else {
				$data = array(
		            'text' => 'Maaf kamu belum terdaftar.'
	        	);
			}
		}
		$this->session->set_flashdata('message',$data);
        redirect('home');
	}

	public function settings(){
		$idCUSTOMER = $this->session->userdata('idCUSTOMER');
		if(empty($idCUSTOMER)){
			$data = array(
		            'text' => 'Maaf, kamu diharuskan untuk masuk/login terlebih dahulu.'
	        );
			$this->session->set_flashdata('message',$data);
			redirect('Home');
		}

		if (!is_null($this->session->flashdata('message'))) {
        	$data['message'] = $this->session->flashdata('message');
		} else {
			$data = '';
		}

		$this->load->view($this->data['frontendDIR']. 'Settings',$data);
	}

	public function updatepasswordcustomer(){

		$currentpassword = $this->Customer_m->hash($this->input->post('oldpasswordCUSTOMER'));

		$cekoldpassword = $this->Customer_m->checkoldpassword($this->session->userdata('idCUSTOMER'))->row();

		if($currentpassword == $cekoldpassword->passwordCUSTOMER) {

			$rules = $this->Customer_m->rules_recoverypass;
			$this->form_validation->set_rules($rules);

			if($this->form_validation->run() == TRUE){

				$data['passwordCUSTOMER'] = $this->Customer_m->hash($this->input->post('passwordCUSTOMER'));
				$idCUSTOMER = decode($this->input->post('idCUSTOMER'));

				$saving = $this->Customer_m->save($data, $idCUSTOMER);
				if($saving){

					if($this->sendemailnotification($cekoldpassword->nameCUSTOMER, $cekoldpassword->emailCUSTOMER)){
						$data = array(
							'text' => 'Kata sandi kamu sudah berhasil diganti.'
							);
						$this->session->set_flashdata('message', $data);
						redirect(base_url().'#!/'.base_url().'Customer/settings');
					}else{
						echo $this->email->print_debugger();
					}
				} else {

					$data = array(
						'text' => 'Maaf, perubahan kata sandi tidak berhasil dilakukan, silakan coba beberapa saat lagi.'
						);
					$this->session->set_flashdata('message', $data);
					redirect('Customer/settings');
				}

			} else {
				$data = array(
					'text' => 'Maaf, Mohon ulangi inputan form perubahan kata sandi anda!'
					);
				$this->session->set_flashdata('message', $data);
				redirect('Customer/settings');
			}
		} else {
			$data = array(
				'text' => 'Maaf, kata sandi Anda yang sebelumnya tidak sama dengan sebelumnya, mohon untuk dicoba kembali!'
				);
			$this->session->set_flashdata('message', $data);
			redirect('Customer/settings');
		}
	}

	private function sendemailnotification($nameCUSTOMER = NULL, $emailCUSTOMER = NULL)
	{
		$from_email = 'cs@dunia-otomotif.com';
        $subject = 'Pemberitahuan Perubahan Kata sandi - i-Laundry';
        $word1 = 'Kami sangat menjaga dan menghargai privasi kamu oleh karena itu, kamu telah menerima email ini karena kamu baru saja merubah kata sandi kamu pada <b>'.date("l, d F Y H:i:s").'</b> oleh karena itu, apabila itu benar kamu, silahkan acuhkan email ini dan apabila itu bukan kamu, silakan secepatnya hubungi pihak kami di 0778 - 741XXXX Terima Kasih!.' ;
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
		            Pemberitahuan perubahan kata sandi
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
		                    <td style="padding: 20px 40px 0 40px; font-weight: bold; text-align: left; font-family: sans-serif; font-size: 20px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Hallo! '.$nameCUSTOMER.'</td>
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
        $this->email->to($emailCUSTOMER);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function successresetpassword(){
		if(!empty($this->session->userdata('idCUSTOMER'))){
		    redirect('Home');
		}
		$this->load->view($this->data['frontendDIR']. 'Password_Reset');
	}

	public function processreset(){
		$email = $this->input->post('emailing');
		if(empty($email)){
			redirect(base_url());
		} else {
			$checkemail = $this->Customer_m->checkemailcustomer($email)->row();

			if(!empty($checkemail)){
				$emailnotifreset = $this->sendemailnotificationreset($checkemail->idCUSTOMER, $checkemail->emailCUSTOMER, $checkemail->nameCUSTOMER);
				if($emailnotifreset){
					$data = array(
	                    'text' => 'Terima kasih, kami sudah berhasil mengirim tautan reset kata sandi lewat email<br>silakan cek email kamu!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('Home');
				} else {
					$data = array(
	                    'text' => 'Maaf, kami tidak dapat mengirim email kepada anda, silakan coba beberapa saat kembali, Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('Home');
				}
			} else {
				$data = array(
	                    'text' => 'Maaf, email anda tidak terdaftar pada sistem kami, silakan masukkan kembali alamat email anda dengan benar, Terima kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('Home');
			}
		}
	}

	private function sendemailnotificationreset($idCUSTOMER = NULL, $emailCUSTOMER = NULL, $nameCUSTOMER = NULL)
	{
		$from_email = 'cs@dunia-otomotif.com'; //change this to yours
     	$idCODE = encode($idCUSTOMER);
        $subject = 'Konfirmasi Reset Kata sandi - i-Laundry';
        $word1 = 'Kami sangat menjaga dan menghargai privasi akun kamu oleh karena itu, kamu telah menerima email ini karena kamu baru saja mereset kata sandi kamu pada <b>'.date("l, d F Y H:i:s").'</b> Silakan klik link berikut untuk mereset kata sandi anda, Terima Kasih!.';
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
		            Reset kata sandi - , ' . $nameCUSTOMER . '!
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
		                    <td style="padding: 20px 40px 0 40px; font-weight: bold; text-align: left; font-family: sans-serif; font-size: 20px; mso-height-rule: exactly; line-height: 20px; color: #555555;">Halo, '.$nameCUSTOMER.'</td>
		                </tr>
		                    <td style="padding: 10px 20px 0px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                        '.$word1.'
		                        <br>
		                    </td>
		            </tr>
		            <tr id="btn-confirm">
		                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
		                    <a class="button-td" style="margin-top: 25px; margin-bottom: 25px; padding: 10px 15px; background-color: #fed501; transition: all 100ms ease-in; color: #111;" href="'.base_url().'#!/' . base_url() . 'Customer/confirmresetpassword/' . $idCODE . '">Reset kata sandi kamu!</a>
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
        $this->email->to($emailCUSTOMER);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function confirmresetpassword($id = NULL){
		$idCUSTOMER = decode($id);
		
		if(empty($idCUSTOMER)){
			redirect(base_url());
		} else {
			$data['idCUSTOMER'] = $idCUSTOMER;
			$this->load->view($this->data['frontendDIR']. 'Reset',$data);
		}
	}

	public function updateresetpassword(){

		$rules = $this->Customer_m->rules_resetpass;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

			$data['passwordCUSTOMER'] = $this->Customer_m->hash($this->input->post('passwordCUSTOMER'));
			$idCUSTOMER = decode($this->input->post('idCUSTOMER'));

			$saving = $this->Customer_m->save($data, $idCUSTOMER);
			if($saving){
				$data = array(
					'text' => 'Yeay!, Kata sandi kamu sudah berhasil di reset! Silakan masuk untuk memulai!.'
					);
				$this->session->set_flashdata('message', $data);
				redirect(base_url().'#!/'.base_url().'Customer/successresetpage');
			}else{
				$data = array(
					'text' => 'Maaf, kami tidak dapat me-reset kata sandi kamu, silakan coba beberapa saat kembali!'
					);
				$this->session->set_flashdata('message', $data);
				redirect(base_url());
			}

		} else {
			$data = array(
				'text' => 'Maaf, Mohon ulangi inputan form perubahan kata sandi anda!<br>Minimal 8 Karakter kata sandi'
				);
			$this->session->set_flashdata('message', $data);
			redirect(base_url());
		}
	}

	public function successresetpage(){

		$this->load->view($this->data['frontendDIR']. 'Password_Reset');
	}
}
