// Initialize your app
var myApp = new Framework7({
    animateNavBackIcon: true,
    // Enable templates auto precompilation
    precompileTemplates: true,
    // Enabled pages rendering using Template7
	swipeBackPage: false,
	swipePanelOnlyClose: true,
	pushState: true,
    template7Pages: true
});

var calendarDefault = myApp.calendar({
    input: '#calendar-default',
});

var $$ = Dom7;

$$('.confirm-order').on('click', function () {
    myApp.confirm('Are you sure?', 'Custom Title', 
      function () {
        myApp.alert('You clicked Ok button');
      },
      function () {
        myApp.alert('You clicked Cancel button');
      }
    );
});   

// Export selectors engine
var $$ = Dom7;

// Add main View
var mainView = myApp.addView('.view-main', {
    // Enable dynamic Navbar
    dynamicNavbar: false,
});
var subnaview = myApp.addView('.view-subnav');

$(document).ready(function() {
        circlemenu();
		$("#RegisterForm").validate();
		$("#LoginForm").validate();
		$("#ForgotForm").validate();
		$(".close-popup").click(function() {					  
			$("label.error").hide();
		});
});
 

myApp.onPageInit('index', function (page) {
		circlemenu();
})

$$(document).on('pageInit', function (e) {
		$("#RegisterForm").validate();
		$("#LoginForm").validate();
		$("#ForgotForm").validate();
		$(".close-popup").click(function() {					  
			$("label.error").hide();
		});

		 
		var calendarDefault = myApp.calendar({
		    input: '#calendar-default',
		    monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus' , 'September' , 'Oktober', 'November', 'Desember'],
		    dayNames: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
		    dateFormat: 'DD,dd MM yyyy'
		});

		var today = new Date();
		 
		var pickerInline = myApp.picker({
		    input: '#picker-date',
		    container: '#picker-date-container',
		    toolbar: false,
		    rotateEffect: true,
		 
		    value: [today.getMonth(), today.getDate(), today.getFullYear(), today.getHours(), (today.getMinutes() < 10 ? '0' + today.getMinutes() : today.getMinutes())],
		 
		    onChange: function (picker, values, displayValues) {
		        var daysInMonth = new Date(picker.value[2], picker.value[0]*1 + 1, 0).getDate();
		        if (values[1] > daysInMonth) {
		            picker.cols[1].setValue(daysInMonth);
		        }
		    },
		 
		    formatValue: function (p, values, displayValues) {
		        return displayValues[0] + ' ' + values[1] + ', ' + values[2] + ' ' + values[3] + ':' + values[4];
		    },
		 
		    cols: [
		        // Months
		        {
		            values: ('0 1 2 3 4 5 6 7 8 9 10 11').split(' '),
		            displayValues: ('January February March April May June July August September October November December').split(' '),
		            textAlign: 'left'
		        },
		        // Days
		        {
		            values: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
		        },
		        // Years
		        {
		            values: (function () {
		                var arr = [];
		                for (var i = 1950; i <= 2030; i++) { arr.push(i); }
		                return arr;
		            })(),
		        },
		        // Space divider
		        {
		            divider: true,
		            content: '  '
		        },
		        // Hours
		        {
		            values: (function () {
		                var arr = [];
		                for (var i = 0; i <= 23; i++) { arr.push(i); }
		                return arr;
		            })(),
		        },
		        // Divider
		        {
		            divider: true,
		            content: ':'
		        },
		        // Minutes
		        {
		            values: (function () {
		                var arr = [];
		                for (var i = 0; i <= 59; i++) { arr.push(i < 10 ? '0' + i : i); }
		                return arr;
		            })(),
		        }
		    ]
		});         
					
		$$('.alert-email_confirmation').on('click', function () {
		    myApp.alert('Email kamu sudah berhasil dikonfirmasi', 'Selamat!');
		});

		$$('.alert-logout').on('click', function () {
		    myApp.alert('Kamu sudah logout dari i-Laundry', 'Sampai jumpa!');
		});

		$$('.alert-register').on('click', function () {
		    myApp.alert('Silakan cek inbox email kamu untuk konfirmasi akun', 'Sukses!');
		});

		$$('.alert-profile_update').on('click', function () {
		    myApp.alert('Profile kamu berhasil diupdate', 'Sukses!');
		});

		$$('.alert-password_change').on('click', function () {
		    myApp.alert('Password kamu sudah diubah', 'Berhasil!');
		});

		$$('.alert-forgot').on('click', function () {
		    myApp.alert('Kami sudah mengirimkan link untuk mereset password kamu. Silakan cek inbox email', 'Email terkirim');
		});
})

myApp.onPageInit('music', function (page) {
		  audiojs.events.ready(function() {
			var as = audiojs.createAll();
		  });
})
myApp.onPageInit('videos', function (page) {
		  $(".videocontainer").fitVids();
})
myApp.onPageInit('contact', function (page) {
		$("#ContactForm").validate({
		submitHandler: function(form) {
		ajaxContact(form);
		return false;
		}
		});	
})
myApp.onPageInit('blog', function (page) {
 
		$(".posts li").hide();	
		size_li = $(".posts li").size();
		x=4;
		$('.posts li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('.posts li:lt('+x+')').show();
			if(x == size_li){
				$('#loadMore').hide();
				$('#showLess').show();
			}
		});

})

myApp.onPageInit('shop', function (page) {
			
		$('.qntyplusshop').click(function(e){
									  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").click(function(e) {
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});	
  
})
myApp.onPageInit('shopitem', function (page) {
		$(".swipebox").swipebox();	
		$('.qntyplusshop').click(function(e){
									  
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal)) {
				$('input[name='+fieldName+']').val(currentVal + 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
			
		});
		$(".qntyminusshop").click(function(e) {
			e.preventDefault();
			var fieldName = $(this).attr('field');
			var currentVal = parseInt($('input[name='+fieldName+']').val());
			if (!isNaN(currentVal) && currentVal > 0) {
				$('input[name='+fieldName+']').val(currentVal - 1);
			} else {
				$('input[name='+fieldName+']').val(0);
			}
		});	
  
})
myApp.onPageInit('cart', function (page) {
			
    $('.item_delete').click(function(e){
        e.preventDefault();
        var currentVal = $(this).attr('id');
        $('div#'+currentVal).fadeOut('slow');
    });
  
})
myApp.onPageInit('photos', function (page) {
	$(".swipebox").swipebox();
	$("a.switcher").bind("click", function(e){
		e.preventDefault();
		
		var theid = $(this).attr("id");
		var theproducts = $("ul#photoslist");
		var classNames = $(this).attr('class').split(' ');
		
		
		if($(this).hasClass("active")) {
			// if currently clicked button has the active class
			// then we do nothing!
			return false;
		} else {
			// otherwise we are clicking on the inactive button
			// and in the process of switching views!

  			if(theid == "view13") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_13_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_12");
				theproducts.addClass("photo_gallery_13");

			}
			
			else if(theid == "view12") {
				$(this).addClass("active");
				$("#view11").removeClass("active");
				$("#view11").children("img").attr("src","images/switch_11.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_12_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_11");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_12");

			} 
			else if(theid == "view11") {
				$("#view12").removeClass("active");
				$("#view12").children("img").attr("src","images/switch_12.png");
				
				$("#view13").removeClass("active");
				$("#view13").children("img").attr("src","images/switch_13.png");
			
				var theimg = $(this).children("img");
				theimg.attr("src","images/switch_11_active.png");
			
				// remove the list class and change to grid
				theproducts.removeClass("photo_gallery_12");
				theproducts.removeClass("photo_gallery_13");
				theproducts.addClass("photo_gallery_11");

			} 
			
		}

	});	
})
