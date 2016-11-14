<div class="pages">
    <div data-page="promo" class="page navbar-fixed toolbar-fixed" id="promo">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" class="back link"> <i class="icon icon-back"></i></a>
                </div>
                <div class="center">Restaurants</div>
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

                            <div class="promo-title">
                                <div class="row">
                                    <div class="col-100">
                                        <div class="promo-img">
                                            <img src="<?php echo base_url().$this->data['asfront']; ?>img/cover-order.png" alt="Promo 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <h3>Hamburger Resto</h3>
                                        <div class="grey-text"><a href="#">Sampai 3 November 2016</a></div>
                                    </div>
                                    <div class="col-50">
                                        <a href="#" data-popup=".popup-about" class="button login-btn block open-popup">Lihat detail</a>
                                    </div>
                                </div>
                            </div>

                            <div class="promo-title">
                                <div class="row">
                                    <div class="col-100">
                                        <div class="promo-img">
                                            <img src="<?php echo base_url().$this->data['asfront']; ?>img/ubah-password.png" alt="restaurant">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-50">
                                        <h3>Friends Restaurant</h3>
                                        <div class="grey-text"><a href="#">Sampai 3 November 2016</a></div>
                                    </div>
                                    <div class="col-50">
                                        <a href="#" class="button login-btn block">Lihat detail</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
				<!-- TAB LIST -->
				
				<!-- TAB GRID -->
				<div id="tab-2" class="page-content tab">
					<div class="content-block">
						<div class="row">

							<div class="col-50">
								<div class="promo-grid">
									<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/4.jpg" alt="restaurant">
									<h3>Big Pizza</h3>
									<div class="gray-text text-thiny margin-bottom-10"><a href="#">Pizza</a></div>
									<a href="#" class="button login-btn">Lihat detail</a>
								</div>
							</div>

							<div class="col-50">
								<div class="promo-grid">
									<img src="<?php echo base_url().$this->data['asfront']; ?>img/photos/5.jpg" alt="restaurant">
									<h3>Hello Restaurant</h3>
									<div class="gray-text text-thiny margin-bottom-10"><a href="#">food</a></div>
									<a href="#" class="button login-btn">Lihat detail</a>
								</div>
							</div>
							
						</div>
					</div> <!-- kelar Content-Block -->
				</div>				
            </div> <!-- kelar class Tabs -->
            <div class="popup popup-about">
                <div class="content-block">
                    <div class="row">
                        <div class="col-100">
                            <p class="popup-title">Promo i-Laundry</p>
                            <img src="<?php echo base_url().$this->data['asfront']; ?>img/ubah-password.png"/>
                            <h3>Hamburger Gratis 5 Hari</h3>
                            <h6><span>Valid sampai</span> 3 November 2016</h6>
                            <p><span class="first">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>
                                <a href="#" class="close-popup">Close popup</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- kelar Data-Page Promo -->
</div>