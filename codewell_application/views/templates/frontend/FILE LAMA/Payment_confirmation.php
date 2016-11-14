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
    <title>Konfirmasi Pembayaran - i-Laundry</title>
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

    <div class="pages" id="pay-conf">
        <div data-page="pay-conf" class="page no-toolbar">
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
                    
                        <h2 class="page_title">Form Konfirmasi</h2>
                  
                        <div class="page_single layout_fullwidth_padding">  

                            <div class="history-title">
                                <h2>Sudah melakukan pambayaran?</h2>
                                <p>Segera konfirmasi pembayaran kamu dengan menggunakan form di bawah ini.</p>
                            </div>

                            <div class="profile-form">
                                    <input readonly type="hidden" name='idCUSTOMER' value=""/>
                                    <input readonly type="hidden" name='emailCUSTOMER' value=""/>
                                    <div class="form_row">
                                        <label>Nama pengirim</label>
                                        <input type="text" name="nameCUSTOMER" value="" class="form_input required" />
                                    </div>
                                    <div class="form_row">
                                        <label>Nomor telepon</label>
                                        <input type="number" name="telephoneCUSTOMER" value="" class="form_input required" min="0" inputmode="numeric" pattern="[0-9]*" title="Non-negative integral number" required />
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
                                        <label>Alamat</label>
                                        <textarea name="addressCUSTOMER" class="form_textarea required" rows="7" cols="" required></textarea>
                                    </div>     
                                    <input type="submit" name="submit" class="form_submit" id="submit" value="Simpan" />
                            </div> <!-- kelar Profile-Form -->
                        </div>
                    </div> <!-- kelar ID page-maincontent -->
                </div>
            </div> <!-- kelar page no-toolbar -->
        </div> <!-- kelar Pages -->
   


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