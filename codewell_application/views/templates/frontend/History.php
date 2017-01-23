<div class="pages">
	<div data-page="history" class="page" id="history">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i></a></div>
				<div class="center">Histori Pemesanan</div>
				<div class="right">
				<!-- Right link contains only icon - additional "icon-only" class-->
				<a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
				</div>
			</div>
		</div>
		<div class="page-content text-center">
			<div class="page-top-cover"></div>
			<div class="text-medium margin-top-15">Histori pesanan kamu</div>			
			<div class="history">
				<section class="recent">
					<div class="content-block">
						<div class="content-block-inner content-background">
							<p>Dalam Proses</p>
						</div>
					</div>
					<div class="list-block media-list margin-top-15">
						<ul class="history-item">
						<?php if(!empty($order)){
							foreach ($order as $key => $value) { 
								if($value->statusORDER == 1 OR $value->statusORDER == 2 OR $value->statusORDER == 3 OR $value->statusORDER == 4 OR $value->statusORDER == 8){
						?>
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">4 Mei 2016</div>
											<div class="item-after link-deepblue">Rp 75.000</div>
										</div>
										<ul class="item-text list">
											<li><h5>Berat</h5><p>8 kg</p></li>
											<li><h5>Paket</h5><p>Reguler</p></li>
											<li><h5>Aroma</h5><p>Mystic</p></li>
											<li><h5>Servis</h5><p>Cuci gosok</p></li>
										</ul>
										<div class="status-btn">
											<a href="#" class="button login-btn" id="paid">Lunas</a>
										</div>
									</div>
								</div>
							</li>
						<?php } ?>
						<?php } ?>
						<?php } ?>
						</ul> <!-- kelar ul History Item -->
					</div>
				</section>
				<section class="past">
					<div class="content-block">
						<div class="content-block-inner content-background">
							<p>Terdahulu</p>
						</div>
					</div>
					<div class="list-block media-list margin-top-15">
						<ul class="history-item">
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">12 Des 2016</div>
											<div class="item-after link-deepblue">Rp 15.000</div>
										</div>
										<ul class="item-text list">
											<li><h5>Berat</h5><p>8 kg</p></li>
											<li><h5>Paket</h5><p>Reguler</p></li>
											<li><h5>Aroma</h5><p>Mystic</p></li>
											<li><h5>Servis</h5><p>Cuci gosok</p></li>
										</ul>
										<div class="status-btn">
											<a href="#" class="button login-btn" id="unpaid">Bayar sekarang</a>
										</div>
									</div>
								</div>
							</li>	
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">11 Jan 2016</div>
											<div class="item-after link-deepblue">Rp 23.000</div>
										</div>
										<ul class="item-text list">
											<li><h5>Berat</h5><p>8 kg</p></li>
											<li><h5>Paket</h5><p>Reguler</p></li>
											<li><h5>Aroma</h5><p>Mystic</p></li>
											<li><h5>Servis</h5><p>Cuci gosok</p></li>
										</ul>
										<div class="status-btn">
											<a href="#" class="button login-btn" id="paid">Lunas</a>
										</div>
									</div>
								</div>
							</li>	
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">4 Mei 2016</div>
											<div class="item-after link-deepblue">Rp 75.000</div>
										</div>
										<ul class="item-text list">
											<li><h5>Berat</h5><p>8 kg</p></li>
											<li><h5>Paket</h5><p>Reguler</p></li>
											<li><h5>Aroma</h5><p>Mystic</p></li>
											<li><h5>Servis</h5><p>Cuci gosok</p></li>
										</ul>
										<div class="status-btn">
											<a href="#" class="button login-btn" id="unpaid">Bayar sekarang</a>
										</div>
									</div>
								</div>
							</li>	
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">11 Jan 2016</div>
											<div class="item-after link-deepblue">Rp 99.000</div>
										</div>
										<ul class="item-text list">
											<li><h5>Berat</h5><p>8 kg</p></li>
											<li><h5>Paket</h5><p>Reguler</p></li>
											<li><h5>Aroma</h5><p>Mystic</li</p>
											<li><h5>Servis</h5><p>Cuci gosok</p></li>
										</ul>
										<div class="status-btn">
											<a href="#" class="button login-btn" id="unpaid">Bayar sekarang</a>
										</div>
									</div>
								</div>
							</li>						
						</ul> <!-- kelar ul History Item -->
					</div>
				</section>
			</div> <!-- kelar class utama History -->
		</div>
	</div> <!-- kelar data-page History -->
</div>