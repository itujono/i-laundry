<script src="<?php echo base_url(); ?>assets/backend/assets/js/common.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/assets/js/uikit_custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/assets/js/altair_admin_common.min.js"></script>

<?php 
$datatables = '
    <script src="'.base_url().'assets/backend/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="'.base_url().'assets/backend/assets/js/custom/datatables_uikit.min.js"></script>
    <script src="'.base_url().'assets/backend/assets/js/pages/plugins_datatables.min.js"></script>
    <script src="'.base_url().'assets/backend/bower_components/datatables-colvis/js/dataTables.colVis.js"></script>
';
$forms_advanced='<script src="'.base_url().'assets/backend/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="'.base_url().'assets/backend/assets/js/pages/forms_advanced.min.js"></script>';
?>

<?php
if($plugins == 'plugins_datatables'){
?>
        
<?php echo $datatables;?>

<!-- datatables tableTools-->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>
<!--  preloaders functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/components_preloaders.min.js"></script>

<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>

<?php echo $forms_advanced;?>
<!-- inputmask-->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
<?php
}elseif($plugins == 'plugins_customer'){
?>

<!-- page specific plugins -->

<!--  contact list functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/page_contact_list.min.js"></script>
<!-- page specific plugins -->
<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>
<?php
}elseif($plugins == 'plugins_pagesettings'){
?>

<!-- page specific plugins -->
<!--  settings functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/page_settings.min.js"></script>
<!-- page specific plugins -->
<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>

<?php
}elseif($plugins == 'plugins_order'){
?>
<?php echo $datatables;?>

<!-- page specific plugins -->
<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>

<!-- chartist (charts) -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/chartist/dist/chartist.min.js"></script>
<!-- peity (small charts) -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/peity/jquery.peity.min.js"></script>
<!-- easy-pie-chart (circular statistics) -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

<!-- countUp -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/countUp.js/countUp.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/dashboard.min.js"></script>

<?php
}elseif($plugins == 'plugins_orderdetail'){
?>
<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>
<?php
}elseif($plugins == 'plugins_editorder'){
?>
<!--  preloaders functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/components_preloaders.min.js"></script>
<!-- ionrangeslider -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/ion.rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- inputmask-->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

<!--  forms advanced functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/forms_advanced.min.js"></script>
<!-- jquery.idle -->
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>
<?php
}elseif($plugins == 'plugins_users'){
?>
<?php echo $datatables;?>
<?php echo $forms_advanced;?>
<!--  preloaders functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/components_preloaders.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>
<!-- MODAL RESET PASSWORD USER -->
<div class="uk-modal" id="userID">
    <div class="uk-modal-dialog">
        <form method="POST" action="<?php echo base_url();?>codewelladmin/user/userreset" class="uk-form-stacked" id="form_validation">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Reset kata sandi kamu</h3>
        </div>
       <input type="hidden" id="idUSER" name="idUSER">
        <div class="uk-form-row uk-margin-top">
            <label>Sandi Baru</label>
            <input required type="password" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal kata sandi 8 karakter' : ''); if(this.checkValidity()) form.repasswordUSER.pattern = this.value;" class="md-input label-fixed" id="passwordUSER"  name="passwordUSER">
        </div>
        <div class="uk-text uk-text-danger uk-margin-bottom"><h6><i>*Minimal 8 Karakter</i></h6></div>

        <div class="uk-form-row uk-margin-top">
            <label>Konfirmasi Sandi Baru</label>
             <input required type="password" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan kata sandi yang sama seperti diatas' : '');" class="md-input label-fixed" id="repasswordUSER" name="repasswordUSER">
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Tutup</button>
            <?php echo form_submit('submit','Reset', 'class="md-btn md-btn-danger" id="show_preloader_md"'); ?>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", ".md-btn2", function () {
        var userID = $(this).data('id');
        $(".uk-modal-dialog #idUSER").val(userID);
    });
</script>
<?php
}elseif($plugins == 'plugins_partners'){
?>
<?php echo $datatables;?>
<?php echo $forms_advanced;?>
<!--  preloaders functions -->
<script src="<?php echo base_url(); ?>assets/backend/assets/js/pages/components_preloaders.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/bower_components/jquery-idletimer/dist/idle-timer.min.js"></script>
<!-- MODAL RESET PASSWORD USER -->
<div class="uk-modal" id="partnerID">
    <div class="uk-modal-dialog">
        <form method="POST" action="<?php echo base_url();?>codewelladmin/partner/partnerreset" class="uk-form-stacked" id="form_validation">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Reset kata sandi kamu</h3>
        </div>
       <input type="hidden" id="idPARTNER" name="idPARTNER">
        <div class="uk-form-row uk-margin-top">
            <label>Sandi Baru</label>
            <input required type="password" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal kata sandi 8 karakter' : ''); if(this.checkValidity()) form.repasswordPARTNER.pattern = this.value;" class="md-input label-fixed" id="passwordPARTNER" name="passwordPARTNER">
        </div>
        <div class="uk-text uk-text-danger uk-margin-bottom"><h6><i>*Minimal 8 Karakter</i></h6></div>

        <div class="uk-form-row uk-margin-top">
            <label>Konfirmasi Sandi Baru</label>
             <input required type="password" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan kata sandi yang sama seperti diatas' : '');" class="md-input label-fixed" id="repasswordPARTNER" name="repasswordPARTNER">
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Tutup</button>
            <?php echo form_submit('submit','Reset', 'class="md-btn md-btn-danger" id="show_preloader_md"'); ?>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).on("click", ".md-btn2", function () {
        var partnerID = $(this).data('id');
        $(".uk-modal-dialog #idPARTNER").val(partnerID);
    });
</script>
<?php                   
}
?>
<script>
    $(function() {
        if(isHighDensity) {
            // enable hires images
            altair_helpers.retina_images();
        }
        if(Modernizr.touch) {
            // fastClick (touch devices)
            FastClick.attach(document.body);
        }
    });
        $window.load(function() {
        // ie fixes
            altair_helpers.ie_fix();
    });
</script>
<script type="text/javascript">
  // append modal to <body>
$body.append('<div class="uk-modal" id="modal_idle">' +
    '<div class="uk-modal-dialog">' +
        '<div class="uk-modal-header">' +
            '<h3 class="uk-modal-title">Sesi aktifitas kamu akan segera berakhir</h3>' +
        '</div>' +
        '<p>Sistem membaca tidak ada aktifitas untuk beberapa saat. Demi keamanan kamu, sistem akan mengeluarkan kamu secara otomatis.</p>' +
        '<p>Klik "Tetap disini" untuk melanjutkan aktifitas kamu.</p>' +
        '<p>Aktifitas kamu akan berakhir pada <span class="uk-text-bold md-color-red-500" id="sessionSecondsRemaining"></span> detik.</p>' +
        '<div class="uk-modal-footer uk-text-right">' +
            '<button id="staySigned" type="button" class="md-btn md-btn-flat uk-modal-close">Tetap disini</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="logoutSession">Keluar</button>' +
        '</div>' +
    '</div>' +
'</div>');

var modal = UIkit.modal("#modal_idle", {
        bgclose: false
    }),
    session = {
        //Logout Settings
        inactiveTimeout: 300000,      //(ms) The time until we display a warning message
        warningTimeout: 60000,      //(ms) The time until we log them out
        minWarning: 5000,           //(ms) If they come back to page (on mobile), The minumum amount, before we just log them out
        warningStart: null,         //Date time the warning was started
        warningTimer: null,         //Timer running every second to countdown to logout
        autologout: {
            logouturl: "<?php echo base_url();?>codewelladmin/User/Logout"
        },
        logout: function () {       //Logout function once warningTimeout has expired
            window.location = session.autologout.logouturl;
        }
    },
    $sessionCounter = $('#sessionSecondsRemaining').html(session.warningTimeout/1000);

$(document).on("idle.idleTimer", function (event, elem, obj) {
    //Get time when user was last active
    var diff = (+new Date()) - obj.lastActive - obj.timeout,
        warning = (+new Date()) - diff;

    //On mobile js is paused, so see if this was triggered while we were sleeping
    if (diff >= session.warningTimeout || warning <= session.minWarning) {
        modal.hide();
    } else {
        //Show dialog, and note the time
        $sessionCounter.html(Math.round((session.warningTimeout - diff) / 1000));
        modal.show();
        session.warningStart = (+new Date()) - diff;

        //Update counter downer every second
        session.warningTimer = setInterval(function () {
            var remaining = Math.round((session.warningTimeout / 1000) - (((+new Date()) - session.warningStart) / 1000));
            if (remaining >= 0) {
                $sessionCounter.html(remaining);
            } else {
                session.logout();
            }
        }, 1000)
    }
});

$body
    //User clicked ok to stay online
    .on('click','#staySigned', function () {
        clearTimeout(session.warningTimer);
        modal.hide();
    })
    //User clicked logout
    .on('click','#logoutSession', function () {
        session.logout();
    });

//Set up the timer, if inactive for 5 seconds log them out
$(document).idleTimer(session.inactiveTimeout);
</script>