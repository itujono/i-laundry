 <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }" class="uk-margin-bottom">
 	<h1><?php echo $detailorder->nameCUSTOMER;?>, <?php echo $detailorder->namePACKAGE;?>, <?php echo $detailorder->namePAYMENT;?></h1>
 	<span class="uk-text-muted uk-text-upper"><b><?php echo $detailorder->kodeORDER;?> (<?php echo dF($detailorder->createdateORDER, 'd F Y (H:i:s)');?>)</span></b>
 </div>
 <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
 	<div class="uk-width-xLarge-2-10 uk-width-large-3-10">
 		<div class="md-card">
 			<div class="md-card-toolbar">
 				<h3 class="md-card-toolbar-heading-text">
 					Informasi Order
 				</h3>
 			</div>
 			<div class="md-card-content">
 				<ul class="md-list">
 					<li>
 						<div class="md-list-content">
 							<span class="uk-text-small uk-text-muted uk-display-block">Waktu ambil laundry (KOTOR)</span>
 							<span class="md-list-heading uk-text-medium uk-text-success"><?php echo dF($detailorder->pickuptimeORDER, 'd F Y (H:i:s)');?></span>
 						</div>
 					</li>
 					<li>
 						<div class="md-list-content">
 							<span class="uk-text-small uk-text-muted uk-display-block">Waktu antar laundry (BERSIH)</span>
 							<span class="md-list-heading uk-text-medium"><?php echo dF( $detailorder->pickupfinishedtimeORDER, 'd F Y H:i:s' );?></span>
 						</div>
 					</li>
 					<li>
 						<div class="md-list-content">
 							<span class="uk-text-small uk-text-muted uk-display-block">Alamat ambil</span>
 							<span class="md-list-heading uk-text-medium uk-text-success"><?php echo $detailorder->pickupADDRESSORDERKOTOR;?></span>
 						</div>
 					</li>
 					<li>
 						<div class="md-list-content">
 							<span class="uk-text-small uk-text-muted uk-display-block">Alamat antar</span>
 							<span class="md-list-heading uk-text-medium"><?php echo $detailorder->pickupADDRESSORDERBERSIH;?></span>
 						</div>
 					</li>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<div class="uk-width-xLarge-8-10  uk-width-large-7-10">
 		<div class="md-card">
 			<div class="md-card-toolbar">
 				<h3 class="md-card-toolbar-heading-text">
 					Detail Pelanggan
 				</h3>
 			</div>
 			<div class="md-card-content large-padding">
 				<div class="uk-grid uk-grid-divider uk-grid-medium">
 					<div class="uk-width-large-1-2">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Nama</span>
 							</div>
 							<div class="uk-width-large-2-3">
 								<span class="uk-text-large uk-text-middle"><a href="#"><?php echo $detailorder->nameCUSTOMER;?></a></span>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Email</span>
 							</div>
 							<div class="uk-width-large-2-3">
 								<span class="uk-text-large uk-text-middle"><a href="mailto:<?php echo $detailorder->emailCUSTOMER;?>"><?php echo $detailorder->emailCUSTOMER;?></a></span>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">No. Telepon/HP</span>
 							</div>
 							<div class="uk-width-large-2-3">
 							<?php 
 								if(!empty($detailorder->telephoneCUSTOMER AND $detailorder->mobileCUSTOMER)){
 							?>
 								+62 <?php echo $detailorder->telephoneCUSTOMER;?>/+62 <?php echo $detailorder->mobileCUSTOMER;?>
 							<?php } elseif (!empty($detailorder->telephoneCUSTOMER)) { ?>
 								+62 <?php echo $detailorder->telephoneCUSTOMER;?>
 							<?php } elseif (!empty($detailorder->mobileCUSTOMER)) { ?>
 								+62 <?php echo $detailorder->mobileCUSTOMER;?>
 							<?php } else { ?>
 								- / -
 							<?php } ?>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Jenis Pembayaran</span>
 							</div>
 							<div class="uk-width-large-2-3">
 								<?php echo $detailorder->namePAYMENT;?>
 							</div>
 						</div>
 						<hr class="uk-grid-divider uk-hidden-large">
 					</div>
 					<div class="uk-width-large-1-2">
 						<p>
 							<span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Status Order</span>
 							<?php echo $detailorder->status;?>
 						</p>
 						<hr class="uk-grid-divider">
 						<p>
 							<span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Catatan Order</span>
 							<?php echo $detailorder->notesORDER;?>
 						</p>
 					</div>
 				</div>
 			</div>
 		</div>
 		<div class="md-card">
 			<div class="md-card-toolbar">
 				<h3 class="md-card-toolbar-heading-text">
 					Detail Order
 				</h3>
 			</div>
 			<div class="md-card-content large-padding">
 				<div class="uk-grid uk-grid-divider uk-grid-medium">
 					<div class="uk-width-large-1-1">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Paket</span>
 							</div>
 							<div class="uk-width-large-2-3">
 								<span class="uk-text-large uk-text-middle"><?php echo $detailorder->namePACKAGE;?></span>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Aroma</span>
 							</div>
 							<div class="uk-width-large-2-3">
 								<span class="uk-text-large uk-text-middle"><?php echo $detailorder->nameAROMA;?></span>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Services</span>
 							</div>
 							<div class="uk-width-large-2-3 uk-text-bold">
 							<?php echo $detailorder->nameSERVICES;?> - <?php echo $detailorder->nameJASA;?>
 							</div>
 						</div>
 						<hr class="uk-grid-divider">
 						<div class="uk-grid uk-grid-small">
 							<div class="uk-width-large-1-3">
 								<span class="uk-text-muted uk-text-small">Area</span>
 							</div>
 							<div class="uk-width-large-2-3 uk-text-bold">
 								<?php echo $detailorder->nameAREA;?> - <?php echo $detailorder->nameREGION;?>
 							</div>
 						</div>
 						<hr class="uk-grid-divider uk-hidden-large">
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
<?php if($detailorder->statusORDER != 4){ ?>
<div class="md-fab-wrapper">
	<div class="md-fab md-fab-accent md-fab-sheet">
	    <i class="material-icons">&#xE54A;</i>
	    <div class="md-fab-sheet-actions">
	    <?php if($detailorder->statusORDER == 1){ ?>
	        <a href="<?php echo base_url();?>codewelladmin/Order/changestatus/<?php echo encode($detailorder->idORDER);?>/2" class="md-color-white"><i class="material-icons md-color-white">&#xE86A;</i> Proses cuci</a>
	    <?php } elseif($detailorder->statusORDER == 2) { ?>
	        <a href="<?php echo base_url();?>codewelladmin/Order/changestatus/<?php echo encode($detailorder->idORDER);?>/3" class="md-color-white"><i class="material-icons md-color-white">&#xE227;</i> Tunggu pembayaran</a>
	    <?php } elseif($detailorder->statusORDER == 3) { ?>
	        <a href="<?php echo base_url();?>codewelladmin/Order/changestatus/<?php echo encode($detailorder->idORDER);?>/4" class="md-color-white"><i class="material-icons md-color-white">&#xE877;</i> Selesai</a>
	    <?php } ?>
	    </div>
	</div>
</div>
<?php } ?>