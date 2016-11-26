<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/apple-touch-icon.png" />
  <link rel="apple-touch-startup-image" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/apple-touch-startup-image-320x460.png" />
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/196x196.png">
  <link rel="shortcut icon" sizes="128x128" href="<?php echo base_url().$this->data['asfront']; ?>img/photos/128x128.png">
  <!-- Color theme for statusbar -->
  <meta name="theme-color" content="#3db5e4">
  <title>i-Laundry - Selamat Datang</title>
  
  <link href="https://fonts.googleapis.com/css?family=Itim|Roboto:300,400,700,900" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.material.min.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/framework7.material.colors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().$this->data['asfront']; ?>css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().$this->data['asfront']; ?>css/slick-theme.css"/>
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>fonts/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/base.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url().$this->data['asfront']; ?>css/my-app.css">
</head>

<body class="theme-blue">
  <!-- Status bar overlay for fullscreen mode-->
  <div class="statusbar-overlay"></div>
  <!-- Panels overlay-->
  <div class="panel-overlay"></div>
  <!-- Left panel with reveal effect-->
  <div id="left-menu" class="panel panel-left panel-reveal">
    <div class="content-block">
      <div class="left-menu-profile text-center">
        <div class="row">
          <div class="col-15">
            <a href="<?php echo base_url();?>about" class="close-panel"><i class="flaticon-how"></i></a>
          </div>
          <div class="col-70">
            <input type="text" class="text-thiny" placeholder="Cari apa saja...">
          </div>
          <div class="col-15">
            <a href="#" class="close-panel"><i class="flaticon-menu"></i></a>
          </div>
        </div>
        <?php
          if(!empty($this->session->userdata('idCUSTOMER'))){
              $Name = $profile->nameCUSTOMER;
              $Alt = $profile->nameCUSTOMER;
              $image = $profile->imageCUSTOMER;
          } else {
              $Name = "Selamat datang!";
              $Alt = "i-Laundry - Selamat Datang";
              $image = base_url().'assets/frontend/img/photos/user.png';
          }
        ?>
        <div class="margin-top-30">
          <img src="<?php echo $image;?>" alt="<?php echo $Name;?>" width="80" height="80">
        </div>
        <div class="text-small text-capitalize">
          <?php echo $Name;?>
        </div>
        <div class="text-thiny gray-text text-capitalize icon-location">
          <?php 
            if(!empty($this->session->userdata('idCUSTOMER'))){
                $Address = $profile->addressCUSTOMER;
            } else {
                $Address = "Batam, Indonesia";
            }
          ?>
          <i class="flaticon-location-pin"></i> <?php echo $Address;?>
        </div>
      </div>
    </div>
    <!-- Menu items -->
    <div class="list-block list-menu">
      <ul>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-house-outline"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>" class="close-panel">Home</a>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-shop"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>promo" class="close-panel">Promo</a>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-shop"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>order_review" class="close-panel">Review</a>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-star"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>satuan" class="close-panel">Harga Satuan</a>
              </div>
            </div>
          </div>
        </li>
        <?php
          if(!empty($this->session->userdata('idCUSTOMER'))){
        ?>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-list"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>customer/profile" class="close-panel">Edit Profile</a>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-settings"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>customer/settings" class="close-panel">Setting</a>
              </div>
            </div>
          </div>
        </li>
        <!-- <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-star"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="pages-list.html"  class="close-panel">Pages</a>
              </div>
            </div>
          </div>
        </li> -->
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-cooker"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>order" class="close-panel">Order</a>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-how"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>howto" class="close-panel">Bagaimana Cara Kerja Kami?</a>
              </div>
            </div>
          </div>
        </li>
        <?php
          if(!empty($this->session->userdata('idCUSTOMER'))){
        ?>
        <li>
          <div class="item-content">
            <div class="item-media">
              <i class="flaticon-power-button"></i>
            </div>
            <div class="item-inner no-margin">
              <div class="item-title text-small">
                <a href="<?php echo base_url();?>customer/logout" class="confirm-logout">Logout</a>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div> <!-- kelar List Block List Menu -->
  </div> <!-- kelar Panel Left -->


  <!-- Views -->
  <div class="views">
    <div class="view view-main">
      <!-- Pages container, because we use fixed navbar and toolbar, it has additional appropriate classes-->
      <div class="pages">
        <!-- Page, "data-page" contains page name -->
        <div data-page="index" class="page">

          <!-- Scrollable page content -->
          <div class="page-content" id="app-cover">
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
            <div class="pull-right">
              <a href="#" class="link icon-only open-panel"><i class="icon icon-bars"></i></a>
            </div>
            <div class="clearfix"></div>
            <div class="app-cover-content">
              <div class="logo">
                <img src="<?php echo base_url().$this->data['asfront']; ?>img/logo_image.png" alt="i-Laundry"/>
              </div>
              <div class="main-title">
                <h1>Selamat Datang di i-Laundry!</h1>
                <h4>Kamu berada di tempat yang tepat. Karena kami siap mengembalikan keharuman pakaianmu seperti sedia kala.</h4>
              </div>
              <?php
                if(!empty($this->session->userdata('idCUSTOMER'))){
                  $button = base_url().'order';
                } else {
                  $button = base_url().'customer/login';
                }
              ?>
              <div class="row">
                <div class="col-100">
                  <a href="<?php echo $button;?>" class="button login-btn">Bagus, saya mau nyuci sekarang</a>
                </div>
              </div>
              <div class="row offset-top-10 margin-bottom-10">
                <div class="col-100">
                  <a href="<?php echo base_url();?>howto" class="button link-btn">
                    Bagaimana cara kerja i-Laundry?
                  </a>
                </div>
              </div>
              
            </div>
          </div> <!-- kelar Page-Content -->
        </div>
      </div> <!-- kelar Pages -->
    </div>
  </div> <!-- kelar Views utama -->
  
  <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/jquery-1.12.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/framework7.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/my-app.js"></script>
  <script type="text/javascript" src="<?php echo base_url().$this->data['asfront']; ?>js/custom.js"></script>
</body>

</html>