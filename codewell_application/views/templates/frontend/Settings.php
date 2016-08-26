<div class="pages" id="settings">
    <div data-page="settings" class="page no-toolbar no-navbar">
        <div class="page-content">
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
                <h2 class="page_title">Pengaturan Akun</h2> 
                <div class="page_single layout_fullwidth_padding">
                    <div class="settings-title">
                        <h2>Ubah password</h2>
                        <p>Jika kamu ingin mengubah password akun mu, silakan gunakan form di bawah ini.</p>
                    </div>
                    <form method="POST" action="<?php echo base_url();?>Customer/updatepasswordcustomer">
                    <div class="settingsform">
                        <input type="hidden" readonly required name="idCUSTOMER" value="<?php echo encode($this->session->userdata('idCUSTOMER')); ?>">
                        <div class="form_row">
                            <label>Ketik password lama kamu</label>
                            <input type="password" name="oldpasswordCUSTOMER" class="form_input" placeholder="******" required>
                        </div>
                        <div class="form_row">
                            <label>Ketik password baru kamu</label>
                            <input type="password" name="passwordCUSTOMER" placeholder="******" required="" class="form_input">
                        </div>
                        <div class="form_row">
                            <label>Ketik password baru kamu sekali lagi</label>
                            <input type="password" name="repasswordCUSTOMER" placeholder="******" required="" class="form_input">
                        </div>
                        <div class="form-submit">
                            <input type="submit" name="submit" class="form_submit" id="submit" value="Simpan" />
                        </div>
                        <div class="back-to-home">
                            <a href="<?php echo base_url();?>Home">
                                <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png"> Kembali ke Home
                            </a>
                        </div>
                    </div>
                    </form>
                </div> <!-- kelar page_single layout blabla -->
            </div> <!-- kelar id pages_maincontent -->

        </div> <!-- kelar Page-content -->
    </div>
</div> <!-- kelar class Pages -->