$(document).ready(function() {
	$$('.confirm-logout').on('click', function () {
	    myApp.confirm('Yakin mau logout nih?', 'Logout', function () {
	        //myApp.alert('You clicked Ok button');
	        window.location = "customer/logout";
	    });
	});
	$$('.confirm-save').on('click', function () {
	    myApp.confirm('Sudah yakin dengan data yang dimasukkan?', 'Ubah profile', function () {
	        myApp.alert('You clicked Ok button');
	    });
	});
});

$(document).ready(function() {
    $(".notif").on("click", function() {
      $(this).removeClass("animated slideInDown");
      $(this).addClass("animated slideOutUp");
    });
});