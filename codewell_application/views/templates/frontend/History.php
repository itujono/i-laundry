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
							<p>Belum dibayar / Dalam proses</p>
						</div>
					</div>
					<div class="list-block media-list margin-top-15">
						<ul class="history-item">
						<?php if(!empty($orders)){
							foreach ($orders as $key => $order) { 
								if($order->statusORDER == 1 OR $order->statusORDER == 2 OR $order->statusORDER == 3 OR $order->statusORDER == 4 OR $order->statusORDER == 8){
						?>
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title"><?php echo dF($order->createdateORDER,'d F Y');?></div>
											<?php
												if(!empty($order->priceORDER)){
													$price = "Rp.". number_format($order->priceORDER, 0,',','.');
												} else {
													$price = 'Rp. 0,-';
												}
											?>
											<div class="item-after link-deepblue"><?php echo $price;?></div>
										</div>
										<ul class="item-text list">
										<?php
											if(!empty($order->beratORDER)){
												$berat = $order->beratORDER.' '.'kg';
											} else {
												$berat = '0 Kg';
											}
										?>
											<li><h5>Berat</h5><p><?php echo $berat;?></p></li>
											<li><h5>Paket</h5><p><?php echo $order->namePACKAGE;?></p></li>
											<li><h5>Aroma</h5><p><?php echo $order->nameAROMA;?></p></li>
											<li><h5>Servis</h5><p><?php echo $order->nameSERVICES;?></p></li>
										</ul>
										<div class="status-btn">
										<?php if($order->statusORDER == 3){ ?>
										<form action="<?php echo base_url()?>payment/sendpayment" method="POST" id="payment-form">
											<?php echo form_hidden('kodeORDER',$order->kodeORDER,'hidden'); ?>
											<button class="button login-btn" id="unpaid" type="submit">Bayar Sekarang</button>
										</form>
										<?php } else {?>
										<?php echo $order->status;?>
										<?php } ?>
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
							<p>Sudah dibayar / Selesai</p>
						</div>
					</div>
					<div class="list-block media-list margin-top-15">
						<ul class="history-item">
							<?php if(!empty($orders)){
							foreach ($orders as $key => $order) { 
								if($order->statusORDER == 5 OR $order->statusORDER == 6 OR $order->statusORDER == 7 OR $order->statusORDER == 9){
						?>
							<li>
								<div class="item-link item-content">
									<div class="item-media">
										<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/food.jpg" alt="Ada deh" width="80">
									</div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title"><?php echo dF($order->createdateORDER,'d F Y');?></div>
											<?php
												if(!empty($order->priceORDER)){
													$price = "Rp.". number_format($order->priceORDER, 0,',','.');
												} else {
													$price = 'Rp. 0,-';
												}
											?>
											<div class="item-after link-deepblue"><?php echo $price;?></div>
										</div>
										<ul class="item-text list">
										<?php
											if(!empty($order->beratORDER)){
												$berat = $order->beratORDER.' '.'kg';
											} else {
												$berat = '0 Kg';
											}
										?>
											<li><h5>Berat</h5><p><?php echo $berat;?></p></li>
											<li><h5>Paket</h5><p><?php echo $order->namePACKAGE;?></p></li>
											<li><h5>Aroma</h5><p><?php echo $order->nameAROMA;?></p></li>
											<li><h5>Servis</h5><p><?php echo $order->nameSERVICES;?></p></li>
										</ul>
										<div class="status-btn">
											<?php echo $order->status;?>
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
			</div> <!-- kelar class utama History -->
		</div>
	</div> <!-- kelar data-page History -->
</div>