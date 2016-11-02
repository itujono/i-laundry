<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/backend/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/backend/assets/img/favicon-32x32.png" sizes="32x32">

    <title>i-Laundry - Login</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/uikit/css/uikit.almost-flat.min.css">

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/assets/css/login_page.min.css" />

</head>
<body class="login_page">
    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                    <div class="user_avatar"></div>
                </div>
                <?php if (!empty($message)){ ?>
                      <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
                        <a href="#" class="uk-alert-close uk-close"></a>
                        <h4><?php echo $message['title']; ?></h4>
                        <?php echo $message['text']; ?>
                      </div>
                  <?php } ?>
                <form action="<?php echo base_url();?>codewelladmin/User/login" method="POST">
                    <div class="uk-form-row">
                        <label for="login_email">Email</label>
                        <input class="md-input" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Kata sandi</label>
                        <input class="md-input" type="password" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Paling sedikit 8 Karakter' : '');" name="password" required />
                    </div>
                    <div class="uk-margin-medium-top">
                        <input type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large" value="MASUK">
                    </div>
                    <div class="uk-margin-top">
                        <a href="#" id="login_help_show" class="uk-float-right">Butuh bantuan?</a>
                    </div>
                    <br>
                </form>
            </div>
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_b uk-text-success">Tidak bisa masuk?</h2>
                <p>Inilah info untuk bisa masuk kembali ke akun kamu secepat mungkin.</p>
                <p>Pertama, cobalah hal yang paling mudah: ingatlah password kamu secara pelan-pelan.</p>
                <p>masih tidak bekerja?, pastikan bahwa Caps Lock di-<i>keyboard</i> kamu dimatikan, dan pastikan kembali email diketik dengan benar, dan kemudian coba lagi</p>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/backend/assets/js/common.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/uikit_custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/altair_admin_common.min.js"></script>

    <!-- altair login page functions -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/login.min.js"></script>

    <script>
        // check for theme
        if (typeof(Storage) !== "undefined") {
            var root = document.getElementsByTagName( 'html' )[0],
                theme = localStorage.getItem("altair_theme");
            if(theme == 'app_theme_dark' || root.classList.contains('app_theme_dark')) {
                root.className += ' app_theme_dark';
            }
        }
    </script>

</body>
</html>