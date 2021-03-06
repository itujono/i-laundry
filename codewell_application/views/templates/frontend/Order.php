
<div class="pages">
	<div data-page="order" class="page" id="order">
		<div class="navbar navbar-no-color">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Order</div>
				<div class="right">
					<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">

			<div class="page-top-cover reservation-cover"></div>
			<div class="text-medium margin-top-15">Mau nyuci sekarang? <br> Isi form di bawah ini ya</div>
			<form method="POST" action="<?php echo base_url();?>Order/confirmation_order" class="store-data" id="order-form">
				<div class="list-block margin-bottom-40 booking-form">
					<ul class="no-border">
						<li>
							<div class="item-content">
<!-- 								<div class="input-icon item-media">
									<i class="flaticon-date"></i>
								</div> -->
								<div class="item-inner no-margin">
									<div class="item-input">
										<input type="text" name="pickupdateORDER" placeholder="Kapan mau dijemput?" id="calendar-default" required>
									</div>
								</div>

							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-inner no-margin">
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
													<option value="<?php echo $region->idREGION;?>"><?php echo $region->nameREGION;?>
											</option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
						</li>
						<li class="align-top">
							<div class="item-content">
								<div class="item-inner no-margin">
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
				</div> <!-- kelar Page-Content -->
			</div>
		</div> <!-- kelar div Pages -->

