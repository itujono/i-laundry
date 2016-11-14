<div class="pages">
	<div data-page="register" class="page" id="register">
		<div class="navbar navbar-no-color">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Register</div>
				<div class="right">
				<!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">
			
			<div class="page-top-cover"></div>
			<div class="text-medium margin-top-15">Isi kolom di bawah ini</div>
			<form method="post" action="<?php echo base_url();?>customer/savecustomer">
				<div class="list-block margin-bottom-40">
				  <ul class="no-border">
					<li>
					  <div class="item-content">
						<div class="input-icon item-media"><i class="flaticon-user"></i></div>
						<div class="item-inner no-margin">
						  <div class="item-input">
							<input type="text" name="nameCUSTOMER" class="" required="" placeholder="Ketik nama lengkap kamu">
						  </div>
						</div>
					  </div>
					</li>
					<li>
					  <div class="item-content">
						<div class="input-icon item-media"><i class="flaticon-email"></i></div>
						<div class="item-inner no-margin">
						  <div class="item-input">
							<input type="email" name="emailCUSTOMER" class="" required="" placeholder="Ketik e-mail kamu">
						  </div>
						</div>
					  </div>
					</li>
					<li>
					  <div class="item-content">
						<div class="input-icon item-media"><i class="flaticon-key"></i></div>
						<div class="item-inner no-margin">
						  <div class="item-input">
							<input type="password"  name="passwordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordCUSTOMER.pattern = this.value;" id="passwordCUSTOMER" required="" placeholder="Ketik password kamu">
						  </div>
						</div>
					  </div>
					</li>
					<li>
					  <div class="item-content">
						<div class="item-inner no-margin">
						  <div class="item-input retype">
							<input type="password" name="repasswordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon samakan kata sandi anda seperti kata sandi diatas' : '');" id="repasswordCUSTOMER" required="" placeholder="Ketik sekali lagi password kamu">
						  </div>
						</div>
						
					  </div>
					</li>
					</ul>
				</div>
				<div class="row btn-form-group margin-bottom-10">
					<div class="col-100">
						<!-- <a href="restaurants.html" class="button login-btn block">Register sekarang</a> -->
						<input type="submit" name="submit" class="button login-btn block" value="Register sekarang" />
					</div>
				</div>
				<div class="text-center margin-bottom-15">
					<a href="<?php echo base_url();?>customer/login" class="button link-btn gray-text">Sudah punya akun? Login</a>
				</div>
			</form>
		</div>
	</div>
</div>