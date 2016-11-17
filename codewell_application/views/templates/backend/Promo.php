<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Promo';
    $actions = 'savepromo';
    $controller = 'Promo';
    if($getpromo->idPROMO != NULL){
       $title1 = 'Perbaharui Promo';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Promo</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Promo</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST SERVICES -->
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th>Partner</th>
                  <th>Judul</th>
                  <th>Mulai</th>
                  <th>Habis</th>
                  <th>Deskripsi</th>
                  
                  <th>Actions</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Partner</th>
                <th>Judul</th>
                <th>Mulai</th>
                <th>Habis</th>
                <th>Deskripsi</th>
                
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($listpromo  as $key => $promo) { 
              $id = encode($promo->idPROMO);
              $today = strtotime(date("Y-m-d"));
              $startads = strtotime($promo->startPROMO);
              $endads = strtotime($promo->endPROMO);

              if($today > $endads){
                $status = '<span class="uk-badge uk-badge-danger">Expired</span>';
              } elseif($startads > $today) {
                $status = '<span class="uk-badge uk-badge-warning">Not Active</span>';
              } else {
                $status = '<span class="uk-badge uk-badge-primary">Active</span>'; 
              }
            ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><img class="img_thumb" src="<?php echo $promo->imagePROMO;?>" alt="<?php echo $promo->namePARTNER;?>"/></td>
                <td><?php echo $status;?></td>
                <td><?php echo $promo->namePARTNER; ?></td>
                <td><?php echo $promo->namePROMO;?></td>
                <td><?php echo date('d F Y', strtotime($promo->startPROMO));?></td>
                <td><?php echo date('d F Y', strtotime($promo->endPROMO));?></td>
                <td><?php echo $promo->descriptionPROMO;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($promo->statusPROMO == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($promo->namePROMO).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($promo->namePROMO).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/promolist/'.urlencode($id);
                ?>
                <td class="uk-text-center">
                  <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icn; ?></i></a>
                  <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </li>
        <!-- END LIST SERVICES -->

        <!-- START FORM INPUT AREA -->
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Promo</h3>
          <form method="post" name="formpromo" action="<?php echo $url;?>" enctype="multipart/form-data">
          <?php echo form_hidden('idPROMO',encode($getpromo->idPROMO),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="md-card">
                  <div class="md-card-content">
                    <?php
                      if(!empty($getpromo->imagePROMO)){
                    ?>
                    <div class="uk-margin-bottom uk-text-center uk-position-relative">
                        <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url()."codewelladmin/Promo/deleteimgpromo/".encode($getpromo->idPROMO)."/".$getpromo->idPARTNER; ?>'; });"></a>
                        <img src="<?php echo $getpromo->imagePROMO;?>" alt="" class="img_medium"/>
                    </div>
                    <?php } else { ?>
                      <?php echo form_upload('imagePROMO','','class="md-input" required'); ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <label>Nama Promo</label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="namePROMO" required autocomplete value="<?php echo $getpromo->namePROMO;?>" />
                        <p class="text-red"><?php echo form_error('namePROMO'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                    <label>Partner terkait</label>
                    <br>
                      <?php echo form_dropdown('idPARTNER', $partners, $getpromo->idPARTNER,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                      <p class="text-red"><?php echo form_error('idPARTNER'); ?></p>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="uk-input-group">
                          <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                          <label for="uk_dp_start">Mulai Promo</label>
                          <?php 
                          if(!empty($getpromo->startPROMO)){ 
                            $start = str_replace('-', '.', date('d.m.Y',strtotime($getpromo->startPROMO)));
                          } else {
                            $start = $getpromo->startPROMO;
                          }

                          ?>
                          <input class="md-input" name="startPROMO" value="<?php echo $start;?>" type="text" id="uk_dp_start">
                      </div>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="uk-input-group">
                          <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                          <label for="uk_dp_end">Habis Promo</label>
                          <?php 
                          if(!empty($getpromo->endPROMO)){ 
                            $end = str_replace('-', '.', date('d.m.Y',strtotime($getpromo->endPROMO)));
                          } else {
                            $end = $getpromo->endPROMO;
                          }
                          ?>
                          <input class="md-input" name="endPROMO" value="<?php echo $end; ?>" type="text" id="uk_dp_end">
                      </div>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                      <label>Deskripsi Promo</label>
                      <br>
                      <textarea cols="30" rows="4" name="descriptionPROMO" class="md-input label-fixed"><?php echo $getpromo->descriptionPROMO;?></textarea>
                      <p class="text-red"><?php echo form_error('descriptionPROMO'); ?></p>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getpromo->statusPROMO == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusPROMO" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Promo</b></label>
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