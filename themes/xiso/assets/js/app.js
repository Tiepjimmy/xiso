/************ Site Main Js **************************************

 Template Name: XiSo Lap trinh online
 Author: Nana
 version: 1.0
 Copyright: 2019

 ****************************************************************/
'use strict';
// $(document).ready(function () {
//     // Header
//     $('#js_header').load('components/header.html');
//     // Footer
//     $('#js_footer').load('components/footer.html');
//     // Sidebar
//     $('#js_sidebar').load('components/sidebar.html', function (response, status) {
//         if (status) {
//             // Link active page
//             if (!window.active) {
//                 window.active = 0;
//             }

//             $('#js_sidebar_collapse .nav-item').each((index, item) => {
//                 const currentState = parseInt($(item).data('active'));
//                 if (currentState === window.active) {
//                     $(item).addClass('active');
//                     return;
//                 }
//             });
//         }
//     });
//     $('#js_frm_signup').load('components/sidebar-signup.html');


// });

window.onload = () => {
    /*=========== Loading ==============*/
    $("#lds-page").delay(10).fadeOut();

    /*=========== WOW js ==============*/
    new WOW().init();

    /*============= jQuery mmenu =============*/
    var menu = $('#js_main-menu').html();
    var headerMenu = $('#js_menu').append(menu);
    headerMenu.mmenu({
        extensions: ['theme-light', 'listview-50', 'pagedim-black', 'position-right', 'position-front'],
        navbar: {
            title: 'Trường học XiSo'
        }
    });

    /*=========== Carousel slide ==============*/
    $('.js-slides').owlCarousel({
        items: 1,
        loop: false,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 8000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    });

    $('.card-header a[data-toggle="collapse"]').on('click', function () {
        $(this).find('.ion-md-add-circle').toggleClass('ion-md-remove-circle');
        $(this).find('.ion-md-remove-circle.icon').toggleClass('add-circle');
    });
    // Support fb
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }
        (document, 'script', 'facebook-jssdk'));

    $(document).on('click', '.chat_fb', function () {
        $('.fchat').toggle('slow');
    })

    $('#js_sidebar').on('click', '#js_sidebar_mb', function () {
        $(this).find('i').toggleClass('double-up');
    });

    function clickCategories() {
        if ($(window).outerWidth() < 992) {
            $('#js_sidebar_collapse').addClass('collapse');
        } else {
            $('#js_sidebar_collapse').removeClass('collapse');
        }
    }

    clickCategories();
    $(window).resize(function () {
        clickCategories();
    });

    /*=========== Form validate ===========*/
    $('.frm-validate').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                email: true,
                required: false
            },
            phone: {
                number: true,
                required: true,
            },
            year: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Trường này không thể để trống!",
            },
            email: {
                email: "Địa chỉ email không hợp lệ!",
            },
            phone: {
                number: "Số điện thoại phải là chữ số!",
                required: "Trường này không thể để trống!"
            },
            year: {
                required: "Trường này không thể để trống!",
            },
        }
    });

    $('#btn-register').on('click', function (e) {
        e.preventDefault();
        const mobileLink = $(this).data('mobi');
        const desktopLink = $(this).data('desktop');
        let isMobile;
        if (navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
        ) {
            isMobile = true;
        } else {
            isMobile = false;
        }

        const url = !isMobile ? desktopLink : mobileLink;
        window.location.href = url;
    });
}

