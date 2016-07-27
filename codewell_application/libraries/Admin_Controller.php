<?php
class Admin_Controller extends MY_Controller{

	function __construct (){
		parent::__construct();
		$this->load->helper('codewell');

		$this->data['folBACKEND'] = $this->data['folder_admin'];
		$this->data['backendDIR'] = 'templates/backend/';
		$this->data['asback'] = 'assets/backend/';
		$this->data['rootDIR'] = 'templates/';
	}

	function mail_config(){
		$config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; 
        $config['smtp_port'] = '465'; 
        $config['smtp_timeout'] = 30;
        $config['smtp_user'] = 'prowebmediaindonesia@gmail.com';
        $config['smtp_pass'] = 'prowebmedia123'; 
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; 
        return $config;
	}

	function mail_template($messages,$subject,$type){
		if($type == 'newsletter'){

		$address = 'Komp. Baloi Permata Regency Blok. AA #3A';
        $telephone = '+62 778 7418587';
        $facebook = 'facebook.com';
        $twitter = 'twitter.com';
        $instagram = 'instagram.com';
        $footer = 'Jika kamu ada pertanyaan, silakan hubungi kami lewat email di hello@prowebmedia.org atau hubungi di +62 778 7418587. Waktu buka (08:30 &mdash; 17:00)';

		$messagesNews = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
	    <title>'. $subject .' - PROWEBMEDIA.ORG</title>

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
		            '. $subject .' - PROWEBMEDIA.ORG
		        </div>
		        <!-- Visually Hidden Preheader Text : END -->

		       <div style="margin: 20px 0 20px 0">
		        
		        <!-- Email Body : BEGIN -->
		        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" class="email-container">
		            
		            <!-- Hero Image, Flush : BEGIN -->
		            <tr>
		                <td style="font-family: sans-serif; padding: 25px 0 0 40px; font-size: 48px; color: #17C3D6; letter-spacing: 20px;">
		                    PROWEBMEDIA
		                </td>
		            </tr>

		            <tr>
		                <td style="padding: 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555;">

		               '. $messages .'

		                </td>
		            </tr>
		            <!-- 1 Column Text : BEGIN -->
		             <tr>
		                <td style="padding: 20px 20px 20px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #555555; background-color: #f1fafa;">
		                    <webversion style="color:#888888; font-size: 14px; text-decoration:underline; font-weight: bold;">Terima Kasih</webversion>
		                    <br>
		                    <span style="font-size: 20px; padding: 10px 0px 15px 0px; font-weight: bold; font-style: italic;">Laparkali.com</span>
		                    <br>
		                    <span class="mobile-link--footer">'.$address.'</span><br><span class="mobile-link--footer">'.$telephone.'</span>
		                    <div style="font-size: 24px; margin-top: 20px; color: #aaa;">
		                        <a href="'.$facebook.'"><i class="fa fa-facebook-square"></i></a>
		                        <a href="'.$twitter.'"><i class="fa fa-twitter-square"></i></a>
		                        <a href="'.$instagram.'"><i class="fa fa-instagram"></i></a>
		                    </div>
		                     <div style="margin-top: 25px; color: #999;">'.$footer.'<br><a href="'.base_url().'User/UnsubcribedPage" title="Berhenti Berlangganan?">Berhenti Berlangganan newsletter ini?</a>
		                     </div>
		                </td>
		            </tr>
		            <tr style="background-color: #777">
		            <td style="padding: 10px 20px 10px 40px; text-align: left; font-family: sans-serif; font-size: 12px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;">
		                    2016 &copy; prowebmedia.org is crafted by <a href="https://www.prowebmedia.org/">Proweb Media Indonesia</a>
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
		}
        return $messagesNews;
	}
}