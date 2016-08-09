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
  <title>i-Laundry - Selamat datang!</title>
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/main.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/swipebox.css" />
  <link href='https://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body id="mobile_wrap">

  <div class="statusbar-overlay"></div>

  <div class="panel-overlay"></div>

  <div class="panel panel-left panel-reveal">
     <div class="view view-subnav">
       <div class="pages">
          <div data-page="panel-leftmenu" class="page pagepanel">	
             <div class="page-content">
               <nav class="main-nav icons_inline">
                 <ul>
                   <li><a href="index.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/home.png" alt="" title="" /><span>Home</span></a></li>
                   <li><a href="about.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/mobile.png" alt="" title="" /><span>About</span></a></li>
                   <li><a href="features.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/features.png" alt="" title="" /><span>Features</span></a></li>

                   <li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/lock.png" alt="" title="" /><span>Login</span></a></li>
                   <li><a href="team.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/users.png" alt="" title="" /><span>Team</span></a></li>
                   <li><a href="blog.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/blog.png" alt="" title="" /><span>Blog</span></a></li>		

                   <li><a href="photos.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/photos.png" alt="" title="" /><span>Photos</span></a></li>
                   <li><a href="videos.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/video.png" alt="" title="" /><span>Videos</span></a></li>
                   <li><a href="music.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/music.png" alt="" title="" /><span>Music</span></a></li>

                   <li><a href="shop.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/shop.png" alt="" title="" /><span>Shop</span></a></li>
                   <li class="subnav"><a href="categories.html"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/categories.png" alt="" title="" /><span>Categories</span></a></li>
                   <li><a href="cart.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/cart.png" alt="" title="" /><span>Cart</span></a></li>

                   <li><a href="tables.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/tables.png" alt="" title="" /><span>Tables</span></a></li>
                   <li><a href="<?php echo base_url();?>Order" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/form.png" alt="" title="" /><span>Order</span></a></li>
                   <li><a href="contact.html" class="close-panel" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/contact.png" alt="" title="" /><span>Contact</span></a></li>
               </ul>
           </nav>
       </div>
   </div>
</div>
</div>  
</div> <!-- kelar Panel-Reveal --> 

<div class="panel panel-right panel-reveal">
    <div class="user_login_info">

        <div class="user_thumb">
            <img class="cover" src="<?php echo base_url().$this->data['asfront']; ?>images/beach.jpg" alt="" title="" />
            <div class="user_details">
               <p>Hello, <span>John Doe</span></p>
            </div>  
            <div class="user_avatar"><img src="<?php echo base_url().$this->data['asfront']; ?>images/ava.png" alt="" title="" /></div>       
        </div>

        <nav class="user-nav">
            <ul>
                <li><a href="<?php echo base_url();?>Settings" class="close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/settings.png" alt="" title="" /><span>Pengaturan Akun</span></a></li>
                <li><a href="features.html" class="close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/briefcase.png" alt="" title="" /><span>Akun ku</span></a></li>
                <li><a href="features.html" class="close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/message.png" alt="" title="" /><span>History Pemesanan</span><strong>12</strong></a></li>
                <li><a href="features.html" class="close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/love.png" alt="" title="" /><span>Inbox</span><strong>5</strong></a></li>
                <li><a href="index.html" class="close-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/blue/lock.png" alt="" title="" /><span>Logout</span></a></li>
            </ul>
        </nav>
    </div>
</div> <!-- kelar Panel-Reveal -->

<div class="views">

  <div class="view view-main">
    <div class="pages">

        <div data-page="index" class="page homepage">
            <div class="page-content">

                <div class="navbarpages nobg">
                    <div class="navbar_left">
                        <div class="logo_image">
                            <a href="index.html"><img src="<?php echo base_url().$this->data['asfront']; ?>images/logo_image.png" alt="" title="" width="140"/>
                        </div>
                    </div>			
                    <a href="#" data-panel="left" class="open-panel">
                        <div class="navbar_right"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/menu.png" alt="" title="" /></div>
                    </a>					
                </div>

                <!-- Slider -->
                <div class="swiper-container slidertoolbar swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="background-image:url(<?php echo base_url().$this->data['asfront']; ?>images/Logo2-02.png);">
                            <div class="slider_trans">
                                <div class="slider-caption">
                                    <h2 data-swiper-parallax="-100%">Selamat Datang!</h2>
                                    <span class="subtitle" data-swiper-parallax="-60%">CONSTRUCTIONS & BUILDINGS</span>
                                    <p data-swiper-parallax="-30%">Exceptional architectural and interior, design and construction management.</p>
                                    <a href="about.html" class="swiper_read_more">Baik, saya mau nyuci</a>
                                </div>
                            </div> 
                        </div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url().$this->data['asfront']; ?>images/Logo-02.png);">
                            <div class="slider_trans">		  
                                <div class="slider-caption">
                                    <h2 data-swiper-parallax="-100%">OFFICE BUILDINGS</h2>
                                    <span class="subtitle" data-swiper-parallax="-60%">CONSTRUCTION MANAGEMENT</span>
                                    <p data-swiper-parallax="-30%">The architect hired by a client is responsible for creating a design concept that meets the requirements of that client.  </p>
                                    <a href="about.html" class="swiper_read_more">Baik, saya mau nyuci</a>
                                </div>	
                            </div>	
                        </div>
                        <div class="swiper-slide" style="background-image:url(<?php echo base_url().$this->data['asfront']; ?>images/Logo2-02.png);">
                            <div class="slider_trans">		  
                                <div class="slider-caption">
                                    <h2 data-swiper-parallax="-100%">WORK WITH US</h2>
                                    <span class="subtitle" data-swiper-parallax="-60%">BEST DESIGN COMPANY</span>
                                    <p data-swiper-parallax="-30%">Developing the requirements the client wants in the building..</p>
                                    <a href="contact.html" class="swiper_read_more">Baik, saya mau nyuci</a>
                                </div>
                            </div>
                        </div> 		   
                    </div>
                    <div class="swiper-pagination"></div>
                </div> <!-- kelar Swiper-Container slider -->

                <div class="swiper-container-toolbar swiper-toolbar swiper-init" data-effect="slide" data-slides-per-view="5" data-slides-per-group="3" data-space-between="0" data-pagination=".swiper-pagination-toolbar">
                    <div class="swiper-pagination-toolbar"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/home.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/drink.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="#" data-panel="right" class="open-panel"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/users.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="blog.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/blog.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="tel:9007005600" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/phone.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/love.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/map.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/blog.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="about.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/settings.png" alt="" title="" /></a>
                        </div>
                        <div class="swiper-slide toolbar-icon">
                            <a href="contact.html" data-view=".view-main"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/contact.png" alt="" title="" /></a>
                        </div>
                    </div>
                </div> <!-- kelar Swiper-container-toolbar -->


</div>
</div>
</div>



</div>
</div>


<!-- Login Popup -->
<div class="popup popup-login">
    <div class="content-block">
        <h4>Silakan login dulu</h4>
        <div class="loginform">
            <form id="LoginForm" method="post">
                <input type="text" name="Username" value="" class="form_input required" placeholder="Email kamu" />
                <input type="password" name="Password" value="" class="form_input required" placeholder="Ketik password kamu" />
                <div class="forgot_pass">
                    <a href="#" data-popup=".popup-forgot" class="open-popup">Lupa Password?</a>
                </div>
                <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN IN" />
            </form>
            <div class="signup_bottom">
                <p>Belum punya akun?<a href="#" data-popup=".popup-signup" class="open-popup">Silakan daftar</a></p>
            </div>
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup">
                <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/menu_close.png" alt="" title="" />
            </a>
        </div>
    </div>
</div> <!-- kelar Popup-login -->

<!-- Register Popup -->
<div class="popup popup-signup">
    <div class="content-block">
        <h4>Okay! Mari daftar dulu.</h4>
        <div class="loginform">
            <form id="RegisterForm" method="post">
                <input type="text" name="Username" value="" class="form_input required" placeholder="Isi username yang kamu inginkan" />
                <input type="text" name="Email" value="" class="form_input required" placeholder="Alamat email kamu juga" />
                <input type="password" name="Password" value="" class="form_input required" placeholder="Ketik password nya" />
                <input type="submit" name="submit" class="form_submit" id="submit" value="Daftar sekarang" />
            </form>
            <h5>Lagi malas ngetik? Silakan daftar dengan akun sosial media kamu</h5>
            <div class="signup_social">
                <a href="http://www.facebook.com/" class="signup_facebook external">Facebook</a>
                <a href="http://www.twitter.com/" class="signup_twitter external">Twitter</a>            
            </div>		
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/menu_close.png" alt="" title="" /></a>
        </div>
    </div>
</div>

<!-- Forgot Password Popup -->
<div class="popup popup-forgot">
    <div class="content-block">
        <h4>FORGOT PASSWORD</h4>
        <div class="loginform">
            <form id="ForgotForm" method="post">
                <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
            </form>
            <div class="signup_bottom">
                <p>Check your email and follow the instructions to reset your password.</p>
            </div>
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup">
                <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/menu_close.png" alt="" title="" />
            </a>
        </div>
    </div>
</div>

<!-- Social Icons Popup -->
<div class="popup popup-social">
    <div class="content-block">
        <h4>Social Share</h4>
        <p>Share icons solution that allows you share and increase your social popularity.</p>
        <ul class="social_share">
            <li><a href="http://twitter.com/" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
            <li><a href="http://www.facebook.com/" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
            <li><a href="http://plus.google.com" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
            <li><a href="http://www.dribbble.com/" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
            <li><a href="http://www.linkedin.com/" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
            <li><a href="http://www.pinterest.com/" class="external"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
        </ul>
        <div class="close_popup_button">
            <a href="#" class="close-popup"><img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/white/menu_close.png" alt="" title="" /></a>
        </div>
    </div>
</div>



<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.swipebox.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/email.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/circlemenu.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/audio.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
</body>
</html>