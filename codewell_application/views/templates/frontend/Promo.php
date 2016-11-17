<div class="pages">
    <div data-page="promo" class="page navbar-fixed toolbar-fixed" id="promo">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" class="back link"> <i class="icon icon-back"></i></a>
                </div>
                <div class="center">Promo</div>
                <div class="right">
                    <!-- Right link contains only icon - additional "icon-only" class-->
                    <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
                </div>
            </div>
        </div>

        <div class="toolbar tabbar">
            <div class="toolbar-inner">
                <a href="#tab-1" class="tab-link active">List</a>
                <a href="#tab-2" class="tab-link">Grid</a>
            </div>
        </div>

        <div class="tabs-animated-wrap">
            <div class="tabs">
                <div id="tab-1" class="page-content tab active">
                    <div class="content-block">
                        <div id="list-restaurants">
                        <?php
                            if(!empty($listpromo)){
                                foreach ($listpromo as $key => $promo) {
                        ?>
                            <div class="promo-title">
                                <div class="row">
                                    <div class="col-100">
                                        <div class="promo-img">
                                            <img src="<?php echo $promo->imagePROMO;?>" alt="<?php echo $promo->namePROMO;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <h3><?php echo $promo->namePROMO;?></h3>
                                        <div class="grey-text"><a href="#">Sampai <?php echo date('d F Y', strtotime($promo->endPROMO));?> </a></div>
                                    </div>
                                    <div class="col-50">
                                        <a href="#" data-popup=".<?php echo strtolower(replacesymbol($promo->namePROMO));?>" class="button login-btn block open-popup">Lihat detail</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
				<!-- TAB LIST -->
				
				<!-- TAB GRID -->
				<div id="tab-2" class="page-content tab">
					<div class="content-block">
						<div class="row">
                        <?php
                            if(!empty($listpromo)){
                                foreach ($listpromo as $key => $promos) {
                        ?>
							<div class="col-50">
								<div class="promo-grid">
									<img src="<?php echo $promos->imagePROMO;?>" alt="<?php echo $promos->namePROMO;?>">
									<h3><?php echo $promos->namePROMO;?></h3>
									<div class="grey-text"><a href="#">Sampai <?php echo date('d F Y', strtotime($promos->endPROMO));?> </a></div>
									<a href="#" data-popup=".<?php echo strtolower(replacesymbol($promo->namePROMO));?>" class="button login-btn block open-popup">Lihat detail</a>
								</div>
							</div>
						  <?php } ?>
                        <?php } ?>
						</div>
					</div> <!-- kelar Content-Block -->
				</div>				
            </div> <!-- kelar class Tabs -->
            <?php
                if(!empty($listpromo)){
                    foreach ($listpromo as $key => $detail) {
            ?>
            <div class="popup <?php echo strtolower(replacesymbol($promo->namePROMO));?>">
                <div class="content-block">
                    <div class="row">
                        <div class="col-100">
                            <p class="popup-title"><?php echo $detail->namePROMO;?></p>
                            <img src="<?php echo $detail->imagePROMO;?>" alt="<?php echo $detail->namePROMO;?>"/>
                            <h3><?php echo $detail->namePROMO;?></h3>
                            <h6><span>Valid sampai</span> <?php echo date('d F Y', strtotime($detail->endPROMO));?></h6>
                            <p><?php echo $detail->descriptionPROMO;?></p>
                            <p>
                                <a href="#" class="close-popup">Keluar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div> <!-- kelar Data-Page Promo -->
</div>