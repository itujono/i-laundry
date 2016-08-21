<div class="pages">
    <div data-page="order" class="page no-toolbar">
        <div class="page-content order">
    
                <div class="navbarpages graybg">
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
                
                    <h2 class="page_title">Form Pemesanan</h2>
              
                    <div class="page_single layout_fullwidth_padding">  

                        <div class="history-title">
                            <h2>Ada pakaian kotor?</h2>
                            <p>Langsung saja isi form di bawah ini, dan kami akan segera memproses orderan kamu.</p>
                        </div>

                        <div class="contactform">
                            <form>
                                
                                <div class="form_row">
                                    <label>Kapan mau dijemput?</label>
                                    <div class="content-block">
                                        <div style="padding:0; margin-right:-15px; width:auto" class="content-block-inner">
                                            <div style="margin:0" class="list-block">
                                                <ul style="border-top:none">
                                                    <li>
                                                        <div class="item-content">
                                                        <div class="item-inner">
                                                            <div class="item-input">
                                                                <input type="text" placeholder="Date Time" readonly id="picker-date">
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="picker-date-container"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form_row"> 
                                    <label>Alamat</label>
                                    <textarea name="message" class="form_textarea" rows="" cols="">Misal: Jalan Kebaikan III #900, Tiban BTN</textarea>
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
                                <input type="submit" name="submit" class="form_submit" id="submit" value="All good!" />

                            </form>
                        </div>              
                    </div>
                </div>
            </div>
        </div>
    </div>