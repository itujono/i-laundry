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
								<div class="input-icon item-media"><i class="flaticon-date"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="text" name="pickuptimeORDER" placeholder="Kapan mau dijemput?" id="calendar-default" required="">
								  	</div>
								</div>
							
						  	</div>
						</li>
						<li class="align-top">
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-location-pin"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<textarea name="pickupADDRESSORDERKOTOR" placeholder="Di mana mau dijemput?" required=""></textarea>
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-cover"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<select name="idPACKAGE" required="">
										<?php
                                        if(!empty($listpackage)){
                                            foreach ($listpackage as $key => $package) {
                                                if($key == 0){
                                                    $check = 'checked="checked"';
                                                } else {
                                                    $check = '';
                                                }
                                        ?>
											<option <?php echo $check;?>><?php echo $package->namePACKAGE;?></option>
										<?php } ?>
										<?php } ?>
										</select>
								  	</div>
								</div>
							
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-cover"></i></div>
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
											<option <?php echo $check;?>><?php echo $aroma->idAROMA;?></option>
										<?php } ?>
										<?php } ?>
										</select>
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-cover"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<select name="idSERVICES" required="">
										<?php
                                        if(!empty($listservices)){
                                            foreach ($listservices as $key => $services) {
                                                if($key == 0){
                                                    $check = 'checked="checked"';
                                                } else {
                                                    $check = '';
                                                }
                                        ?>
											<option <?php echo $check;?>><?php echo $services->idSERVICES;?></option>
										<?php } ?>
										<?php } ?>
										</select>
								  	</div>
								</div>
						  	</div>
						</li>
						
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-time"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="text" placeholder="Time*" id="picker-time">
								  	</div>
								</div>
							
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-people"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="text" placeholder="Seats*">
								  	</div>
								</div>
							
						  	</div>
						</li>
					</ul>
				</div>
				<div class="margin-bottom-15 content-block">
					<a href="login.html" class="button button-fill color-deeporange text-thiny">Book now</a>
				</div>
			</form>
		</div>
	</div>
</div>