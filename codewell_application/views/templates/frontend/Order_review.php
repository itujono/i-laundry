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
			<div data-page="about" class="page" id="order-review">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
						<div class="center">Review order</div>
						<div class="right">
						<!-- Right link contains only icon - additional "icon-only" class-->
						<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
						</div>
					</div>
				</div>
				<div class="page-content">
				<form method="POST" action="<?php echo base_url();?>Order/saveorder">
					<div class="review">
						<div class="content-block-title">
							<p>Ini detail orderan kamu kali ini</p>
							<h4>Inv <?php echo $confirm_order['kodeORDER'];?></h4>
							<input type="hidden" name="kodeORDER" value="<?php echo $confirm_order['kodeORDER'];?>" readonly required>
						</div>
					    <div class="content-block">
					    	<ul class="review-list">
					    		<li>
					    			<div>
								    	<h4>Tanggal</h4>
								    	<p><?php echo dF($confirm_order['pickupdateORDER'], 'l, d F Y');?></p>
								    	<input type="hidden" name="pickupdateORDER" value="<?php echo $confirm_order['pickupdateORDER'];?>" readonly required>
							    	</div>
						    		<div>
								    	<h4>Jam</h4>
								    	<p><?php echo dF($confirm_order['pickuptimeORDER'], 'H:i:s');?></p>
								    	<input type="hidden" name="pickuptimeORDER" value="<?php echo $confirm_order['pickuptimeORDER'];?>" readonly required>
								    </div>
							    </li>
					    		<li>
							    	<h4>Daerah</h4>
							    	<p><?php echo $region->nameREGION;?></p>
							    	<input type="hidden" name="idREGION" value="<?php echo $confirm_order['idREGION'];?>" readonly required>
							    	<input type="hidden" name="idCUSTOMER" value="<?php echo encode($this->session->userdata('idCUSTOMER'));?>" required>
							    </li>
					    		<li>
							    	<h4>Alamat</h4>
							    	<p><?php echo $confirm_order['pickupADDRESSORDERKOTOR'];?></p>
							    	<input type="hidden" name="pickupADDRESSORDERKOTOR" value="<?php echo $confirm_order['pickupADDRESSORDERKOTOR'];?>" readonly required>
							    </li>
					    		<li>
							    	<h4>Paket</h4>
							    	<p><?php echo $package->namePACKAGE;?></p>
							    	<input type="hidden" name="idPACKAGE" value="<?php echo $confirm_order['idPACKAGE'];?>" readonly required>
							    </li>
					    		<li>
							    	<h4>Aroma</h4>
							    	<p><?php echo $aroma->nameAROMA;?></p>
							    	<input type="hidden" name="idAROMA" value="<?php echo $confirm_order['idAROMA'];?>" readonly required>
							    </li>
					    		<li>
							    	<h4>Service</h4>
							    	<p><?php echo $services->nameSERVICES;?></p>
							    	<input type="hidden" name="idSERVICES" value="<?php echo $confirm_order['idSERVICES'];?>" readonly required>
							    </li>
							    <li>
							    	<h4>Catatan Order</h4>
							    	<p><?php echo $confirm_order['notesORDER'];?></p>
							    	<input type="hidden" name="notesORDER" value="<?php echo $confirm_order['notesORDER'];?>" readonly required>
							    </li>
					    	</ul>
			              	<div class="button-submit">
				                <div class="col-50">
				                  	<!-- <a href="#" class="button login-btn">Okay, silakan proses</a> -->
				                  	<input type="submit" name="submit" class="button login-btn" value="Okay, order sekarang" />
				                </div>
				                <div class="col-50">
				                  	<a href="<?php echo base_url();?>order" class="button link-btn">
				                    	Tunggu dulu!
				                  	</a>
				                </div>
				            </div>
					    </div>
				    </div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div> <!-- kelar Views utama -->

	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
	<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/custom.js"></script>
</body>

</html>