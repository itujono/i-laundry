<div class="pages">
    <div data-page="form" class="page no-toolbar no-navbar">
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
     
                <h2 class="page_title">CUSTOM FORM</h2> 
     
                    <div class="page_single layout_fullwidth_padding">

                        <div class="contactform">
                            <form>
                                <div class="form_row">
                                    <label>Name:</label>
                                    <input type="text" name="name" value="" class="form_input" />
                                </div>
                                
                                <div class="form_row">
                                    <label>Email:</label>
                                    <input type="text" name="email" value="" class="form_input" />
                                </div>
                            
                                <div class="form_row">
                                    <label>Select:</label>
                                    <select name="" class="form_select">
                                    <option value="option one">option one</option>
                                    <option value="option two">option two</option>
                                    <option value="option three">option three</option>
                                    <option value="option five">option five</option>
                                    </select>
                                </div>
                            
                                <div class="form_row">
                                    <label>Radio:</label>
                                    <div class="form_row_right">
                                        <label class="label-radio item-content">
                                            <!-- Checked by default -->
                                            <input type="radio" name="my-radio" value="Books" checked="checked">
                                            <div class="item-inner">
                                                <div class="item-title">Books</div>
                                            </div>
                                        </label>
                                      
                                        <label class="label-radio item-content">
                                            <!-- Checked by default -->
                                            <input type="radio" name="my-radio" value="Movies">
                                            <div class="item-inner">
                                                <div class="item-title">Movies</div>
                                            </div>
                                        </label>
                                    </div> 
                                </div>
                            
                                <div class="form_row">
                                    <label>Checkbox:</label>
                                    <div class="form_row_right">
                                        <label class="label-checkbox item-content">
                                            <!-- Checked by default -->
                                            <input type="checkbox" name="my-checkbox" value="Books" checked="checked">
                                            <div class="item-media">
                                                <i class="icon icon-form-checkbox"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">Books</div>
                                            </div>
                                        </label>
                    
                                        <label class="label-checkbox item-content">
                                            <input type="checkbox" name="my-checkbox" value="Movies">
                                            <div class="item-media">
                                                <i class="icon icon-form-checkbox"></i>
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title">Movies</div>
                                            </div>
                                        </label>
                                    </div>   
                                </div>
                            
                                <div class="form_row">  
                                 	<label>Switch:</label>
                                    <div class="form_row_right">        
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title">On/Off</div>
                                                <div class="item-input">
                                                    <label class="label-switch">
                                                        <input type="checkbox">
                                                        <div class="checkbox"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="form_row"> 
                                    <label>Message:</label>
                                    <textarea name="message" class="form_textarea" rows="" cols="">your message here</textarea>
                                </div>
                            
                                <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
                            </form>
                        </div> <!-- kelar Contactform -->

                    </div> <!-- kelar page_single layout blabla -->
      
                </div> <!-- kelar id pages_maincontent -->
      
      
            </div> <!-- kelar Page-content -->
        </div>
    </div>