<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Paket';
    $actions = 'savepackage';
    $controller = 'Package';
    if($getpackage->idPACKAGE != NULL){
       $title1 = 'Perbaharui Paket';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Paket</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Paket</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST PACKAGE -->
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Dibuat</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Dibuat</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
            <?php foreach ($listpackage  as $key => $package) { 
              $id = encode($package->idPACKAGE);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $package->namePACKAGE;?></td>
                <td>Rp. <?php echo number_format($package->pricesPACKAGE, 0, ".", ".");?></td>
                <td><?php echo dF($package->createdatePACKAGE, 'd F Y (H:i:s)');?></td>
                <td><?php echo $package->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($package->statusPACKAGE == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($package->namePACKAGE).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($package->namePACKAGE).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/packagelist/'.urlencode($id);
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
        <!-- END LIST PACKAGE -->

        <!-- START FORM INPUT AREA -->
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Paket</h3>
          <form method="POST" name="formpackage" action="<?php echo $url;?>">
          <?php echo form_hidden('idPACKAGE',encode($getpackage->idPACKAGE),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">
                      <label>Nama Paket</label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="namePACKAGE" required autocomplete value="<?php echo $getpackage->namePACKAGE;?>" />
                        <p class="text-red"><?php echo form_error('namePACKAGE'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3">
                      <label>Harga Paket</label>
                      <br>
                      <input required class="md-input label-fixed" name="pricesPACKAGE" type="number" value="<?php echo $getpackage->pricesPACKAGE;?>" />
                      <p class="text-red"><?php echo form_error('pricesPACKAGE'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getpackage->statusPACKAGE == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusPACKAGE" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Paket</b></label>
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