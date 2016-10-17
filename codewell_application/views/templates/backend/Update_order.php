<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $actions = 'processeditorder';
    $controller = 'order';
    if($editorder->idORDER != NULL){
       $title1 = 'Update order pelanggan'.' '.$editorder->nameCUSTOMER;
       $title2 = 'Update data'; 
    } 
    $url = base_url().$this->data['folBACKEND'].$controller.'/'.$actions;
?>
<h3 class="heading_b uk-margin-bottom"><?php echo $title1;?> <?php echo $editorder->kodeORDER; ?></h3>
<form class="uk-form-stacked" enctype="multipart/form-data" method="POST" action="<?php echo $url; ?>">
    <?php echo form_hidden('idORDER',encode($editorder->idORDER),'hidden'); ?>
    <?php if (!empty($message)){ ?>
      <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        <h4><?php echo $message['title']; ?></h4>
        <?php echo $message['text']; ?>
      </div>
    <?php } ?>
    <div class="md-card">
        <div class="md-card-content large-padding">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Nama Pelanggan" class="uk-form-label">Nama Pelanggan<span class="req">*</span></label>
                        <input type="text" value="<?php echo $editorder->nameCUSTOMER; ?>" class="md-input" required disabled>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Aroma" class="uk-form-label">Aroma<span class="req">*</span></label>
                    <input type="text" value="<?php echo $editorder->nameAROMA; ?>" class="md-input" required disabled>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Layanan" class="uk-form-label">Jenis Layanan<span class="req">*</span></label>
                        <input type="text" value="<?php echo $editorder->nameSERVICES; ?>" class="md-input" required disabled>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Jenis Paket" class="uk-form-label">Jenis Paket<span class="req">*</span></label>
                    <input type="text" value="<?php echo $editorder->namePACKAGE; ?>" class="md-input" required disabled>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Waktu Jemput" class="uk-form-label">Waktu Jemput<span class="req">*</span></label>
                        <input class="md-input" type="text" value="<?php echo dF($editorder->pickuptimeORDER, 'l, d F Y (H:i:s)');?>" disabled required>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Waktu Antar" class="uk-form-label">Waktu Antar<span class="req">*</span></label>
                    <?php
                        $timedelivery = '';
                        if(!empty($editorder->pickupfinishedtimeORDER))$timedelivery = dF($editorder->pickupfinishedtimeORDER, 'MM/dd/yyyy H:i');
                    ?>
                    <input id="kUI_datetimepicker_basic" name="pickupfinishedtimeORDER" required value="<?php echo $timedelivery;?>">
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Alamat Jemput" class="uk-form-label">Alamat Jemput<span class="req">*</span></label>
                        <textarea cols="30" rows="4" class="md-input" disabled required><?php echo $editorder->pickupADDRESSORDERKOTOR;?></textarea>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Alamat Antar" class="uk-form-label">Alamat Antar<span class="req">*</span></label>
                    <?php
                        $address = '';
                        if(!empty($editorder->pickupADDRESSORDERBERSIH))$address = $editorder->pickupADDRESSORDERBERSIH;
                    ?>
                    <textarea cols="30" rows="4" class="md-input" name="pickupADDRESSORDERBERSIH" required><?php echo $address;?></textarea>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Catatan Order" class="uk-form-label">Catatan Order<span class="req">*</span></label>
                        <textarea cols="30" rows="4" class="md-input" disabled required><?php echo $editorder->notesORDER;?></textarea>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Tanggal Order" class="uk-form-label">Tanggal Order<span class="req">*</span></label>
                    <input class="md-input" type="text" value="<?php echo dF($editorder->createdateORDER, 'l, d F Y (H:i:s)');?>" disabled required>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Berat Order" class="uk-form-label label-fixed">Berat Order<span class="req">*</span></label>
                        <?php
                        $berat = '';
                        if(!empty($editorder->beratORDER))$berat = $editorder->beratORDER;
                        ?>
                        <input type="text" class="md-input" name="beratORDER" required placeholder="2 KG, 4 KG, 6 KG" value="<?php echo $berat;?>" >
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Total Harga" class="uk-form-label">Total Harga<span class="req">*</span></label>
                    <?php
                        $price = '';
                        if(!empty($editorder->priceORDER))$price = $editorder->priceORDER;
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="priceORDER" value="<?php echo $price;?>" />
                </div>
            </div>
            <div class="uk-width-medium-1-1 uk-margin-top">
                   <div class="uk-form-row">
                     <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SIMPAN', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                   </div>
            </div>
        </div>
    </div>
</form>