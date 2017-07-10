
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
<form class="uk-form-stacked" method="POST" action="<?php echo $url; ?>">
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
            <div class="uk-width-medium-1-1 uk-margin-top">
                <label for="Tanggal Order" class="uk-form-label">Tanggal Order<span class="req">*</span></label>
                <input class="md-input" type="text" value="<?php echo dF($editorder->createdateORDER, 'l, d F Y (H:i:s)');?>" disabled required>
            </div>
        </div>
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
                <?php
                    if($this->session->userdata('roleUSER') == 22){
                ?>
                <div class="uk-width-medium-1-1 uk-margin-top">
                    <label for="Partner" class="uk-form-label">Partner<span class="req">*</span></label>
                    <?php echo form_dropdown('idPARTNER', $partner, $editorder->idPARTNER,'required data-md-selectize data-md-selectize-bottom'); ?> 
                </div>
                <?php } else { ?>
                    <?php echo form_hidden('idPARTNER', $editorder->idPARTNER,'required'); ?>
                <?php } ?>
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
                    <label for="Waktu Jemput" class="uk-form-label">Waktu Jemput<span class="req">*</span></label>
                    <?php
                        $pickuptimedelivery = '';
                        if(!empty($editorder->pickuptimeORDER))$pickuptimedelivery = $editorder->pickuptimeORDER;
                    ?>
                    <input class="md-input" disabled="disabled" type="text" name="pickuptimeORDER" id="uk_tp_1" data-uk-timepicker value="<?php echo $pickuptimedelivery;?>">
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Tanggal jemput" class="uk-form-label">Tanggal Jemput<span class="req">*</span></label>
                    <?php
                        if($editorder->pickupdateORDER != '0000-00-00') {
                    ?>
                    <input class="md-input" disabled="disabled" type="text" id="uk_dp_1" name="pickupdateORDER" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo $editorder->pickupdateORDER;?>">
                    <?php } else { ?>
                    <input class="md-input" type="text" id="uk_dp_1" name="pickupdateORDER" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo date("Y-m-d");?>">
                    <?php } ?>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Waktu Antar" class="uk-form-label">Waktu Antar<span class="req">*</span></label>
                    <?php
                        $disa = '';
                        if($this->session->userdata('roleUSER') == 22)$disa = 'disabled';
                    ?>
                    <input class="md-input" type="text" name="pickupfinishedtimeORDER" id="uk_tp_1" data-uk-timepicker value="<?php echo $editorder->pickupfinishedtimeORDER;?>" <?php echo $disa;?>>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Waktu Antar" class="uk-form-label">Tanggal Antar<span class="req">*</span></label>
                    <?php
                        $finish = $editorder->pickupfinisheddateORDER;
                        if($editorder->pickupfinisheddateORDER == '0000-00-00')$finish = date('Y-m-d');
                        $disa = '';
                        if($this->session->userdata('roleUSER') == 22)$disa = 'disabled';
                    ?>
                    <input class="md-input" type="text" id="uk_dp_1" name="pickupfinisheddateORDER" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?php echo $finish;?>" <?php echo $disa;?>>
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
                        $disa = '';
                        if($this->session->userdata('roleUSER') == 22)$disa = 'disabled';
                    ?>
                    <textarea cols="30" rows="4" class="md-input" name="pickupADDRESSORDERBERSIH" <?php echo $disa;?>><?php echo $address;?></textarea>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Catatan Order" class="uk-form-label">Catatan Order<span class="req">*</span></label>
                        <textarea cols="30" rows="4" class="md-input" disabled required><?php echo $editorder->notesORDER;?></textarea>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Berat Order" class="uk-form-label label-fixed">Berat Order<span class="req">*</span></label>
                        <?php
                        $berat = '';
                        if(!empty($editorder->beratORDER))$berat = $editorder->beratORDER;
                        $disa = '';
                        if($this->session->userdata('roleUSER') == 22)$disa = 'disabled';
                        ?>
                        <input type="text" class="md-input" name="beratORDER" placeholder="2 KG, 4 KG, 6 KG" value="<?php echo $berat;?>" <?php echo $disa;?>>
                    </div>
                </div>
                <div class="uk-width-medium-1-2 uk-margin-top">
                    <label for="Total Harga" class="uk-form-label">Total Harga<span class="req">*</span></label>
                    <?php
                        $price = '';
                        if(!empty($editorder->priceORDER))$price = $editorder->priceORDER;
                        $disa = '';
                        if($this->session->userdata('roleUSER') == 22)$disa = 'disabled';
                    ?>
                    <input class="md-input masked_input label-fixed" id="masked_currency" type="text" data-inputmask="'alias': 'currency', 'groupSeparator': '.', 'autoGroup': true, 'digits': 0, 'digitsOptional': false, 'prefix': 'Rp. ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" name="priceORDER" value="<?php echo $price;?>" <?php echo $disa;?>>
                </div>
            </div>
            <?php
                if($this->session->userdata('roleUSER') == 26){
                    $disabled = '';
                } else {
                    $disabled = 'disabled';
                }
            ?>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                        <label for="Alasan Pembatalan" class="uk-form-label">Alasan Pembatalan<span class="req">*</span></label>
                        <textarea cols="30" rows="4" name="rejectedmessagesORDER" class="md-input" <?php echo $disabled;?>><?php echo $editorder->rejectedmessagesORDER;?></textarea>
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
</form>