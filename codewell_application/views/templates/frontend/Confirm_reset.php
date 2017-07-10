<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/apple-touch-icon.png" />
  <link rel="apple-touch-startup-image" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/apple-touch-startup-image-320x460.png" />
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/196x196.png">
  <link rel="shortcut icon" sizes="128x128" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/128x128.png">
  <!-- Color theme for statusbar -->
  <meta name="theme-color" content="#3db5e4">
  <title>i-Laundry - Selamat Datang</title>
  
  <link href="https://fonts.googleapis.com/css?family=Itim|Roboto:300,400,700,900" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.material.min.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.material.colors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().$this->data['asfront']; ?>css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().$this->data['asfront']; ?>css/slick-theme.css"/>
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>fonts/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/base.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/my-app.css">
</head>
<body class="theme-blue">
	<div class="views">
		<div class="view view-main">
			<div class="pages">
				<div data-page="recover" class="page" id="recover">
					<div class="page-content text-center margin-top-30">
						<div class="text-center back-close-icon"><a href="#" class="back link"><i class="flaticon-close"></i></a></div>
						<div class="content-block">
							<div class="text-center margin-bottom-15 icon-recover"><i class="flaticon-profile"></i></div>
							<div class="main-title pt0">
								<h1>Masukan kata sandi baru kamu!</h1>
							</div>
							<div class="gray-text text-thiny">
								Tidak apa-apa. Semua orang bisa saja lupa. Sekarang, masukkan kata sandi baru kamu di form di bawah ini. Kami akan me-reset kata sandi kamu.
							</div>
							<form  method="post" action="<?php echo base_url();?>Customer/updateresetpassword">
							<input type="hidden" readonly required name="idCUSTOMER" value="<?php echo encode($idCUSTOMER); ?>">
								<div class="list-block margin-bottom-15">
								  <ul class="no-border">		
									<li>
									  <div class="item-content">
										<div class="input-icon item-media"><i class="flaticon-key"></i></div>
										<div class="item-inner no-margin">
										  <div class="item-input">
											<input type="password" name="passwordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordCUSTOMER.pattern = this.value;" id="passwordCUSTOMER" required="" placeholder="Ketik kata sandi baru kamu">
										  </div>
										</div>
									  </div>
									</li>
									<li>
									  <div class="item-content">
										<div class="input-icon item-media"><i class="flaticon-key"></i></div>
										<div class="item-inner no-margin">
										  <div class="item-input">
											<input type="password" name="repasswordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon samakan kata sandi anda seperti kata sandi diatas' : '');" id="repasswordCUSTOMER" required="" placeholder="Ketik lagi sandi baru kamu">
										  </div>
										</div>
									  </div>
									</li>
								  </ul>
								</div>
								<div class="row margin-bottom-10">
									<div class="col-100">
										<!-- <a href="password-reset.html" class="button login-btn block">Kirimkan saya email-nya sekarang</a> -->
										<input type="submit" name="submit" class="button login-btn block" value="Reset kata sandi sekarang" />
									</div>
								</div>
							</form>
						</div>
					</div> <!-- kelar Page-Content -->
				</div>
			</div> <!-- kelar Pages utama --> 
		</div>
	</div> <!-- kelar Views utama -->


  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-3.1.1.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/slick.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/custom.js"></script>
</body>

</html>