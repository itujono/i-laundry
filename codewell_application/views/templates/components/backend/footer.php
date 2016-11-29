<!-- google web fonts -->
<script>
    WebFontConfig = {
        google: {
            families: [
            'Source+Code+Pro:400,700:latin',
            'Roboto:400,300,500,700,400italic:latin'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<?php echo $plugins; ?>
<script>
   setInterval(function(){
        $("#notif_count").load('<?php echo base_url();?>codewelladmin/order/countunreadorder')
    }, 5000);
   setInterval(function(){
        $("#load_unread").load('<?php echo base_url();?>codewelladmin/order/unreadorder')
    }, 5000);
</script>
</body>
</html>