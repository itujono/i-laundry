<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Daftar Partner';
    $actions = 'savepartner';
    $controller = 'Partner';
    if($getpartner->idPARTNER != NULL){
       $title1 = 'Perbaharui Partner';
    } 
    $url = base_url().$this->data['folBACKEND'].$controller.'/'.$actions;
?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom"><?php echo $title1;?></h4>

  <?php if (!empty($message)){ ?>
      <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        <h4><?php echo $message['title']; ?></h4>
        <?php echo $message['text']; ?>
      </div>
  <?php } ?>

  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Partner</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form tambah Partner</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST SERVICES -->
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Didaftarkan</th>
                  <th>Status</th>
                  <th>Actions</th>
                  <th>Reset</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Didaftarkan</th>
                <th>Status</th>
                <th>Actions</th>
                <th>Reset</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($listpartner  as $key => $partner) { 
              $id = encode($partner->idPARTNER);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $partner->namePARTNER;?></td>
                <td><?php echo $partner->emailPARTNER;?></td>
                <td>+62&nbsp;<?php echo $partner->telephonePARTNER;?></td>
                <td><?php echo dF($partner->createdatePARTNER, 'd F Y (H:i:s)');?></td>
                <td><?php echo $partner->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($partner->statusPARTNER == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($partner->namePARTNER).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($partner->namePARTNER).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/partnerlist/'.urlencode($id);
                ?>
                <?php
                  if($this->session->userdata('roleUSER') == 22){
                ?>
                <td class="uk-text-center">
                  <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icn; ?></i></a>
                  <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                </td>
                <?php } ?>
                <td>
                    <a href="#partnerID" class="md-btn md-btn2" data-id="<?php echo $id; ?>" data-uk-modal="{target:'#partnerID'}"><i class="md-icon material-icons uk-text-danger">&#xE8C6;</i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </li>
        <!-- END LIST SERVICES -->

        <!-- START FORM INPUT AREA -->
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Partner</h3>
          <form method="POST" name="formpartner" action="<?php echo $url;?>">
          <?php echo form_hidden('idPARTNER',encode($getpartner->idPARTNER),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">
                      <label>Nama Partner</label>
                      <br>
                        <input type="text" class="input-count md-input label-fixed" id="input_counter" maxlength="50" name="namePARTNER" required autocomplete value="<?php echo $getpartner->namePARTNER;?>" />
                        <p class="text-red"><?php echo form_error('namePARTNER'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3">
                      <label>Email Partner</label>
                      <br>
                        <input type="email" class="input-count md-input label-fixed" id="input_counter" maxlength="70" name="emailPARTNER" required autocomplete value="<?php echo $getpartner->emailPARTNER;?>" />
                        <p class="text-red"><?php echo form_error('emailPARTNER'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3">
                      <label>Telepon Partner</label>
                      <br>
                        <input type="tel" class="input-count md-input label-fixed" id="input_counter" maxlength="15" name="telephonePARTNER" required autocomplete value="<?php echo $getpartner->telephonePARTNER;?>" />
                        <p class="text-red"><?php echo form_error('telephonePARTNER'); ?></p>
                    </div>
                  </div>
                  <?php
                    if(empty($getpartner->idPARTNER)){
                  ?>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                      <label>Kata sandi Partner</label>
                      <br>
                        <input type="password" class="md-input label-fixed" name="passwordPARTNER" required pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordPARTNER.pattern = this.value;" id="passwordPARTNER" />
                        <p class="text-red"><?php echo form_error('passwordPARTNER'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2">
                      <label for="register_password_repeat">Ulangi kata sandi partner</label>
                      <br>
                        <input class="md-input label-fixed" name="repasswordPARTNER" type="password" id="repasswordPARTNER" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Silakan masukkan kata sandi yang sama seperti disamping' : '');" name="repasswordPARTNER" required />
                    </div>
                  </div>
                  <?php } ?>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                      <label>Alamat Partner</label>
                      <br>
                      <textarea cols="30" rows="4" class="input-count md-input label-fixed" id="input_counter" name="addressPARTNER" maxlength="150"><?php echo $getpartner->addressPARTNER;?></textarea>
                      <p class="text-red"><?php echo form_error('addressPARTNER'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2">
                      <label>Daerah</label>
                      <br>
                      <?php echo form_dropdown('idREGION', $region, $getpartner->idREGION,'data-md-selectize data-md-selectize-bottom required'); ?> 
                      <p class="text-red"><?php echo form_error('idREGION'); ?></p>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                  <?php
                    $widths = 'uk-width-medium-1-2';
                    if(empty($getpartner->idPARTNER))$widths = 'uk-width-medium-1-1';
                  ?>
                    <div class="<?php echo $widths;?> uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getpartner->statusPARTNER == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusPARTNER" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Partner</b></label>
                      </div>
                    </div>
                  </div>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                     <div class="uk-form-row">
                       <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SIMPAN', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                     </div>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </li>
        <!-- END FORM INPUT AREA -->
      </ul>
    </div>
  </div>
</div>