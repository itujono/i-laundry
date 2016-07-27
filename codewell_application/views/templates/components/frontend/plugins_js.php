<script src="<?php echo base_url();?>assets/frontend/scripts/jquery.js"></script>
<!-- <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script> -->
<script src="<?php echo base_url();?>assets/frontend/scripts/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/frontend/scripts/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>assets/frontend/scripts/responsive.menu.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/scripts/chosen.select.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/scripts/slick.js"></script>
<script src="<?php echo base_url();?>assets/frontend/scripts/bootstrap-slider.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/scripts/echo.js"></script>
<script src="<?php echo base_url();?>assets/frontend/scripts/jquery.prettyPhoto.js"></script>

<script>
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
});
</script>

<script>
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 8000,
         pause: false
     });
});
</script>

<!-- Put all Functions in functions.js -->
<script src="<?php echo base_url();?>assets/frontend/scripts/functions.js"></script>

<script src="<?php echo base_url();?>assets/frontend/scripts/counter.js"></script>  
<script src="<?php echo base_url();?>assets/frontend/scripts/jquery.viewbox.min.js"></script>

<?php
if($plugins == 'detail_listing_car'){
?>
  
<!-- <script src="<?php echo base_url();?>assets/frontend/scripts/responsive.menu.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/scripts/chosen.select.js"></script> 
<script src="<?php echo base_url();?>assets/frontend/scripts/slick.js"></script>
<script src="<?php echo base_url();?>assets/frontend/scripts/bootstrap-slider.js"></script>
<script src="<?php echo base_url();?>assets/frontend/scripts/echo.js"></script> -->
<!-- Put all Functions in functions.js --> 
<!-- <script src="<?php echo base_url();?>assets/frontend/scripts/functions.js"></script> -->

<?php } elseif($plugins == 'post_new_listing') { ?>



<?php
}elseif($plugins == 'plugins_detailpesanan'){
?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>

<?php
}elseif($plugins == 'plugins_dashboard'){
?>

    <?php echo $datatables; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dt_colVis').dataTable({
                "destroy": true,
                "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]],
                "iDisplayLength": 50,
            });
        } );
    </script>


    <!--  =============================================PENTING========================================== -->
    <!-- chartist (charts) -->
    <script src="<?php echo base_url(); ?>assets/bower_components/chartist/dist/chartist.min.js"></script>
    <!-- peity (small charts) -->
    <script src="<?php echo base_url(); ?>assets/bower_components/peity/jquery.peity.min.js"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

    <!-- countUp -->
    <script src="<?php echo base_url(); ?>assets/bower_components/countUp.js/countUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/dashboard.min.js"></script>

    
    
    <!-- COUNTERTIME -->
    <script type="text/javascript">
        var sekarang = '<?php echo $sekarang; ?>';
        var baseurl = '<?php echo base_url().$this->data['folBACKEND'].'orders/orderschangestatusdelivery'; ?>';
    </script> 
    <script src="<?php echo base_url(); ?>assets/default/backend/js/additional/countertime.js"></script>
    <script type="text/javascript">
        setInterval(function() {
            window.location.reload();
        }, 30000); 
    </script>
<?php
}elseif($plugins == 'plugins_merchants'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
    <?php echo $forms_advanced; ?>

    <script type="text/javascript">
        var opt = <?php echo json_encode($this->db->get("pwmi_laparkali_mcategorys")->result()); ?>;
        // adv_selects:function(){
            $("#multiselect").selectize({
                plugins:{remove_button:{label:""}},
                options:opt,
                maxItems:null,
                valueField:"idMCATEGORY",
                labelField:"nmMCATEGORY",
                searchField:"nmMCATEGORY",
                create:!1,
                render:{
                    option:function(t,e){
                        return'<div class="option"><span class="title">'+e(t.nmMCATEGORY)+"</span></div>"
                    },
                    item:function(t,e){
                        return'<div class="item"><a href="'+e(t.idMCATEGORY)+'" target="_blank">'+e(t.nmMCATEGORY)+"</a></div>"
                    }
                },
                onDropdownOpen:function(t){
                    t.hide().velocity("slideDown",
                        {
                            begin:function(){t.css({"margin-top":"0"})},
                            duration:200,easing:easing_swiftOut
                        }
                    )
                },
                onDropdownClose:function(t){
                    t.show().velocity("slideUp",
                        {
                        complete:function(){t.css({"margin-top":""})},
                        duration:200,easing:easing_swiftOut
                        }
                    )
                }
            });

    </script>
    <!-- MODAL RESET PASSWORD MERCHANT -->
    <div class="uk-modal" id="merchID">
        <div class="uk-modal-dialog">
            <?php $attributes = array('class' => 'uk-form-stacked', 'id' => 'form_validation');?>
            <?php echo form_open($this->data['folBACKEND'].'merchants/merchantsreset', $attributes); ?>
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">Reset your password</h3>
            </div>
           <div class="uk-form-row uk-margin-top">
           <input type="hidden" id="idMERCHANT" name="idMERCHANT">
                <label>Sandi Baru</label>
                <?php echo form_password('passMERCHANT','','class="md-input" data-parsley-trigger="change" required'); ?>
            </div>
            <div class="uk-text uk-text-danger"><h6><i>*Minimal 8 Karakter</i></h6></div>
            <div class="uk-form-row uk-margin-top">
                <label>Konfirmasi Sandi Baru</label>
                <?php echo form_password('repassMERCHANT','','data-parsley-trigger="change" class="md-input" required'); ?>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button type="button" class="md-btn md-btn-flat uk-modal-close">Tutup</button>
                <?php echo form_submit('submit','Reset', 'class="md-btn md-btn-danger"'); ?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on("click", ".md-btn2", function () {
            var merchID = $(this).data('id');
            $(".uk-modal-dialog #idMERCHANT").val(merchID);
        });
    </script>
<?php
}elseif($plugins == 'plugins_products'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
<?php
}elseif($plugins == 'plugins_orders'){
?>
    <?php echo $datatables; ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dt_colVis').dataTable({
                "destroy": true,
                "aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
                "iDisplayLength": 100,
            });
        } );
    </script>

    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>

    <!-- COUNTERTIME -->
    <script type="text/javascript">
        var sekarang = '<?php echo $sekarang; ?>';
        var baseurl = '<?php echo base_url().$this->data['folBACKEND'].'orders/orderschangestatusdelivery'; ?>';
    </script> 
    <script src="<?php echo base_url(); ?>assets/default/backend/js/additional/countertime.js"></script>

    <script type="text/javascript">
        function changeStatusOrder(status){
            var id_order = $('#inputidorder').val();
            var address_order = $('#inputaddressorder').val();
            var cancel_reason = $('#inputcancelorder').val();
            var status_order = status;
            $.ajax({
                url : "<?php echo base_url().$this->data['folBACKEND']; ?>orders/orderschangestatus",
                type: "POST",
                data: "id_order=" + id_order + "&address_order=" + address_order + "&status_order=" + status_order + "&cancel_reason=" + cancel_reason,
                dataType: "JSON",

                success: function(result){
                    if (!result) {
                        location.reload();
                    } else {
                        window.location.assign('<?php echo base_url().$this->data['folBACKEND'];?>dashboard');
                    }
                    console.log(result);
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Eror Eror Eror. Just kidding. Click Me again :D');
                    location.reload();
                }
            });
        }
    </script>
<?php
}elseif($plugins == 'plugins_user'){
?>
    <?php echo $datatables; ?>
    <?php echo $forms_advanced; ?>
    <script type="text/javascript">
        var opt = <?php echo json_encode($this->db->get("pwmi_laparkali_region")->result()); ?>;
        // adv_selects:function(){
            $("#multiselect").selectize({
                plugins:{remove_button:{label:""}},
                options:opt,
                maxItems:null,
                valueField:"idREGION",
                labelField:"nmREGION",
                searchField:"nmREGION",
                create:!1,
                render:{
                    option:function(t,e){
                        return'<div class="option"><span class="title">'+e(t.nmREGION)+"</span></div>"
                    },
                    item:function(t,e){
                        return'<div class="item"><a href="'+e(t.idREGION)+'" target="_blank">'+e(t.nmREGION)+"</a></div>"
                    }
                },
                onDropdownOpen:function(t){
                    t.hide().velocity("slideDown",
                        {
                            begin:function(){t.css({"margin-top":"0"})},
                            duration:200,easing:easing_swiftOut
                        }
                    )
                },
                onDropdownClose:function(t){
                    t.show().velocity("slideUp",
                        {
                        complete:function(){t.css({"margin-top":""})},
                        duration:200,easing:easing_swiftOut
                        }
                    )
                }
            });

    </script>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
<?php
}elseif($plugins == 'plugins_region'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>    
<?php
}elseif($plugins == 'plugins_newsletter'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: "textarea",  // change this value according to your HTML
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| example link unlink anchor spellchecker | image media | forecolor backcolor  | print preview | template",
        toolbar3: "styleselect | fontsizeselect",
      plugins: [
                 "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor spellchecker", 
           ]
    });
    </script>
<?php
}elseif($plugins == 'plugins_term'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: "textarea",  // change this value according to your HTML
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| example link unlink anchor spellchecker | image media | forecolor backcolor  | print preview | template",
        toolbar3: "styleselect | fontsizeselect",
      plugins: [
                 "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor spellchecker", 
           ]
    });
    </script>
<?php
}elseif($plugins == 'plugins_privacy'){
?>
    <?php echo $datatables; ?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: "textarea",  // change this value according to your HTML
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| example link unlink anchor spellchecker | image media | forecolor backcolor  | print preview | template",
        toolbar3: "styleselect | fontsizeselect",
      plugins: [
                 "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor spellchecker", 
           ]
    });
    </script>
<?php
} else if ($plugins == 'setting') {
?>
    <script type="text/javascript">
        $('#add-box').click(function(){
            var n = $('.extra').length + 1;
            // var box_html =    $('<div class="extra"> '+
            //                         '<input type="text" name="nameSOSMEDSELLER[]" placeholder="Link Social Media"> '+
            //                         '<input type="text" name="urlSOSMEDSELLER[]" placeholder="Link Social Media"> '+
            //                         '<a href="javascript:void(0)" value="'+n+'" class="remove-box" style="color: black;">Remove</a> '+
            //                     '</div>');

            var box_html =    $('<div class="cs-field-holder extra"> '+
                                    '<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12"> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<label>Name</label> '+
                                        '</div> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<div class="cs-field"> '+
                                                '<input type="text" name="nameSOSMEDSELLER[]" value="" placeholder="Nama Sosial Media"> '+
                                                // '<input type="text" name="urlSOSMEDSELLER[]" placeholder="Link Social Media"> '+
                                                // '<a href="javascript:void(0)" value="'+n+'" class="remove-box" style="color: black;">Remove</a> '+
                                            '</div> '+
                                        '</div> '+
                                    '</div> '+

                                    '<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<label>Url</label> '+
                                        '</div> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<div class="cs-field"> '+
                                                '<input type="text" name="urlSOSMEDSELLER[]" value="" placeholder="Link Sosial Media"> '+
                                                // '<input type="text" name="urlSOSMEDSELLER[]" placeholder="Link Social Media"> '+
                                                // '<a href="javascript:void(0)" value="'+n+'" class="remove-box" style="color: black;">Remove</a> '+
                                            '</div> '+
                                        '</div> '+
                                    '</div> '+
                                    '<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 remove-box"> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<label>Action</label> '+
                                        '</div> '+
                                        '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding=0px;padding: 0px;"> '+
                                            '<div class="cs-field"> '+
                                                // '<input type="text" name="nameSOSMEDSELLER[]" value="" placeholder="Link Social Media"> '+
                                                // '<input type="text" name="urlSOSMEDSELLER[]" placeholder="Link Social Media"> '+
                                                '<a href="javascript:void(0)" value="'+n+'" class="" style="color: black;">Hapus</a> '+
                                            '</div> '+
                                        '</div> '+
                                    '</div> '+
                                    
                                '</div>');
            box_html.hide();
            $('.extra:last').after(box_html);
            box_html.fadeIn('slow');
            return false;
        });
        $('.cardextra').on('click', '.remove-box', function(){   
            // $(this).parent().css( 'background-color', '#FF6C6C' );
            $(this).parent().fadeOut("slow", function() {
                $(this).remove();
            });
            return false;
        });
    </script>
<?php
}elseif($plugins == 'plugins_about'){
?>
    <!--  preloaders functions -->
    <script src="<?php echo base_url(); ?>assets/default/backend/js/pages/components_preloaders.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: "textarea",  // change this value according to your HTML
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolbar2: "| example link unlink anchor spellchecker | image media | forecolor backcolor  | print preview | template",
        toolbar3: "styleselect | fontsizeselect",
      plugins: [
                 "advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak",
                 "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                 "table contextmenu directionality emoticons paste textcolor spellchecker", 
           ]
    });
    </script>
<?php                   
}elseif($plugins == 'plugins_detail_dealer'){
?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').removeClass();
            $('body').addClass('cs-agent-detail wp-automobile');
        } );
    </script>
<?php                   
}else{}
?>
<!-- <script type="text/javascript">
var url = '<?php //echo base_url().$this->data['folBACKEND'].'langlapar/langswitch/' ?>';
</script>-->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> -->
<script type="text/javascript">

// function vehicle_brand(){
//     var idTYPE = {idTYPE:$("#idTYPE").val()};
//          /*dropdown post */
//         $.ajax({
//             type: "POST",
//             url:"<?php echo base_url();?>VehicleSeller/getvehiclecategorybytype",
//             data: idTYPE,
//             dataType:'html',
//             success:function(data){
//             $("#KENHIDE3").hide();
//             $("#KEN3").html(data);
//                 vehicle_variant();
//                 selected_opt();
//             }
//         });
// }

    function vehicle_variant(){
        var idVEHICLEBRAND = {idVEHICLEBRAND:$("#idKENDARAAN2").val()};
        $.ajax({
            type: "POST",
            url:"<?php echo base_url();?>VehicleSeller/getvehiclevariantsbyvehiclebrand",
            data: idVEHICLEBRAND,
            dataType:'html',
            success:function(data){
            $("#KENHIDE3").hide();
            $("#KEN3").html(data);
                selected_opt();
                vehicle_category();
            }
        });
    }

    function vehicle_category(){
        // alert();
        var idVEHICLEVARIANT = {idVEHICLEVARIANT:$("#idKENDARAAN3").val()};
        $.ajax({
            type: "POST",
            url:"<?php echo base_url();?>VehicleSeller/getvehiclecategorybytype",
            data: idVEHICLEVARIANT,
            dataType:'html',
            success:function(data){
            $("#KENHIDE4").hide();
            $("#KEN4").html(data);
                // vehicle_variant();
                // selected_opt();
            }
        });
    }

    $(document).ready(function() {
        $("#idKENDARAAN1").change(function(){
            var idTYPE = {idTYPE:$("#idKENDARAAN1").val()};
             /*dropdown post *///
            $.ajax({
            type: "POST",
            url:"<?php echo base_url();?>VehicleSeller/getbrandbytype",
            data: idTYPE,
            dataType:'html',
            success:function(data){
                $("#KENHIDE2").hide();
                $("#KEN2").html(data);
                vehicle_variant();
                selected_opt();
            }
            });
        });

        // $("#idKENDARAAN2").change(function(){
        //     alert('');
        //     vehicle_variant();
        // });

        // $("#idKENDARAAN3").change(function(){
        //     vehicle_variant();  
        // });
    });

    function selected_opt(){
        var config = {
                    '.chosen-select': {
                        width: "100%"
                    },
                    '.chosen-select-deselect': {
                        allow_single_deselect: true,
                     width: "100%"
                    },
                    '.chosen-select-no-single': {
                        disable_search_threshold: 10,
                     width: "100%"
                    },
                    '.chosen-select-no-results': {
                        no_results_text: 'Oops, nothing found!',
                     width: "100%"
                    },
                    '.chosen-select-width': {
                        width: "100%"
                    }
                }
                for (var selector in config) {
                    $(selector).chosen(config[selector]);
                }
    }
</script>