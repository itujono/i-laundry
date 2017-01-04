<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $title1 = 'Brute Force Attack';
    $controller = 'Brute';
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
        <li class="uk-width-1-1 uk-active"><a href="#"><?php echo $title1;?></a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama login</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
              </tr>
            </thead>

            <tfoot>
              <tr>
                <th>No.</th>
                <th>Nama login</th>
                <th>Waktu</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
            <?php 
            if(!empty($listbrute)){
              foreach ($listbrute  as $key => $brute) { 
                $id = encode($brute->idUSER);
                ?>
               <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $brute->emailUSER;?></td>
                  <td><?php echo date('l, d F Y - H:i:s', $brute->timeATTEMPTS);?></td>
                  <?php
                   $icn = '&#xE872;'; 
                   $nm = 'Menghapus';

                    $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($brute->emailUSER).'</b> ?';
                    $url1 = $this->data['folBACKEND'].$controller.'/deletedata/'.urlencode($id);
                  ?>
                  <td class="uk-text-center">
                    <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icn; ?></i></a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>

            <?php 
            if(!empty($listbrutepartner)){
              foreach ($listbrutepartner  as $key => $brutepartner) { 
                $id = encode($brutepartner->idPARTNER);
                ?>
               <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $brutepartner->emailPARTNER;?></td>
                  <td><?php echo date('l, d F Y - H:i:s', $brutepartner->timeATTEMPTS);?></td>
                  <?php
                   $icn = '&#xE872;'; 
                   $nm = 'Menghapus';

                    $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($brutepartner->emailPARTNER).'</b> ?';
                    $url1 = $this->data['folBACKEND'].$controller.'/deletedatapartner/'.urlencode($id);
                  ?>
                  <td class="uk-text-center">
                    <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons uk-text-danger"><?php echo $icn; ?></i></a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>

             <?php 
            if(!empty($listbrutecustomer)){
              foreach ($listbrutecustomer  as $key => $brutecustomer) { 
                $id = encode($brutecustomer->idCUSTOMER);
                ?>
               <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $brutecustomer->emailCUSTOMER;?></td>
                  <td><?php echo date('l, d F Y - H:i:s', $brutecustomer->timeATTEMPTS);?></td>
                  <?php
                   $icn = '&#xE872;'; 
                   $nm = 'Menghapus';

                    $msg1 = 'Apakah kamu yakin akan '.$nm.' <b>'.addslashes($brutecustomer->emailCUSTOMER).'</b> ?';
                    $url1 = $this->data['folBACKEND'].$controller.'/deletedatacustomer/'.urlencode($id);
                  ?>
                  <td class="uk-text-center">
                    <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons uk-text-primary"><?php echo $icn; ?></i></a>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
            </tbody>
          </table>
        </li>
        <!-- END LIST SERVICES -->
      </ul>
    </div>
  </div>
</div>