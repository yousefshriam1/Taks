
/*global $,alert,console*/
$(function() {
    'use strict';
$('main .section .links ul li ').click(function(){

    $(this).addClass('active').siblings().removeClass('active');
});
$('header .nav ul li ').click(function(){

    $(this).addClass('active').siblings().removeClass('active');
});
});