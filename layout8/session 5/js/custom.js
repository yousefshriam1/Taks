/*global $,alert,console*/
$(function() {
    'use strict';
    //adjust header Hight
//     var myheader=$('header');
//    myheader.height($(window).height());
//     $(window).resize(function (){
//         myheader.height($(window).height());
//     });
    //links active 
    $('.links li a').click(function(){
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
//adjust item center

// $('.slider').each(function(){
//     $(this).css('paddingTop', ($(window).height() - $('.slider li').height()) / 2);  
// });
//trigger the bx slider
$('.slider').bxSlider({
    pager:false
});
//smooth scrool to div 
$('.links li a').click(function(){
$('html,body').animate({
    scrollTop:$('#'+ $(this).data('value')).offset().top
},1000);

});

// scroll to top
    
$("#scrollTop").click(function () {
        
    $("html, body").animate({scrollTop: 0}, 1000);
    
});

});