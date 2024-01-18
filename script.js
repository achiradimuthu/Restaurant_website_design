// onlord function
$(document).ready(function() {
    $("#navbar .img1").css({
        'display': 'block'
    });
    $("#navbar .img2").css({
        'display': 'block'
    });
});

// navbar scroll function
$(window).scroll(function() {
    if ($(window).scrollTop() < 50) {

        $("#navbar").css({
            'background-color': 'transparent',
            'box-shadow': 'none',
            'transition': '300ms'
        });

        $("#navbar span,#navbar a").css({
            'color': 'rgb(255,255,255)',
            'transition': '300ms'
        });

        $("#navbar .img1").css({
            'display': 'block'
        });
        $("#navbar .img2").css({
            'display': 'none'
        });

    } else {

        $("#navbar").css({
            'background-color': 'rgb(255,255,255)',
            'box-shadow': '0px 3px rgb(240,240,240',
            'transition': '300ms'
        });

        $("#navbar span,#navbar a").css({
            'color': 'rgb(0,0,0)',
            'transition': '300ms'
        });

        $("#navbar .img1").css({
            'display': 'none'
        });
        $("#navbar .img2").css({
            'display': 'block'
        });

    }
});


$("#header #user_icon").click(function() {
    $("#header .hed3 .menu").hide();
    $("#header .hed3 .user").toggle();
});

$("#navbar .sec2_mdiv3 img").click(function() {
    $("#header .hed3 .user").hide();
    $("#header .hed3 .menu").toggle();
});

$(window).scroll(function() {
    $("#header .hed3 .user").hide();
    $("#header .hed3 .menu").hide();
});

$(window).resize(function() {
    $("#header .hed3 .user").hide();
    $("#header .hed3 .menu").hide();
});


// signin signup page
$("#signup_span").click(function() {
    $("#signin_box").hide();
    $("#signup_box").show();
});

$("#signin_span").click(function() {
    $("#signup_box").hide();
    $("#signin_box").show();
});


// card click
$(".food_card_img_div").click(function() {
    window.location = "single_food_view.php";
});

// cart icon click
$("#cart_icon").click(function() {
    window.location = "cart.php";
});

$("#order_now_btn,#view_menu_btn").click(function() {
    window.location = "menu.php";
});

//admin navbar btn fuctions
$("#orders_btn").click(function() {
    $("#orders_div").show();
    $("#bookings_div,#messages_div,#foods_div").hide();
});

$("#bookings_btn").click(function() {
    $("#bookings_div").show();
    $("#orders_div,#messages_div,#foods_div").hide();
});

$("#messages_btn").click(function() {
    $("#messages_div").show();
    $("#orders_div,#bookings_div,#foods_div").hide();
});

$("#foods_btn").click(function() {
    $("#foods_div").show();
    $("#orders_div,#bookings_div,#messages_div").hide();
});

$("#admin_food_addnew_btn").click(function() {
    $("#add_new_food_modal").show();
});

$("#add_new_food_modal_close,#add_new_food_modal_cancel").click(function() {
    $("#add_new_food_modal").hide();
});

// fogot password function
$("#fogot_password_btn").click(function() {
    $("#fogot_password_modal_box").show();
});

$("#fogot_password_modal_box_close,#fogot_password_modal_box_cancel").click(function() {
    $("#fogot_password_modal_box").hide();
});