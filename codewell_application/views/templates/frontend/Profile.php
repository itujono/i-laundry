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
                    <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Profile/updatecustomer">
                    <div class="user-avatar">
                        <img src="<?php echo $profile->imageCUSTOMER;?>" alt="<?php echo $profile->nameCUSTOMER;?>" title="Foto Profile <?php echo $profile->nameCUSTOMER;?>" />
                        <div class="change-ava">
                            <input type="file" name="imgCUSTOMER" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple/>
                            <label for="file"><i class="icon icon-camera"></i> Ubah avatarmu...</label>
                        </div>
                    </div>
                    <div class="profile-form">
                            <input readonly type="hidden" name='idCUSTOMER' value="<?php echo encode($profile->idCUSTOMER);?>"/>
                            <input readonly type="hidden" name='emailCUSTOMER' value="<?php echo encode($profile->emailCUSTOMER);?>"/>
                            <div class="form_row">
                                <label>Nama</label>
                                <input type="text" name="nameCUSTOMER" value="<?php echo $profile->nameCUSTOMER;?>" class="form_input required" />
                            </div>
                            <div class="form_row">
                                <label>Nomor telepon</label>
                                <input type="number" name="telephoneCUSTOMER" value="<?php echo $profile->telephoneCUSTOMER;?>" class="form_input required" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number" required />
                            </div>
                            <div class="form_row">
                                <label>Nomor Handphone</label>
                                <input type="number" name="mobileCUSTOMER" value="<?php echo $profile->mobileCUSTOMER;?>" class="form_input required" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number" required />
                            </div>
                            <div class="form_row"> 
                                <label>Alamat</label>
                                <textarea name="addressCUSTOMER" class="form_textarea required" rows="7" cols="" required><?php echo $profile->addressCUSTOMER;?></textarea>
                            </div>     
                            <input type="submit" name="submit" class="form_submit" id="submit" value="Simpan" />
                    </div> <!-- kelar Profile-Form -->
                    <div class="back-to-home">
                        <a href="<?php echo base_url();?>Home">
                            <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png"> Kembali ke Home
                        </a>
                    </div>
                    </form>
                </div> <!-- kelar Page-Single -->
            </div> <!-- kelar Pages-maincontent -->

        </div> <!-- kelar Page-Content -->
    </div> <!-- kelar data-page -->
</div>

