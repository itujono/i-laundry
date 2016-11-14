<div class="pages">
	<div data-page="recover" class="page" id="recover">

		<div class="page-content text-center margin-top-30">
			<div class="text-center back-close-icon"><a href="#" class="back link"><i class="flaticon-close"></i></a></div>
			<div class="content-block">
				<div class="text-center margin-bottom-15 icon-recover"><i class="flaticon-profile"></i></div>
				<div class="main-title pt0">
					<h1>Lupa password akun kamu?</h1>
				</div>
				<div class="gray-text text-thiny">
					Tidak usah cemas. Semua orang bisa saja lupa. Sekarang, masukkan email akun kamu di form di bawah ini. Kami akan mengirimkan instruksi via email bagaimana cara mereset password kamu.
				</div>
				<form  method="post" action="<?php echo base_url();?>customer/processreset">
					<div class="list-block margin-bottom-15">
					  <ul class="no-border">		
						<li>
						  <div class="item-content">
							<div class="input-icon item-media"><i class="flaticon-email"></i></div>
							<div class="item-inner no-margin">
							  <div class="item-input">
								<input type="email" name="emailing" class="" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" placeholder="Ketik email kamu">
							  </div>
							</div>
						  </div>
						</li>
					  </ul>
					</div>
					<div class="row margin-bottom-10">
						<div class="col-100">
							<!-- <a href="password-reset.html" class="button login-btn block">Kirimkan saya email-nya sekarang</a> -->
							<input type="submit" name="submit" class="button login-btn block" value="Kirimkan saya email-nya sekarang" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>