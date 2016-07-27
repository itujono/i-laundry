<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Buat Jasa';
    $actions = 'savejasa';
    $controller = 'Jasa';
    if($getjasa->idJASA != NULL){
       $title1 = 'Perbaharui Jasa';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Jasa</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Jasa</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <!-- START LIST JASA -->
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
            <?php foreach ($listjasa  as $key => $jasa) { 
              $id = encode($jasa->idJASA);
              ?>
             <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $jasa->nameJASA;?></td>
                <td>Rp. <?php echo number_format($jasa->pricesJASA, 0, ".", ".");?></td>
                <td><?php echo dF($jasa->createdateJASA, 'd F Y (H:i:s)');?></td>
                <td><?php echo $jasa->status;?></td>
                <?php
                 $id2 = '/1';
                 $icn = '&#xE8F4;'; 
                 $nm = 'Aktifkan'; 
                 if($jasa->statusJASA == 1){
                     $id2 = ''; 
                     $icn = '&#xE8F5;';
                     $nm = 'Non Aktifkan';
                 }
                  $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($jasa->nameJASA).'</b> ?';
                  $msg2 = 'Apakah kamu yakin akan merubah data ' . ' <b>'.addslashes($jasa->nameJASA).'</b> ?';
                  $url1 = $this->data['folBACKEND'].$controller.'/actionedit/'.urlencode($id).$id2;
                  $url2 = $this->data['folBACKEND'].$controller.'/jasalist/'.urlencode($id);
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
        <!-- END LIST JASA -->

        <!-- START FORM INPUT AREA -->
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Jasa</h3>
          <form method="POST" name="formjasa" action="<?php echo $url;?>">
          <?php echo form_hidden('idJASA',encode($getjasa->idJASA),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-3">
                      <label>Nama Jasa</label>
                      <br>
                        <input type="text" class="md-input label-fixed" name="nameJASA" required autocomplete value="<?php echo $getjasa->nameJASA;?>" />
                        <p class="text-red"><?php echo form_error('nameJASA'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3">
                      <label>Harga Jasa</label>
                      <br>
                      <input required class="md-input label-fixed" name="pricesJASA" type="number" value="<?php echo $getjasa->pricesJASA;?>" />
                      <p class="text-red"><?php echo form_error('pricesJASA'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-3 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getjasa->statusJASA == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusJASA" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Aktifkan Jasa</b></label>
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