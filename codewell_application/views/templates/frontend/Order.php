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
				<div data-page="order" class="page" id="order">
					<div class="navbar navbar-no-color">
						<div class="navbar-inner">
							<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
							<div class="center">Order</div>
							<div class="right">
								<!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="page-content text-center">

						<div class="page-top-cover reservation-cover"></div>
						<div class="text-medium margin-top-15">Mau nyuci sekarang? <br> Isi form di bawah ini ya</div>
						<form method="POST" action="<?php echo base_url();?>Order/confirmation_order">
							<div class="list-block margin-bottom-40 booking-form">
								<ul class="no-border">
									<li>
										<div class="item-content">
		<!-- 								<div class="input-icon item-media">
											<i class="flaticon-date"></i>
										</div>
									-->								<div class="item-inner no-margin">
									<div class="item-input">
										<input type="text" name="pickupdateORDER" placeholder="Kapan mau dijemput?" id="calendar-default" required>
									</div>
								</div>

							</div>
						</li>
						<li>
							<div class="item-content">
		<!-- 								<div class="input-icon item-media">
											<i class="flaticon-time"></i>
										</div>
									-->								<div class="item-inner no-margin">
									<div class="item-input">
										<input type="text" name="pickuptimeORDER" placeholder="Jam berapa?" id="picker-time" required>
									</div>
								</div>

							</div>
						</li>
						<li class="align-top">
							<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-input">
										<select name="idREGION" id="idREGION" required>
											<option selected="" disabled="">Pilih daerah kamu</option>
											<?php
											if(!empty($listregion)){
												foreach ($listregion as $key => $region) {
													?>
													<option value="<?php echo $region->idREGION;?>"><?php echo $region->nameREGION;?></option>
													<?php } ?>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
								</li>
								<li class="align-top">
									<div class="item-content">
		<!-- 								<div class="input-icon item-media">
											<i class="flaticon-location-pin"></i>
										</div>
									-->								<div class="item-inner no-margin">
									<div class="item-input">
										<textarea name="pickupADDRESSORDERKOTOR" placeholder="Alamat penjemputan?" required></textarea>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-input">
										<select name="idPACKAGE" required>
											<?php
											if(!empty($listpackage)){
												foreach ($listpackage as $key => $package) {
													if($key == 0){
														$check = 'checked="checked"';
													} else {
														$check = '';
													}
													?>
													<option value="<?php echo $package->idPACKAGE;?>" <?php echo $check;?>><?php echo $package->namePACKAGE;?></option>
													<?php } ?>
													<?php } ?>
												</select>
												<!-- <input type="text" placeholder="Mau paket yang mana?" readonly id="picker-paket"> -->
											</div>
										</div>

									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-inner no-margin">
											<div class="item-input">
												<select name="idAROMA" id="div_aroma">
													<option value=''>Pilih Daerah kamu</option>
												</select>
												<!-- <input type="text" placeholder="Mau aroma apa?" readonly id="picker-aroma"> -->
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-inner no-margin">
											<div class="item-input">
												<select name="idSERVICES" required>
													<?php
													if(!empty($listservices)){
														foreach ($listservices as $key => $services) {
															if($key == 0){
																$check = 'checked="checked"';
															} else {
																$check = '';
															}
															?>
															<option value="<?php echo $services->idSERVICES;?>" <?php echo $check;?>><?php echo $services->nameSERVICES;?></option>
															<?php } ?>
															<?php } ?>
														</select>
														<!-- <input type="text" placeholder="Mau service apa?" readonly id="picker-service"> -->
													</div>
												</div>
											</div>
										</li>
										<li class="align-top">
											<div class="item-content">
												<div class="item-inner no-margin">
													<div class="item-input">
														<textarea name="notesORDER" placeholder="Ada catatan tambahan? (optional)"></textarea>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="margin-bottom-45 content-block">
									<input type="submit" name="submit" class="button button-fill" value="Okay, order sekarang" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- kelar Views utama -->
		<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-1.12.3.min.js"></script>
		<script>
			$(document).ready(function(){

				$("#idREGION").change(function (){
					var url = "<?php echo site_url('order/load_aroma');?>/"+$(this).val();
					$('#div_aroma').load(url);
					return false;
				})

			});
		</script>
		<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
		<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/custom.js"></script>
	</body>
