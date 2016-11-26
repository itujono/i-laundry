"use strict";

/*===============================================*/
/* APP INIT                                          */
/*===============================================*/
var myApp = new Framework7({
    material: true,
    init: false,
    swipePanel: "left"
});

/*===============================================*/
/* EXPORT SELECTORS ENGINE                          */
/*===============================================*/
var $$ = Dom7;

/*===============================================*/
/* ADD VIEW                                           */
/*===============================================*/
var mainView = myApp.addView(".view-main", {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true
});

/*=========================================================*/
/* SHOW/HIDE PRELOADER FOR REMOTE AJAX LOADED PAGES           */
/*=========================================================*/
$$(document).on("ajaxStart", function (e) {
    myApp.showIndicator();
});
$$(document).on("ajaxComplete", function () {
    myApp.hideIndicator();
});

/*==================================================================*/
/* PAGE INIT : HERE, YOU CAN WRITE YOUR CUSTOM JAVASCRIPT/JQUERY    */
/*==================================================================*/
$$(document).on("pageInit", function (e) {
    /* SLIDE SLICK */
    /*================================*/
    var slickOpts = {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: "15px",
        adaptiveHeight: true
    };
    $("#walkthrough-items").slick(slickOpts);

    /* CALENDAR */
   /*================================*/
    var calendarDefault = myApp.calendar({
        input: "#calendar-default"
    });
    var pickerDescribe = myApp.picker({
        input: "#picker-time",
        rotateEffect: true,
        cols: [
            {
                textAlign: "left",
                values: (function () {
                    var arr = [];
                    for (var i = 1; i <= 23; i++) { arr.push(i); }
                    return arr;
                })(),
            },
            {
                divider: true,
                content: ':'
            },
            {
                values: (function () {
                    var arr = [];
                    for (var i = 0; i <= 59; i++) { arr.push(i < 10 ? '0' + i : i); }
                    return arr;
                })(),
            }
        ]
    });

    var pickerDaerah = myApp.picker({
        input: '#picker-daerah',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'center',
                values: ['Batam Kota', 'Batu Aji', 'Batu Ampar', 'Belakang Padang', 'Bengkong', 'Bulang', 'Galang', 'Lubuk Baja', 'Nongsa', 'Sagulung', 'Sekupang', 'Sungai Beduk']
            }
        ]
    });

    var pickerPaket = myApp.picker({
        input: '#picker-paket',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'center',
                values: ['Reguler', 'Premium', 'Express - 5 jam selesai', 'Premium Express - 5 jam selesai']
            }
        ]
    });

    var pickerAroma = myApp.picker({
        input: '#picker-aroma',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'center',
                values: ['Mystique', 'Romance', 'Fusion', 'Passion']
            }
        ]
    });

    var pickerService = myApp.picker({
        input: '#picker-service',
        rotateEffect: true,
        cols: [
            {
                textAlign: 'center',
                values: ['Cuci saja', 'Cuci gosok']
            }
        ]
    });
});

// AND NOW WE INITIALIZE APP
myApp.init();