<div class="pages">
    <div data-page="pwd-reset" class="page no-toolbar no-navbar">
        <div class="page-content" id="pwd-reset">
        	<div class="navbarpages">
        		<div class="navbar_left">
        			<div class="logo_image">
                        <a href="<?php echo base_url();?>Home"><img src="<?php echo base_url().$this->data['asfront']; ?>images/logo_image.png" alt="" title=""/>
                    </div>
        		</div>
        		<a href="#" data-panel="right" class="open-panel">
        			<div class="navbar_right whitebg">
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/user.png" alt="" title="" />
                    </div>
        		</a>					
        	</div>
            <?php
              if (!empty($message)){
                ?>
                <div class="notif">
                <div class="msg">
                  <p><?php echo $message['text'];?></p>

                </div>
                <div class="dismissable">
                  <a href="#">Dismiss</a>
                </div>
              </div>
            <?php
              }
            ?>
            <div id="pages_maincontent">
                <div class="page_single layout_fullwidth_padding">
                    <div class="settings-title">
                        <h2>Yeay! Password kamu berhasil direset!</h2>
                        <p>Next time, lebih berhati-hati dalam mengelola password. Enjoy! :)</p>
                    </div>
                    <div class="back-to-home">
                        <a href="<?php echo base_url();?>Home">
                            <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png"> Kembali ke Home
                        </a>
                    </div>
                </div> <!-- kelar page_single layout blabla -->
            </div> <!-- kelar id pages_maincontent -->

        </div> <!-- kelar Page-content -->
    </div>
</div> <!-- kelar class Pages -->