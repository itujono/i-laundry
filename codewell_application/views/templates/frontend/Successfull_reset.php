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
							<div class="text-center margin-bottom-15 icon-recover">
								<i class="flaticon-profile"></i>
							</div>
							<div class="main-title pt0">
								<h1>Yeay! Password kamu berhasil direset!</h1>
							</div>
							<div class="gray-text text-thiny">
								Next time, lebih berhati-hati dalam mengelola password. Enjoy! :)
							</div>
                            <a href="<?php echo base_url();?>" class="button login-btn margin-top-30">Kembali ke Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- kelar Views utama -->

  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-3.1.1.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/slick.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
  	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/custom.js"></script>
</body>

</html>