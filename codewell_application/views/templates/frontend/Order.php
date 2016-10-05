<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" href="<?php echo base_url().$this->data['asfront']; ?>images/apple-touch-icon.png" />
    <link href="<?php echo base_url().$this->data['asfront']; ?>images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="<?php echo base_url().$this->data['asfront']; ?>images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <title>i-Laundry - Selamat Datang!</title>
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/swipebox.css" />
    <link href='https://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="pages">
        <div data-page="order" class="page no-toolbar">
            <div class="page-content order">
                <?php
                    if (!empty($message)){
                  ?>
                    <div class="notif animated slideInDown">
                      <div class="msg">
                        <p><?php echo $message['text'];?></p>
                      </div>
                      <div class="dismissable">
                        <a href="#">Dismiss</a>
                      </div>
                    </div>
                  <?php } ?>
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
                            </div> <!-- kelar Contact Form -->         
                        </div>
                    </div> <!-- kelar ID page-maincontent -->
                </div>
            </div> <!-- kelar page no-toolbar -->
        </div> <!-- kelar Pages -->
    <script>
      $('body').addClass('js');
      var $action = $('.action'),
          $menulink = $('.menu-link'),
          $menuTrigger = $('.has-subnav > a'),
          $n,
          nHeight;
    
      function addMessage() {
        $('<div class="notification" id="notification"><div class="msg">You must be signed in to complete this action.</div> <div class="actions"><a href="#" id="sign-in" class="btn">Sign In or Register</a> <a href="#" class="dismiss-btn">Dismiss</a></div></div>').prependTo('.pattern');
        
        $n = $('#notification'),
        nHeight = $n.outerHeight();
          
        showNotification();
        setTimeout(hideNotification,8000);
      }
      
      $action.click(function(e) { //Trigger
        e.preventDefault();
        addMessage();
      });
      
      $('.pattern').delegate(".dismiss-btn", "click", function(e) {
        hideNotification();
        return false;
      });
      
      function showNotification() {
        $n.css('top',-nHeight).addClass('anim').css('top',0);
      }
    
      function hideNotification() {
        $n.css('top',-nHeight);
        setTimeout(function() { $n.removeClass('anim'); }, 1000);
      }
      
      $(window).resize(function() {
        nHeight = $n.outerHeight();
      });
    </script>


    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.validate.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.swipebox.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/email.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/circlemenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/audio.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>

    <script>
      $(function() {
        $(".notif").on("click", function() {
          $(this).removeClass("animated slideInDown");
          $(this).addClass("animated slideOutUp");
        });
      });
    </script>

</body>
</html>