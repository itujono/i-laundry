<!-- main header -->
<header id="header_main">
  <div class="header_main_content">
    <nav class="uk-navbar">

      <!-- main sidebar switch -->
      <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
        <span class="sSwitchIcon"></span>
      </a>
      <!-- secondary sidebar switch -->
      <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
        <span class="sSwitchIcon"></span>
      </a>

      <div class="uk-navbar-flip">
        <ul class="uk-navbar-nav user_actions">
        <!-- <li><p class="user_action_icon uk-visible-large" style="color:#fff;">Waktu loading <strong>{elapsed_time}</strong> detik.</p></li> -->
          <li><a href="#" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE192;</i>&nbsp; {elapsed_time} detik.</a></li>

          <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>

          <li><a href="#" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE54A;</i>&nbsp;Hello <?php echo $this->session->userdata('Email');?>!</a></li>

          <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
            <a href="#" class="user_action_image"><img class="md-user-image" src="<?php echo base_url();?>assets/backend/assets/img/avatars/avatar_11_tn.png" alt=""/></a>
            <div class="uk-dropdown uk-dropdown-small">
              <ul class="uk-nav js-uk-prevent">
                <li><a href="<?php echo base_url();?>codewelladmin/User/changepassword">Rubah kata sandi</a></li>
                <li><a href="<?php echo base_url(); ?>codewelladmin/User/Logout">Keluar</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header><!-- main header end -->
<!-- main sidebar -->
<aside id="sidebar_main">

  <div class="sidebar_main_header">
    <div class="sidebar_logo">
      <a href="index.html" class="sSidebar_hide"><img src="<?php echo base_url();?>assets/backend/assets/img/logo_main.png" alt="" height="15" width="71"/></a>
      <a href="index.html" class="sSidebar_show"><img src="<?php echo base_url();?>assets/backend/assets/img/logo_main_small.png" alt="" height="32" width="32"/></a>
    </div>
  </div>

  <div class="menu_section">
    <ul>
    <?php if($this->session->userdata('roleUSER') == 22){ ?>
      <li title="Customer">
        <a href="<?php echo base_url();?>codewelladmin/Customer">
          <span class="menu_icon"><i class="material-icons">&#xE8A3;</i></span>
          <span class="menu_title">Customer</span>
        </a>
      </li>
      <li title="Order">
        <a href="<?php echo base_url();?>codewelladmin/Order">
          <span class="menu_icon"><i class="material-icons">&#xE8CC;</i></span>
          <span class="menu_title">Order</span>
        </a>
      </li>
      <!-- <li title="Daerah">
        <a href="<?php echo base_url();?>codewelladmin/Region">
          <span class="menu_icon"><i class="material-icons">&#xE55B;</i></span>
          <span class="menu_title">Daerah</span>
        </a>
      </li> -->
      <!-- <li title="Area">
        <a href="<?php echo base_url();?>codewelladmin/Area">
          <span class="menu_icon"><i class="material-icons">&#xE55A;</i></span>
          <span class="menu_title">Area</span>
        </a>
      </li> -->
      <li title="Aroma">
        <a href="<?php echo base_url();?>codewelladmin/Aroma">
          <span class="menu_icon"><i class="material-icons">&#xE545;</i></span>
          <span class="menu_title">Aroma</span>
        </a>
      </li>
      <li title="Layanan">
        <a href="<?php echo base_url();?>codewelladmin/Services">
          <span class="menu_icon"><i class="material-icons">&#xE55B;</i></span>
          <span class="menu_title">Layanan</span>
        </a>
      </li>
      <li title="Paket">
        <a href="<?php echo base_url();?>codewelladmin/Package">
          <span class="menu_icon"><i class="material-icons">&#xE850;</i></span>
          <span class="menu_title">Paket</span>
        </a>
      </li>
      <li title="Payment">
        <a href="<?php echo base_url();?>codewelladmin/Payment">
          <span class="menu_icon"><i class="material-icons">&#xE8A1;</i></span>
          <span class="menu_title">Payment</span>
        </a>
      </li>
      <li title="Pengguna">
        <a href="<?php echo base_url();?>codewelladmin/User">
          <span class="menu_icon"><i class="material-icons">&#xE84E;</i></span>
          <span class="menu_title">Pengguna</span>
        </a>
      </li>
    <?php } else if($this->session->userdata('roleUSER') == 24) {?>
      <li title="Customer">
        <a href="<?php echo base_url();?>codewelladmin/Customer">
          <span class="menu_icon"><i class="material-icons">&#xE8CC;</i></span>
          <span class="menu_title">Customer</span>
        </a>
      </li>
      <li title="Order">
        <a href="<?php echo base_url();?>codewelladmin/Order">
          <span class="menu_icon"><i class="material-icons">&#xE8A3;</i></span>
          <span class="menu_title">Order</span>
        </a>
      </li>
    <?php } ?>
    </ul>
  </div>
</aside><!-- main sidebar end -->