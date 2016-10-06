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
                                <form id="form-order" class="store-data">
                                    
                                    <div class="form_row">
                                        <label>Kapan mau dijemput?</label>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-input">
                                                    <input type="text" placeholder="Pilih waktu yang pas untuk kami jemput" readonly id="calendar-default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form_row"> 
                                        <label>Di mana mau dijemput?</label>
                                        <textarea placeholder="Misal: Jalan Kebaikan III #900, Tiban BTN" name="message" class="form_textarea" rows="" cols=""></textarea>
                                    </div>
                        
                                    <div class="form_row">
                                        <label>Mau wangi apa?</label>
                                        <div class="form_row_right">
                                            <label class="label-radio item-content">
                                                <!-- Checked by default -->
                                                <input type="radio" name="my-radio" value="Romance" checked="checked">
                                                <div class="item-inner">
                                                  <div class="item-title">Romance</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="my-radio" value="Mystique">
                                                <div class="item-inner">
                                                    <div class="item-title">Mystique</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="my-radio" value="Fusion">
                                                <div class="item-inner">
                                                    <div class="item-title">Fusion</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="my-radio" value="Passion">
                                                <div class="item-inner">
                                                    <div class="item-title">Passion</div>
                                                </div>
                                            </label>
                                        </div> 
                                    </div>
                        
                                    <div class="form_row">
                                        <label>Mau layanan yang mana?</label>
                                        <div class="form_row_right">
                                            <label class="label-radio item-content">
                                                <!-- Checked by default -->
                                                <input type="radio" name="layanan" value="CG" checked="checked">
                                                <div class="item-inner">
                                                  <div class="item-title">Cuci gosok</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="layanan" value="CS">
                                                <div class="item-inner">
                                                    <div class="item-title">Cuci saja</div>
                                                </div>
                                            </label>
                                        </div> 
                                    </div>

                                    <div class="form_row">
                                        <label>Mau jenis services apa?</label>
                                        <div class="form_row_right">
                                            <label class="label-radio item-content">
                                                <!-- Checked by default -->
                                                <input type="radio" name="services" value="Reguler" checked="checked">
                                                <div class="accordion-item item-inner">
                                                    <div class="accordion-item-toggle item-title">Reguler</div>
                                                    <div class="accordion-item-content">
                                                        <ul>
                                                            <li>Paket Reguler merupakan paket standar.</li>
                                                            <li>Selesai dalam waktu 5 (lima) hari</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="services" value="Premium">
                                                <div class="accordion-item opened item-inner">
                                                    <div class="accordion-item-toggle item-title">Premium</div>
                                                    <div class="accordion-item-content">
                                                        <ul>
                                                            <li>Paket Premium menggunakan deterjen dan pewangi kelas premium (Rinso dan Downy).</li>
                                                            <li>Selesai dalam waktu 5 (lima) hari</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="services" value="Express">
                                                <div class="accordion-item opened item-inner">
                                                    <div class="accordion-item-toggle item-title">Express</div>
                                                    <div class="accordion-item-content">
                                                        <ul>
                                                            <li>Paket Express merupakan paket standard.</li>
                                                            <li>Selesai dalam waktu 1 (satu) hari</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="services" value="ExPremium">
                                                <div class="accordion-item opened item-inner">
                                                    <div class="accordion-item-toggle item-title">Express Premium</div>
                                                    <div class="accordion-item-content">
                                                        <ul>
                                                            <li>Paket Express Premium menggunakan deterjen dan pewangi kelas premium (Rinso dan Downy).</li>
                                                            <li>Selesai dalam waktu 1 (satu) hari</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </label>
                                        </div> 
                                    </div>

                                    <div class="form_row">
                                        <label>Mau pembayaran jenis apa?</label>
                                        <div class="form_row_right">
                                            <label class="label-radio item-content">
                                                <!-- Checked by default -->
                                                <input type="radio" name="payment" value="CoD" checked="checked">
                                                <div class="item-inner">
                                                  <div class="item-title">Cash on Delivery</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="payment" value="Transfer">
                                                <div class="item-inner">
                                                    <div class="item-title">Transfer Bank</div>
                                                </div>
                                            </label>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="payment" value="CC">
                                                <div class="item-inner">
                                                    <div class="item-title">Credit Card</div>
                                                </div>
                                            </label>
                                        </div> 
                                    </div>
                                    <input type="submit" name="submit" class="form_submit confirm-order" id="submit" value="All good!" />

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