<div class="pages">
	<div data-page="setting" class="page" id="setting">
		<div class="navbar navbar-no-color">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Pengaturan</div>
				<div class="right">
				<!-- Right link contains only icon - additional "icon-only" class-->
				<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">
			
			<div class="page-top-cover"></div>
			<div class="text-medium margin-top-15">Ubah password kamu di sini</div>
			<form method="POST" action="<?php echo base_url();?>customer/updatepasswordcustomer">
				<div class="list-block margin-bottom-40">
					<input type="hidden" readonly required name="idCUSTOMER" value="<?php echo encode($this->session->userdata('idCUSTOMER')); ?>">
				  	<ul class="no-border">
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-key"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="password" name="oldpasswordCUSTOMER" class="" placeholder="Ketik password lama kamu">
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="item-inner no-margin">
								  	<div class="item-input retype">
										<input type="password"  name="passwordCUSTOMER" class="" placeholder="Ketik password baru kamu">
								  	</div>
								</div>
						  	</div>
						</li>
						<li>
						  	<div class="item-content">
								<div class="input-icon item-media"><i class="flaticon-key"></i></div>
								<div class="item-inner no-margin">
								  	<div class="item-input">
										<input type="password" name="repasswordCUSTOMER" class="" placeholder="Ketik lagi password baru kamu">
								  	</div>
								</div>
						  	</div>
						</li>
					</ul>
				</div>
				<div class="row btn-form-group margin-bottom-10">
					<div class="col-100">
						<!-- <a href="index.html" class="button login-btn block">Ubah password</a> -->
						<input type="submit" name="submit" class="button login-btn block" id="submit" value="Ubah password" />
					</div>
				</div>
				<div class="text-center margin-bottom-15">
					<a href="<?php echo base_url();?>" class="button link-btn gray-text">Kembali ke Home</a>
				</div>
			</form>
		</div>
	</div>
</div>