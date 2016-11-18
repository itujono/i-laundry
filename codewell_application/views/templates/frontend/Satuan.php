<div class="pages">
    <div data-page="pricelist" class="page navbar-fixed" id="pricelist">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" class="back link"> <i class="icon icon-back"></i></a>
                </div>
                <div class="center">Harga Satuan</div>
                <div class="right">
                    <!-- Right link contains only icon - additional "icon-only" class-->
                    <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="page-content">
		
			<div class="row">
				<div class="col-100">
					<div class="restaurant-img">
						<img src="<?php echo base_url().$this->data['asfront']; ?>img/cover-pricelist.png" alt="Cover">
					</div>
				</div>
			</div>
			<div class="content-block margin-top-15  margin-bottom-10">
				<a href="<?php echo base_url();?>order" class="button login-btn block">Saya mau nyuci sekarang</a>
			</div>
            <div class="content-block tabs-menu">
                <!-- Buttons row as tabs controller -->
                <div class="buttons-row">
                <?php
                	if(!empty($listcatsatuan)){
                		foreach ($listcatsatuan as $keycat => $catsatuan) {
                			if($keycat == 0){
                				$actives = 'active';
                			} else {
                				$actives = '';
                			}
                ?>
                    <a href="#<?php echo folderENCRYPT($catsatuan->idCATEGORYSATUAN);?>" class="tab-link <?php echo $actives;?> button"><?php echo $catsatuan->nameCATEGORYSATUAN;?></a>
                <?php } ?>
                <?php } ?>
                </div>
            </div>
            <!-- Tabs, tabs wrapper -->
            <div class="">
                <div class="tabs">
                    <?php
                	if(!empty($listcatsatuan)){
                		foreach ($listcatsatuan as $key => $cat) {
                			if($key == 0){
                				$active = 'active';
                			} else {
                				$active = '';
                			}
                	?>
                    <div id="<?php echo folderENCRYPT($cat->idCATEGORYSATUAN);?>" class="tab <?php echo $active;?>">
						<div class="list-block media-list margin-top-15">
							<ul>
							<?php
			                	foreach ($listsatuan as $key => $satuans) {
			                		if($cat->idCATEGORYSATUAN == $satuans->idCATEGORYSATUAN){
			                ?>
								<li>
									<a href="#" class="item-link item-content">
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title"><?php echo $satuans->nameSATUAN;?></div>
												<div class="item-after link-deeporange">Rp. <?php echo number_format($satuans->priceSATUAN, 0,',','.'); ?></div>
											</div>
										</div>
									</a>
								</li>
							<?php } ?>
							<?php } ?>
							</ul>
						</div>
                    </div>
                    <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>