<?php $data['plugins']=$addONS; ?>
<?php 
if(!isset($footer))$footer = '';
$data['footer']=$footer; 

?>
<?php $datas['addons'] = $this->load->view('templates/default/component/frontend/plugins_css', $data ,TRUE); ?>
<?php $this->load->view('templates/default/component/frontend/header', $datas); ?>

	<?php echo $subview; ?>

<?php $datas['plugins'] = $this->load->view('templates/default/component/frontend/plugins_js', $data ,TRUE); ?>
<?php $this->load->view('templates/default/component/frontend/footer',$datas); ?>