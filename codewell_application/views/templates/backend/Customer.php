<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
	<?php if (!empty($message)){ ?>
      <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        <h4><?php echo $message['title']; ?></h4>
        <?php echo $message['text']; ?>
      </div>
  <?php } ?>
	<h3 class="heading_b uk-margin-bottom">Daftar Customer</h3>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content">
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <label for="contact_list_search">Cari... (min 3 char.)</label>
                    <input class="md-input" type="text" id="contact_list_search"/>
                </div>
            </div>
        </div>
    </div>
    <h3 class="heading_b uk-text-center grid_no_results" style="display:none">Tidak ada data yang cocok</h3>
    <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-5 hierarchical_show" id="contact_list">
    	<?php 
    	if(!empty($listcustomer)){
    	foreach ($listcustomer as $key => $customer) { 
    		if($customer->genderCUSTOMER == 1)$gender = 'Lelaki';
    		else $gender = 'Perempuan';
    	?>
	    <div data-uk-filter="<?php echo $customer->nameCUSTOMER;?>,<?php echo $customer->addressCUSTOMER;?>,<?php echo $customer->emailCUSTOMER;?>">
	        <div class="md-card md-card-hover">
	            <div class="md-card-head <?php echo $customer->status;?>">
	                <!-- <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
	                    <i class="md-icon material-icons">&#xE5D4;</i>
	                    <div class="uk-dropdown uk-dropdown-small">
	                        <ul class="uk-nav">
	                            <li><a href="#">Edit</a></li>
	                            <li><a href="#">Remove</a></li>
	                        </ul>
	                    </div>
	                </div> -->
	                <div class="uk-text-center">
	                    <img class="md-card-head-avatar" src="<?php echo $customer->imageSELLER;?>" alt=""/>
	                </div>
	                <h3 class="md-card-head-text uk-text-center md-color-white">
	                    <?php echo $customer->nameCUSTOMER;?>
	                    <span class="uk-text-truncate"><?php echo $customer->emailCUSTOMER;?></span>
	                </h3>
	            </div>
	            <div class="md-card-content">
	                <ul class="md-list">
	                	<li>
	                        <div class="md-list-content">
	                            <span class="md-list-heading">Jenis Kelamin</span>
	                            <span class="uk-text-small uk-text-muted"><?php echo $gender;?></span>
	                        </div>
	                    </li>
	                    <li>
	                        <div class="md-list-content">
	                            <span class="md-list-heading">Alamat</span>
	                            <span class="uk-text-small uk-text-muted"><?php echo $customer->addressCUSTOMER;?></span>
	                        </div>
	                    </li>
	                    <li>
	                        <div class="md-list-content">
	                            <span class="md-list-heading">Telepon &amp; Handphone</span>
	                            <span class="uk-text-small uk-text-muted uk-text-truncate">
	                            +62&nbsp;<?php echo $customer->telephoneCUSTOMER;?><br>
	                            +62&nbsp;<?php echo $customer->mobileCUSTOMER;?></span>
	                        </div>
	                    </li>
	                    <li>
	                        <div class="md-list-content">
	                            <span class="md-list-heading">Terdaftar pada</span>
	                            <span class="uk-text-small uk-text-muted"><?php echo dF($customer->createdateCUSTOMER, 'd F Y (H:i:s)');?></span>
	                        </div>
	                    </li>
	                    <li>
	                        <div class="md-list-content">
	                            <span class="md-list-heading">Diperbaharui pada</span>
	                            <span class="uk-text-small uk-text-muted"><?php echo dF($customer->updatedateCUSTOMER, 'd F Y (H:i:s)');?></span>
	                        </div>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
		<?php } 
			  } else { ?>
			  <h3 class="heading_b uk-text-center grid_no_results" style="display:none">Belum ada Customer yang mendaftar</h3>
		<?php } ?>
	</div>