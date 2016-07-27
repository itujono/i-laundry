<?php if($footer == 'TRUE'){ ?>
<!-- Footer Start -->
    <footer id="footer" style="background:#19171a;padding:32px 0 0">
        <div class="cs-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-our-partners">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">Tentang Dunia Otomotif</h6>
                            </div>
                            <ul>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="<?php echo base_url(); ?>Syarat_dan_ketentuan">Syarat &amp; Ketentuan</a></li>
                                <li><a href="<?php echo base_url(); ?>Kebijakan_privasi">Kebijakan Privasi</a></li>
                                <li><a href="<?php echo base_url(); ?>contact_us">Kontak</a></li>
                            </ul>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-categores">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">kategori Kendaraan</h6>
                            </div>
                            <ul>
                            <?php foreach (kategori_kendaraan() as $key => $value) { ?>
                                <li><a href="#"><?php echo $value->nameVEHICLECATEGORY ; ?></a></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-about-us">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">Dealer Terbaru</h6>
                            </div>
                            <ul>
                            <?php foreach (dealer_terbaru() as $key => $value) { ?>
                                <li><a href="#"><?php echo $value->nameSELLER ; ?></a></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-news-letter">
                            <div class="widget-section-title">
                                <h6 style="color:#fff !important">Social Media</h6>
                            </div>
                           <!--  <div class="cs-form">
                                <form method="POST" action="<?php echo base_url();?>User/addsubscriber">
                                    <div class="input-holder">
                                        <input type="email" name="emailNEWSLETTER" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Masukkan alamat Email Anda" required>
                                        <?php 
                                        $notif = $this->session->flashdata('emailNEWSLETTER');
                                            if(!empty($notif)){
                                        ?>
                                        
                                        <span class="help-block"><?php echo  $notif; ?></span>

                                        <?php } ?>
                                        <label> <i class="icon-send2"></i>
                                            <input class="cs-bgcolor" type="submit" value="submit">
                                        </label>
                                    </div>
                                </form>
                            </div> -->
                            <div class="cs-social-media">
                                <ul>
                                    <li><a href="https://www.facebook.com/prowebmediaID" data-original-title="facebook"><i class="icon-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/prowebmedia" data-original-title="twitter"><i class="icon-twitter4"></i></a></li>
                                    <li><a href="https://plus.google.com/+ProwebmediaOrg/" data-original-title="google"><i class="icon-google-plus"></i></a></li>
                                    <li><a href="https://www.instagram.com/prowebmedia/" data-original-title="rss"><i class="icon-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs-copyright" style="background:#141215; padding-top:37px; padding-bottom:37px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>Powered by <a href="#" class="cs-color">Proweb Media Indonesia.</a> &copy; 2016</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-back-to-top">
                            <address>
                            <i class="icon-phone"></i> <a href="#">+62 (0778) 7418587</a>
                            </address>
                            <a class="btn-to-top cs-bgcolor" href=""><i class="icon-keyboard_arrow_up"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End --> 
    <?php }else{ ?>
    <footer id="footer" style="background:#19171a;padding:0 0 0">
        <div class="cs-copyright" style="background:#141215; padding-top:37px; padding-bottom:37px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="copyright-text">
                            <p>Powered by <a href="#" class="cs-color">Proweb Media Indonesia.</a> &copy; 2016</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="cs-back-to-top">
                            <address>
                            <i class="icon-phone"></i> <a href="#">+62 (0778) 7418587</a>
                            </address>
                            <a class="btn-to-top cs-bgcolor" href=""><i class="icon-keyboard_arrow_up"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php } ?>
</div>

<!-- Modal -->
<div class="modal fade" id="user-sign-up" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Hallo!</h4>
                <p>Segera daftarkan akun Anda dan mulailah kesuksesan Anda bersama kami.</p>
                <div class="cs-login-form">
                    <form action="<?php echo base_url();?>Home/saveseller"  method="POST">
                        <div class="input-holder">
                            <label for="cs-username11"> <strong>Nama lengkap</strong> <i class="icon-user-plus2"></i>
                                <input type="text" class="" id="cs-username11" placeholder="Tuliskan nama lengkap Anda" name="nameSELLER" required="">
                            </label>
                        </div>
                        <div class="input-holder">
                            <label for="cs-email11"> <strong>Alamat email</strong> <i class="icon-envelope"></i>
                                <input type="email" class="" id="cs-email11" placeholder="Masukkan email Anda" name="emailSELLER" required="">
                            </label>
                        </div>
                        <div class="input-holder">
                            <label for="cs-login-password11"> <strong>Kata sandi</strong> <i class="icon-unlock40"></i>
                                <input type="password" name="passSELLER" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters' : ''); if(this.checkValidity()) form.repassSELLER.pattern = this.value;" id="passSELLER" placeholder="******" required="">
                            </label>
                        </div>
                        <div class="input-holder">
                            <label for="cs-confirm-password11"> <strong>Konfirmasi sandi</strong> <i class="icon-unlock40"></i>
                                <input type="password" name="repassSELLER" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same password as above' : '');" class="form-control" id="repassSELLER" placeholder="******">
                            </label>
                        </div>
                        <div class="input-holder">
                            <input class="csborder-color" type="submit" value="BUAT AKUN">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="cs-user-signup">
                    <i class="icon-user-plus2"></i> 
                    <strong>Sudah memiliki akun?</strong> <a class="cs-color" data-dismiss="modal" data-target="#user-sign-in" data-toggle="modal" href="javascript:;" aria-hidden="true">Masuk</a>
                </div>
                <div class="cs-separator"><span>atau</span></div>
                <div class="cs-user-social"> <em>Masuk menggunakan akun Social Networks Anda</em>
                    <ul>
                        <li><a href="<?php echo base_url()?>user/Signinfacebook" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                        <li><a href="<?php echo base_url()?>user/logingoogle" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- kelar modal Sign-up -->

<div class="modal fade" id="user-sign-in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Selamat datang!</h4>
                <p>Masukkan alamat email dan password yang sah.</p>
                <div class="cs-login-form">
                    <form action="<?php echo base_url();?>User/Signin" method="POST">
                        <div class="input-holder">
                            <label for="cs-email11"> <strong>Alamat email</strong> <i class="icon-envelope"></i>
                                <input type="email" class="" id="cs-email11" placeholder="Masukkan alamat email Anda" name="emailUSER" required="">
                            </label>
                        </div>
                        <div class="input-holder">
                            <label for="cs-login-password-1"> <strong>Kata sandi</strong> <i class="icon-unlock40"></i>
                                <input type="password" id="cs-login-password-1" placeholder="******" name="passUSER">
                            </label>
                        </div>
                        <div class="input-holder"> <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Lupa password?</a> </div>
                        <div class="input-holder">
                            <input class="btn-auto" type="submit" value="MASUk">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="cs-separator"><span>atau</span></div>
                <div class="cs-user-social"> <em>Masuk menggunakan akun Social Networks Anda</em>
                    <ul>
                        <li><a href="<?php echo base_url()?>user/Signinfacebook" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                        <li><a href="<?php echo base_url()?>user/logingoogle" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                    </ul>
                </div>
                <div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Anda belum terdaftar? </strong> <a class="cs-color" data-dismiss="modal" data-target="#user-sign-up" data-toggle="modal" href="javascript:;" aria-hidden="true">Daftar sekarang</a> </div>
            </div>
        </div>
    </div>
</div> <!-- kelar modal Sign-in -->

<div class="modal fade" id="user-forgot-pass" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Pulihkan sandi</h4>
                <div class="cs-login-form">
                    <form id="formrecoverypassword" name="formrecoverypassword" method="POST" action="<?php echo base_url();?>User/recoverypassword">
                        <div class="input-holder">
                            <label for="cs-email-1"> <strong>Email</strong> <i class="icon-envelope"></i>
                                <input type="email" name="emailUSER" class="" id="cs-email-1" placeholder="Masukkan email Anda">
                            </label>
                        </div>
                        <div class="input-holder">
                            <input class="btn-auto" type="submit" value="KIRIM">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Anda belum terdaftar? </strong> <a href="javascript:;" data-toggle="modal" data-target="#user-sign-up" data-dismiss="modal" class="cs-color" aria-hidden="true">Daftar sekarang</a> </div>
            </div>
        </div>
    </div>
</div> <!-- kelar modal Forgot -->

<?php echo $plugins;?>

<script type="text/javascript">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

</body>
</html>