<div class="pages">
	<div data-page="recover" class="page" id="recover">

		<div class="page-content text-center margin-top-30">
			<div class="text-center back-close-icon"><a href="#" class="back link"><i class="flaticon-close"></i></a></div>
			<div class="content-block">
				<div class="text-center margin-bottom-15 icon-recover"><i class="flaticon-profile"></i></div>
				<div class="main-title pt0">
					<h1>Masukan kata sandi baru kamu!</h1>
				</div>
				<div class="gray-text text-thiny">
					Tidak apa-apa. Semua orang bisa saja lupa. Sekarang, masukkan kata sandi baru kamu di form di bawah ini. Kami akan me-reset kata sandi kamu.
				</div>
				<form  method="post" action="<?php echo base_url();?>Customer/updateresetpassword">
				<input type="hidden" readonly required name="idCUSTOMER" value="<?php echo encode($idCUSTOMER); ?>">
					<div class="list-block margin-bottom-15">
					  <ul class="no-border">		
						<li>
						  <div class="item-content">
							<div class="input-icon item-media"><i class="flaticon-key"></i></div>
							<div class="item-inner no-margin">
							  <div class="item-input">
								<input type="password" name="passwordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordCUSTOMER.pattern = this.value;" id="passwordCUSTOMER" required="" placeholder="Ketik kata sandi baru kamu">
							  </div>
							</div>
						  </div>
						</li>
						<li>
						  <div class="item-content">
							<div class="input-icon item-media"><i class="flaticon-key"></i></div>
							<div class="item-inner no-margin">
							  <div class="item-input">
								<input type="password" name="repasswordCUSTOMER" class="" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon samakan kata sandi anda seperti kata sandi diatas' : '');" id="repasswordCUSTOMER" required="" placeholder="Ketik lagi sandi baru kamu">
							  </div>
							</div>
						  </div>
						</li>
					  </ul>
					</div>
					<div class="row margin-bottom-10">
						<div class="col-100">
							<!-- <a href="password-reset.html" class="button login-btn block">Kirimkan saya email-nya sekarang</a> -->
							<input type="submit" name="submit" class="button login-btn block" value="Reset kata sandi sekarang" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>