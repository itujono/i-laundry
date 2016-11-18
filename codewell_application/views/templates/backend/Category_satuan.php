<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Kategori Satuan Harga';
    $actions = 'savecategorysatuan';
    $controller = 'Category_satuan';
    if($getcatsatuan->idCATEGORYSATUAN != NULL){
       $title1 = 'Perbaharui Kategori Satuan Harga';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Kategori Satuan Harga</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Kategori Satuan Harga</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
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
            <?php foreach ($listcatsatuan  as $key => $catsatuan) { 
              $id = encode($catsatuan->idCATEGORYSATUAN);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $catsatuan->nameCATEGORYSATUAN;?></td>
                <td><?php echo dF($catsatuan->createdateCATEGORYSATUAN, 'd F Y (H:i:s)');?></td>
                <td><?php echo $catsatuan->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($catsatuan->statusCATEGORYSATUAN == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($catsatuan->nameCATEGORYSATUAN).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($catsatuan->nameCATEGORYSATUAN).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/categorysatuanlist/'.urlencode($id);
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
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Kategori Satuan</h3>
          <form method="POST" name="formSATUAN" action="<?php echo $url;?>">
          <?php echo form_hidden('idCATEGORYSATUAN',encode($getcatsatuan->idCATEGORYSATUAN),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                      <label>Nama Kategori Satuan</label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="nameCATEGORYSATUAN" required autocomplete value="<?php echo $getcatsatuan->nameCATEGORYSATUAN;?>" />
                        <p class="text-red"><?php echo form_error('nameCATEGORYSATUAN'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getcatsatuan->statusCATEGORYSATUAN == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusCATEGORYSATUAN" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Kategori Satuan</b></label>
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
      </ul>
    </div>
  </div>
</div>