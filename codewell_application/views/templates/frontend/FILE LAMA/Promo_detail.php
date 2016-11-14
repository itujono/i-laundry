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
    <title>Nama Promo nya Nih - i-Laundry</title>
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/swipebox.css" />
    <link href='https://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="pages" id="promo-detail">
        <div data-page="order" class="page no-toolbar">
            <div class="page-content">
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

                    <div class="promo-block">
                        <h2 class="promo-title">
                            Gratis Nyuci Selamanya Jika Kamu Berhasil Sign-up di Website Kami!
                        </h2>
                        <h5>Valid sampai 31 Oktober 2016</h5>
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/brosur.png">
                        <p>Donec et nulla auctor massa pharetra adipiscing ut sit amet sem. Suspendisse molestie velit vitae mattis tincidunt. Ut sit amet quam mollis, vulputate turpis vel, sagittis felis. <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>
                    </div>

                    <a href="blog.html" class="backto">
                        <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png" alt="Back" title="" /> Kembali
                    </a>
                </div>

            </div> <!-- kelar Page-Content -->




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