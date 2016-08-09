<div class="pages">
    <div data-page="settings" class="page no-toolbar no-navbar">
        <div class="page-content">
    
        	<div class="navbarpages">
        		<div class="navbar_left">
        			<div class="logo_image">
                        <a href="index.html"><img src="<?php echo base_url().$this->data['asfront']; ?>images/logo_image.png" alt="" title=""/>
                    </div>
        		</div>			
        		<a href="#" data-panel="left" class="open-panel">
        			<div class="navbar_right">
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/menu.png" alt="" title="" />
                    </div>
        		</a>
        		<a href="#" data-panel="right" class="open-panel">
        			<div class="navbar_right whitebg">
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/user.png" alt="" title="" />
                    </div>
        		</a>					
        	</div>
	
            <div id="pages_maincontent">
     
                <h2 class="page_title">Pengaturan Akun</h2> 
     
                <div class="page_single layout_fullwidth_padding">

                <div class="settingsform">
                    <div class="form_row">
                        <label>Ketik password kamu</label>
                        <input type="password" name="pwd" value="" class="form_input" />
                    </div>
                    <div class="form_row">
                        <label>Ketik password kamu sekali lagi</label>
                        <input type="password" name="pwd1" value="" class="form_input" />
                    </div>
                    <div class="form-submit">
                        <input type="submit" name="submit" class="form_submit" id="submit" value="Daftar sekarang" />
                    </div>
                </div>

                </div> <!-- kelar page_single layout blabla -->
      
            </div> <!-- kelar id pages_maincontent -->
      
      
        </div> <!-- kelar Page-content -->
    </div>
</div>