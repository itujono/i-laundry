<?php
if($plugins == 'plugins_order'){
?>
<!-- metrics graphics (charts) -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/metrics-graphics/dist/metricsgraphics.css">
<!-- chartist -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/chartist/dist/chartist.min.css">

<?php } elseif ($plugins == 'plugins_editorder') { ?>
<!-- additional styles for plugins -->
<!-- kendo UI -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/kendo-ui/styles/kendo.common-material.min.css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/kendo-ui/styles/kendo.material.min.css" id="kendoCSS"/>

<?php } ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bower_components/uikit/css/uikit.almost-flat.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/assets/css/main.min.css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/assets/css/themes/themes_combined.min.css" media="all">