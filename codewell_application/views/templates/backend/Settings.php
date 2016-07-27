<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
  </div>
 <?php } ?>
    <h4 class="heading_a uk-margin-bottom">Pengaturan Akun</h4>
    <form method="POST" action="<?php echo base_url();?>codewelladmin/User/processchangepassword" class="uk-form-stacked">
    <input type="hidden" name="idUSER" value="<?php echo encode($this->session->userdata('idUSER'));?>">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-large-1-1">
                <div class="md-card">
                    <div class="md-card-content">
                        <div class="uk-form-row">
                            <label for="settings_site_name">Password Lama</label>
                            <br>
                            <input class="md-input label-fixed" type="password" name="oldpasswordUSER" placeholder="Masukkan kata sandi lama kamu"/>
                        </div>
                        <div class="uk-form-row">
                            <label for="settings_page_description">Password baru</label>
                            <br>
                            <input class="md-input label-fixed" type="password" name="passwordUSER" placeholder="Masukkan kata sandi baru kamu" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordUSER.pattern = this.value;" id="passwordUSER" required />
                        </div>
                        <div class="uk-form-row">
                            <label for="settings_admin_email">Masukan Password baru</label>
                            <br>
                            <input class="md-input label-fixed" type="password" name="repasswordUSER" placeholder="Masukkan kembali kata sandi baru kamu"  pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon masukkan kata sandi yang sama seperti diatas' : '');" id="repasswordUSER" required/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md-fab-wrapper">
            <input type="submit" class="md-fab md-fab-primary md-color-white" value="SIMPAN">
        </div>

    </form>