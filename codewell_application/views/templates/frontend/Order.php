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
                    </div>
         
                    <div id="pages_maincontent">
                    
                        <h2 class="page_title">Form Pemesanan</h2>
                  
                        <div class="page_single layout_fullwidth_padding">  

                            <div class="history-title">
                                <h2>Ada pakaian kotor?</h2>
                                <p>Langsung saja isi form di bawah ini, dan kami akan segera memproses orderan kamu.</p>
                            </div>

                            <div class="contactform">
                                <form id="form-order" class="store-data" method="POST" action="<?php echo base_url();?>Order/confirmation_order">
                                    
                                    <div class="form_row">
                                        <label>Kapan mau dijemput?</label>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-input">
                                                    <input type="text" name="pickuptimeORDER" placeholder="Pilih waktu yang pas untuk kami jemput" readonly id="calendar-default" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form_row"> 
                                        <label>Di mana mau dijemput?</label>
                                        <textarea placeholder="Misal: Jalan Kebaikan III #900, Tiban BTN" name="pickupADDRESSORDERKOTOR" class="form_textarea" required></textarea>
                                    </div>
                        
                                    <div class="form_row">
                                        <label>Mau wangi apa?</label>
                                        <div class="form_row_right">
                                        <?php
                                            if(!empty($listaroma)){
                                                foreach ($listaroma as $key => $aroma) {
                                                    if($key == 0){
                                                        $check = 'checked="checked"';
                                                    } else {
                                                        $check = '';
                                                    }
                                        ?>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="idAROMA" value="<?php echo $aroma->idAROMA;?>" <?php echo $check;?>>
                                                <div class="item-inner">
                                                  <div class="item-title"><?php echo $aroma->nameAROMA;?></div>
                                                </div>
                                            </label>
                                        <?php } ?>
                                        <?php } ?>
                                        </div> 
                                    </div>
                        
                                    <div class="form_row">
                                        <label>Mau layanan yang mana?</label>
                                        <div class="form_row_right">
                                        <?php
                                            if(!empty($listservices)){
                                                foreach ($listservices as $key => $services) {
                                                    if($key == 0){
                                                        $check = 'checked="checked"';
                                                    } else {
                                                        $check = '';
                                                    }
                                        ?>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="idSERVICES" value="<?php echo $services->idSERVICES;?>" <?php echo $check;?>>
                                                <div class="item-inner">
                                                  <div class="item-title"><?php echo $services->nameSERVICES;?></div>
                                                </div>
                                            </label>
                                        <?php } ?>
                                        <?php } ?>
                                        </div> 
                                    </div>

                                    <div class="form_row">
                                        <label>Mau jenis paket apa?</label>
                                        <div class="form_row_right">
                                        <?php
                                            if(!empty($listpackage)){
                                                foreach ($listpackage as $key => $package) {
                                                    if($key == 0){
                                                        $check = 'checked="checked"';
                                                    } else {
                                                        $check = '';
                                                    }
                                        ?>
                                            <label class="label-radio item-content">
                                                <!-- Checked by default -->
                                                <input type="radio" name="idPACKAGE" value="<?php echo $package->idPACKAGE;?>" <?php echo $check;?>>
                                                <div class="accordion-item item-inner">
                                                    <div class="accordion-item-toggle item-title"><?php echo $package->namePACKAGE;?></div>
                                                    <div class="accordion-item-content">
                                                        <?php echo $package->descriptionPACKAGE;?>
                                                    </div>
                                                </div>
                                            </label>
                                        <?php } ?>
                                        <?php } ?>
                                        </div> 
                                    </div>

                                    <div class="form_row">
                                        <label>Mau pembayaran jenis apa?</label>
                                        <div class="form_row_right">
                                        <?php
                                            if(!empty($listpayment)){
                                                foreach ($listpayment as $key => $payment) {
                                                    if($key == 0){
                                                        $check = 'checked="checked"';
                                                    } else {
                                                        $check = '';
                                                    }
                                        ?>
                                            <label class="label-radio item-content">
                                                <input type="radio" name="idPAYMENT" value="<?php echo $payment->idPAYMENT;?>" <?php echo $check;?>>
                                                <div class="item-inner">
                                                  <div class="item-title"><?php echo $payment->namePAYMENT;?></div>
                                                </div>
                                            </label>
                                        <?php } ?>
                                        <?php } ?>
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