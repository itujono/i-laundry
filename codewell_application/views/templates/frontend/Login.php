<div class="pages">
	<div data-page="login" class="page" id="login">
		<div class="navbar navbar-no-color">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Login</div>
				<div class="right">
				<!-- Right link contains only icon - additional "icon-only" class-->
				<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">
			
			<div class="page-top-cover"></div>
			<div class="text-medium margin-top-15">Silakan login terlebih dulu</div>
			<form method="post" action="<?php echo base_url();?>customer/processlogin">
				<div class="list-block margin-bottom-40">
				  <ul class="no-border">		
					<li>
					  <div class="item-content">
						<div class="input-icon item-media"><i class="flaticon-email"></i></div>
						<div class="item-inner no-margin">
						  <div class="item-input">
							<input type="email" name="email" placeholder="Ketik e-mail kamu" required="">
						  </div>
						</div>
					  </div>
					</li>
					<li>
					  <div class="item-content">
						<div class="input-icon item-media"><i class="flaticon-key"></i></div>
						<div class="item-inner no-margin">
						  <div class="item-input">
							<input type="password" name="password" class="" placeholder="Ketik password kamu" required="" pattern="^\S{8,}$" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : '')">
						  </div>
						</div>
					  </div>
					</li>
					</ul>
					 <a href="<?php echo base_url();?>customer/reset" class="button link-btn gray-text">Lupa password?</a>
				</div>
				<div class="row btn-form-group margin-bottom-10">
					<div class="col-100">
						<!-- <a href="restaurants.html" class="button login-btn block">Login</a> -->
						<input type="submit" id="submit-login" name="submit" class="button login-btn block" value="Login"/>
					</div>
				</div>
				<div class="text-center margin-bottom-15">
					<a href="<?php echo base_url();?>customer/register" class="button link-btn gray-text">Belum punya akun? Register sekarang</a>
				</div>
			</form>
		</div>
	</div>
</div>