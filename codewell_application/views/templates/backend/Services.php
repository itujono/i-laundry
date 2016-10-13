<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Layanan';
    $actions = 'saveservices';
    $controller = 'Services';
    if($getservices->idSERVICES != NULL){
       $title1 = 'Perbaharui Layanan';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Layanan</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Layanan</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST SERVICES -->
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Dibuat</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Dibuat</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($listservices as $key => $services) { 
              $id = encode($services->idSERVICES);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $services->nameSERVICES;?></td>
                <td><?php echo dF($services->createdateSERVICES, 'd F Y (H:i:s)');?></td>
                <td><?php echo $services->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($services->statusSERVICES == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($services->nameSERVICES).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($services->nameSERVICES).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/serviceslist/'.urlencode($id);
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
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Layanan</h3>
          <form method="POST" name="formservices" action="<?php echo $url;?>">
          <?php echo form_hidden('idSERVICES',encode($getservices->idSERVICES),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                      <label>Nama Layanan</label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="nameSERVICES" required autocomplete value="<?php echo $getservices->nameSERVICES;?>" />
                        <p class="text-red"><?php echo form_error('nameSERVICES'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getservices->statusSERVICES == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusSERVICES" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Layanan</b></label>
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