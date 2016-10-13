<?php $data['plugins']=$addONS; ?>
<?php $datas['addons'] = $this->load->view('templates/components/backend/plugins_css', $data ,TRUE); ?>
<?php $this->load->view('templates/components/backend/header', $datas); ?>

<?php $this->load->view('templates/components/backend/navigation'); ?>
<div id="page_content">
    <div id="page_content_inner">

        <?php echo $subview; ?>

    </div>
</div>

<?php $datas['plugins'] = $this->load->view('templates/components/backend/plugins_js', $data ,TRUE); ?>
<?php $this->load->view('templates/components/backend/footer',$datas); ?>