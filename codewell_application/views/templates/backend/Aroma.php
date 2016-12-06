<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Aroma';
    $actions = 'savearoma';
    $controller = 'Aroma';
    if($getaroma->idAROMA != NULL){
       $title1 = 'Perbaharui Aroma';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Aroma</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Aroma</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST SERVICES -->
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Daerah</th>
                  <th>Dibuat</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Daerah</th>
                <th>Dibuat</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($listaroma  as $key => $aroma) { 
              $id = encode($aroma->idAROMA);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $aroma->nameAROMA;?></td>
                <td><?php echo $aroma->nameREGION;?></td>
                <td><?php echo dF($aroma->createdateAROMA, 'd F Y (H:i:s)');?></td>
                <td><?php echo $aroma->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($aroma->statusAROMA == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($aroma->nameAROMA).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($aroma->nameAROMA).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/aromalist/'.urlencode($id);
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
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Aroma</h3>
          <form method="POST" name="formservices" action="<?php echo $url;?>">
          <?php echo form_hidden('idAROMA',encode($getaroma->idAROMA),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3 uk-margin-top">
                      <label>Nama Aroma <span class="req">*</span></label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="nameAROMA" required autocomplete value="<?php echo $getaroma->nameAROMA;?>" />
                        <p class="text-red"><?php echo form_error('nameAROMA'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3 uk-margin-top">
                      <label for="Partner" class="uk-form-label">Daerah <span class="req">*</span></label>
                      <?php echo form_dropdown('idREGION', $listregion, $getaroma->idREGION,'data-md-selectize data-md-selectize-bottom required'); ?> 
                    </div>
                    <div class="uk-width-medium-1-3 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getaroma->statusAROMA == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusAROMA" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Aroma</b></label>
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