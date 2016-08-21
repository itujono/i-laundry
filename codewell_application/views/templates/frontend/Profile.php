<div class="pages" id="profile">
    <div data-page="profile" class="page no-toolbar no-navbar">
        <div class="page-content" id="profile">
    
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
	
            <div id="pages_maincontent">
                <h2 class="page_title">Pengaturan Profile</h2> 
                <div class="page_single layout_fullwidth_padding">
                    <div class="settings-title">
                        <h2>Ubah detail profile</h2>
                        <p>Jika kamu ingin mengubah detail profile mu, silakan gunakan form di bawah ini.</p>
                    </div>

                    <div class="user-avatar">
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/ava.png" alt="" title="" />
                        <div class="change-ava">
                            <a href="#">
                                <i class="icon icon-camera"></i> Ubah avatarmu
                            </a>
                        </div>
                    </div>

                    <div class="profile-form">
                        <form>
                            <div class="form_row">
                                <label>Nama</label>
                                <input type="text" name="name" value="" class="form_input" />
                            </div>
                            <div class="form_row">
                                <label>Nomor telepon</label>
                                <input type="number" name="email" value="" class="form_input" />
                            </div>
                            <div class="form_row"> 
                                <label>Alamat</label>
                                <textarea name="message" class="form_textarea" rows="7" cols="">Misal: Jalan Kebaikan III #900, Tiban BTN</textarea>
                            </div>     
                            <input type="submit" name="submit" class="form_submit" id="submit" value="Simpan" />
                        </form>
                    </div> <!-- kelar Profile-Form -->
                    <div class="back-to-home">
                        <a href="<?php echo base_url();?>Home">
                            <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png"> Kembali ke Home
                        </a>
                    </div>
                </div> <!-- kelar Page-Single -->
            </div> <!-- kelar Pages-maincontent -->

        </div> <!-- kelar Page-Content -->
    </div> <!-- kelar data-page -->
</div>