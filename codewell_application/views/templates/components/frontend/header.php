<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AutoMobile</title>

<?php echo $addons; ?>

</head>
<body class="wp-automobile single-page">
<div class="wrapper"> 
	<!-- Header Start -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
					<div class="cs-logo">
						<div class="cs-media">
							<figure><a href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url();?>assets/frontend/images/logo.png" alt="" /></a></figure>
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
					<div class="cs-main-nav pull-right">
						<nav class="main-navigation">
							<ul>
								<li><a href="<?php echo base_url(); ?>">Beranda</a></li>
								<!-- <li><a href="#">Jenis Kendaraan</a>
									<ul>
										<li><a href="#">Sedan</a></li>
										<li><a href="#">Pick Up</a></li>
										<!-- <li><a href="#">Detail Page</a></li>
									</ul>
								</li> -->
								<li><a href="<?php echo base_url(); ?>dealers">Dealer</a>
									<!-- <ul>
										<li><a href="<?php //echo base_url(); ?>dealers">Daftar Dealer</a></li>
										<li><a href="<?php //echo base_url(); ?>dealers/dealer_details">Detil Halaman</a></li>
									</ul> -->
								</li>
								<?php 
									if($this->session->userdata('idSELLER') != NULL) { 
								?>
										
										<li class="cs-user-option">
											<div class="cs-login">
												<div class="cs-login-dropdown"> 
													<a href="#">
														<i class="icon-user2"></i> <?php echo $this->session->userdata('Name');?> 
														<i class="icon-chevron-down2"></i>
													</a>
													<div class="cs-user-dropdown"> <strong><?php echo $this->session->userdata('Name');?></strong>
														<ul>
															<li><a href="<?php echo base_url();?>User/profile/<?php echo $this->session->userdata('idSELLER');?>/<?php echo urldecode($this->session->userdata('Name'));?>">Profil
															<!-- <span class="cs-bgcolor">3</span> --></a></li>
															<!-- <li><a href="user-car-listing.html">Notifications <span class="cs-bgcolor">23</span></a></li> -->
															<li><a href="<?php echo base_url();?>VehicleSeller">Daftar post terbaru</a></li>
															<li><a href="<?php echo base_url();?>Settings/Account/<?php echo $this->session->userdata('idSELLER');?>/<?php echo urldecode($this->session->userdata('Name'));?>">Pengaturan</a></li>
														</ul>
														<a class="btn-sign-out" href="<?php echo base_url(); ?>user/Logout">Logout</a> 
													</div>
													<a class="cs-bgcolor btn-form" data-toggle="modal" href="<?php echo base_url();?>VehicleSeller" data-target="" aria-hidden="true"><i class="icon-plus"></i> Jual Mobil</a> 

												</div>

											</div>
										</li>
								<?php
									} else {
								?>
										<li class="cs-user-option">
											<div class="cs-login">
												<div class="cs-login-dropdown"> 
													<a class="cs-bgcolor btn-form" data-toggle="modal" href="#" data-target="#user-sign-up" aria-hidden="true"><i class="icon-plus"></i> Upload</a> 
												</div>
											</div>
										</li>
								<?php
									}
								?>
										<li class="cs-user-option">
											<div class="cs-login">
												<div class="cs-login-dropdown"> 
													<a class="cs-bgcolor btn-form" data-toggle="modal" href="#" data-target="" aria-hidden="true"><i class="icon-plus"></i> Pasang iklan</a> 
												</div>
											</div>
										</li>

								
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->