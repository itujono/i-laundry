<div class="pages">
     <div data-page="history" class="page no-toolbar no-navbar">
          <div class="page-content">
               <?php
                if (!empty($message)){
              ?>
                <div class="notif animated slideInDown">
                  <div class="msg">
                    <p><?php echo $message['text'];?></p>
                  </div>
                  <div class="dismissable">
                    <a href="#">Dismiss</a>
                  </div>
                </div>
              <?php } ?>
          	<div class="navbarpages graybg">
                    <div class="navbar_left">
                         <div class="logo_image">
                             <a href="<?php echo base_url();?>Home"><img src="<?php echo base_url().$this->data['asfront']; ?>images/logo_image.png" alt="" title=""/>
                         </div>
                    </div>
                    <a href="#" data-panel="right" class="open-panel">
                         <div class="navbar_right whitebg">
                             <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/user.png" alt="" title="" />
                         </div>
                    </a>                     
               </div>
     
               <div id="pages_maincontent">
                    <h2 class="page_title">Histori Pemesanan</h2>
                    <div class="page_single layout_fullwidth_padding">
                         <div class="history-title">
                             <h2>Histori Pemesanan</h2>
                             <p>Semua daftar histori pemesanan kamu ada di sini.</p>
                         </div>
                         <ul class="history-detailed">
                            <?php if(!empty($order)){
                            foreach ($order as $key => $value) { ?>
                              <li>
                                   <div class="small-detail">
                                        <h4><?php echo dF($value->createdateORDER, 'l, d F Y');?> <span>/</span> <?php echo dF($value->createdateORDER, 'H.i');?> <span>/</span> <b>#<?php echo $value->kodeORDER;?></b></h4>
                                        <ul>
                                         <li class="half">
                                            <h5>Jam Ambil Baju</h5>
                                            <p><?php echo dF($value->pickuptimeORDER, 'd F Y, H.i');?></p>
                                          </li>
                                         <li class="half">
                                            <h5>Jam Antar Baju</h5>
                                            <p><?php echo dF($value->pickupfinishedtimeORDER, 'd F Y, H.i');?></p>
                                         </li> 
                                         <li class="half">
                                              <h5>Paket</h5>
                                              <p><?php echo $value->namePACKAGE;?></p>
                                         </li>
                                         <li class="half">
                                              <h5>Aroma</h5>
                                              <?php 
                                                if(!empty($value->nameAROMA)){
                                                  $aroma = $value->nameAROMA;
                                                } else {
                                                  $aroma = '-';
                                                }
                                              ?>
                                              <p><?php echo $aroma;?></p>
                                         </li>
                                         <?php
                                          if($value->addressCUSTOMER == $value->pickupADDRESSORDERKOTOR){
                                            $address = '<li class="half">
                                                              <h5>Alamat</h5>
                                                              <p>'.$value->addressCUSTOMER;'</p>
                                                            </li>';
                                          } else {
                                            $address = '<li class="half">
                                                              <h5>Alamat</h5>
                                                              <p>'.$value->pickupADDRESSORDERKOTOR;'</p>
                                                            </li>';
                                          }
                                         ?>
                                         <?php echo $address;?>
                                         <li class="half">
                                              <h5>Alamat Antar</h5>
                                              <p><?php echo $value->pickupADDRESSORDERBERSIH;?></p>
                                         </li>
                                         <li class="half">
                                              <h5>Pembayaran</h5>
                                              <p><?php echo $value->namePAYMENT;?></p>
                                         </li>
                                         <li class="half">
                                              <h5>Catatan</h5>
                                              <p><?php echo $value->notesORDER;?></p>
                                         </li>
                                         <!-- <li class="half">
                                              <h5>Kurir</h5>
                                              <p>Sumarno</p>
                                         </li> -->
                                         <li class="half">
                                              <h5>Status</h5>
                                              <p><?php echo $value->status;?></p>
                                         </li>
                                         <li class="price">
                                              <h5>Total harga</h5>
                                              <p>Rp. <?php echo number_format($value->priceORDER, 0, ".", ".");?></p>
                                         </li>
                                        </ul>
                                   </div>
                              </li>
                            <?php
                              }
                            }
                            ?>
                         </ul>

                         <div class="back-to-home">
                            <a href="<?php echo base_url();?>Home">
                                <img src="<?php echo base_url().$this->data['asfront']; ?>images/icons/black/back.png"> Kembali ke Home
                            </a>
                        </div>
                        
                    </div> <!-- kelar isi content utama -->

               </div> <!-- kelar Page Maincontent -->
          </div>
     </div> <!-- kelar data-page History -->
</div>