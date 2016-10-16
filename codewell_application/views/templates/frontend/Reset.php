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
<div class="pages" id="reset">
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
                <div class="notif animated slideInDown">
                  <div class="msg">
                    <p><?php echo $message['text'];?></p>
                  </div>
                  <div class="dismissable">
                    <a href="#">Dismiss</a>
                  </div>
                </div>
              <?php } ?>
            <div id="pages_maincontent">
                <h2 class="page_title">Reset Kata sandi</h2> 
                <div class="page_single layout_fullwidth_padding">
                    <div class="settings-title">
                        <h2>Reset kata sandi</h2>
                        <p>Jika kamu ingin me-reset kata sandi akun mu, silakan gunakan form di bawah ini.</p>
                    </div>
                    <form method="POST" action="<?php echo base_url();?>Customer/updateresetpassword">
                    <div class="settingsform">
                        <input type="hidden" readonly required name="idCUSTOMER" value="<?php echo encode($idCUSTOMER); ?>">
                        <div class="form_row">
                            <label>Ketik password baru kamu</label>
                            <input type="password" name="passwordCUSTOMER" placeholder="Min. 8 Karakter" required="" class="form_input required">
                        </div>
                        <div class="form_row">
                            <label>Ketik password baru kamu sekali lagi</label>
                            <input type="password" name="repasswordCUSTOMER" placeholder="Min. 8 Karakter dan samakan dengan kata sandi diatas!" required="" class="form_input required">
                        </div>
                        <div class="form-submit">
                            <input type="submit" name="submit" class="form_submit confirm-order" id="submit" value="All good!" />
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