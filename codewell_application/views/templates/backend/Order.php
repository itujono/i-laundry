<!-- statistics (small charts) -->
<div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
    <div>
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                <span class="uk-text-muted uk-text-small">Order Dalam Proses</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                <span class="uk-text-muted uk-text-small">Proses Baju dicuci </span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                <span class="uk-text-muted uk-text-small">Order tunggu pembayaran </span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data">64/100</span></div>
                <span class="uk-text-muted uk-text-small">Order Selesai</span>
                <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>64</noscript></span>%</h2>
            </div>
        </div>
    </div>
</div>
<h4 class="heading_a uk-margin-bottom">Individual column searching</h4>
<div class="md-card uk-margin-medium-bottom">
    <div class="md-card-content">
        <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>No. Order</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Lihat Order</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>No. Order</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Lihat Order</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($orderlist as $key => $order) {
                $id = encode($order->idORDER);
            ?>
            <tr>
                <td><?php echo $key+1;?></td>
                <td><?php echo $order->nameCUSTOMER;?></td>
                <td><?php echo $order->kodeORDER;?></td>
                <td><?php echo $order->createdateORDER;?></td>
                <td><?php echo $order->status;?></td>
                <td><a href="<?php echo base_url();?>codewelladmin/Order/detail/<?php echo $id;?>/<?php echo $order->kodeORDER;?>">Lihat detail</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>