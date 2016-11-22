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
			<form>
				<div class="list-block margin-bottom-40 booking-form">
				  	<ul class="no-border">
						<li>
						  	<div class="item-content">
<!-- 								<div class="input-icon item-media">
									<i class="flaticon-date"></i>
								</div>
 -->								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="text" name="pickuptimeORDER" placeholder="Kapan mau dijemput?" id="calendar-default" required>
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
										<input type="text" placeholder="Time*" id="picker-time" required>
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
								  		<select>
								  			<option value="Sekupang">Sekupang</option>
								  			<option value="Batam Center">Batam Center</option>
								  			<option value="Sagulung">Sagulung</option>
								  			<option value="Batam Kota">Batam Kota</option>
								  			<option value="Belakang Padang">Belakang Padang</option>
								  			<option value="Rempang">Rempang</option>
								  			<option value="Batu Ampar">Batu Ampar</option>
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
								  	</div>
								</div>
							
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<select name="idAROMA" required>
										<?php
										if(!empty($listaroma)){
	                                        foreach ($listaroma as $key => $aroma) {
	                                            if($key == 0){
	                                                $check = 'checked="checked"';
	                                            } else {
	                                                $check = '';
	                                            }
										?>
											<option value="<?php echo $aroma->idAROMA;?>" <?php echo $check;?>><?php echo $aroma->nameAROMA;?></option>
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
						<li>
							<ul class="payment-option">
						    <!-- Single radio input -->
							    <li>
							      	<label class="label-radio item-content">
							        <!-- Checked by default -->
							        	<input type="radio" name="my-radio" value="transfer" checked="checked">
								        <div class="item-media">
								          	<i class="icon icon-form-radio"></i>
								        </div>
								        <div class="item-inner">
								          	<div class="item-title">Transfer Bank</div>
								        </div>
							      	</label>
							    </li>
							    <li>
							      	<label class="label-radio item-content">
							        	<input type="radio" name="my-radio" value="debit">
								        <div class="item-media">
								          	<i class="icon icon-form-radio"></i>
								        </div>
								        <div class="item-inner">
								          	<div class="item-title">Kartu Debit/Kartu Kredit</div>
								        </div>
							      	</label>
							    </li>
							    <li>
							      	<label class="label-radio item-content">
							        	<input type="radio" name="my-radio" value="cash">
								        <div class="item-media">
								          	<i class="icon icon-form-radio"></i>
								        </div>
								        <div class="item-inner">
								          	<div class="item-title">Tunai/COD</div>
								        </div>
							      	</label>
							    </li>
						  	</ul>
						</li>
					</ul>
				</div>
				<div class="margin-bottom-15 content-block">
					<!-- <a href="login.html" class="button button-fill color-deeporange text-thiny">Book now</a> -->
					<input type="submit" name="submit" class="button button-fill" value="Konfirmasi data" />
				</div>
			</form>
		</div>
	</div>
</div>