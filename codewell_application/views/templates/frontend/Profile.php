<div class="pages">
	<div data-page="profile" class="page" id="profile">
		<div class="navbar navbar-no-color">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Edit Profile</div>
				<div class="right">
				<!-- Right link contains only icon - additional "icon-only" class-->
				<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">
			
			<div class="page-top-cover reservation-cover"></div>
			<div class="text-medium margin-top-15">Mau edit detail profile kamu? <br> Isi form di bawah ini ya</div>
			<form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>customer/updatecustomer">
				<div class="list-block margin-bottom-40 booking-form">
					<div class="user-avatar">
					<?php
						if(!empty($profile->imageCUSTOMER)){
							$img = $profile->imageCUSTOMER;
						} else {
							$img = base_url().$this->data['asfront'].'img/photos/user.png';
						}
					?>	
						<img src="<?php echo $img;?>" title="Avatar <?php echo $profile->nameCUSTOMER;?>"/>
						<label class="img-container" for="imgfile">
							Ubah avatarmu...
							<input type="file" name="imgCUSTOMER"/>
						</label>
					</div>
				  	<ul class="no-border">
				  		<input readonly type="hidden" name='idCUSTOMER' value="<?php echo encode($profile->idCUSTOMER);?>"/>
				  		<input readonly type="hidden" name='emailCUSTOMER' value="<?php echo encode($profile->emailCUSTOMER);?>"/>
						<li>
						  	<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-title label">Ubah nama kamu</div>
								  	<div class="item-input">
										<input type="text" name="nameCUSTOMER" value="<?php echo $profile->nameCUSTOMER;?>">
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-title label">Ubah nomor telepon kamu</div>
								  	<div class="item-input">
										<input type="number" name="telephoneCUSTOMER" value="<?php echo $profile->telephoneCUSTOMER;?>" min="0" pattern="[0-9]*">
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-title label">Ubah nomor handphone kamu</div>
								  	<div class="item-input">
										<input type="number" name="mobileCUSTOMER" value="<?php echo $profile->mobileCUSTOMER;?>" min="0" pattern="[0-9]*" required>
								  	</div>
								</div>
						  	</div>
						</li>
						<li class="align-top">
						  	<div class="item-content">
								<div class="item-inner no-margin">
									<div class="item-title label">Ubah alamat kamu</div>
								  	<div class="item-input">
										<textarea rows="6" name="addressCUSTOMER"><?php echo $profile->addressCUSTOMER;?></textarea>
								  	</div>
								</div>
						  	</div>
						</li>
					</ul>
				</div>
				<div class="margin-bottom-15 content-block">
					<!-- <a href="index.html" class="button login-btn block">Simpan</a> -->
					<input type="submit" name="submit" class="button login-btn block confirm-save" value="Simpan"/>
				</div>
			</form>
		</div>
	</div>
</div>