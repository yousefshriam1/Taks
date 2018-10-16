$(document).ready(function(){



    $("html").niceScroll();

    $('.carousel').carousel({
        interval:6000
    });
    // show color option div when click on the gear
    $(".gear-check").click(function(){
        $(".color-option").fadeToggle();
    });
    // change theme color on click
    var colorLi= $(".color-option ul li")
   colorLi
    .eq(0).css("backgroundColor","#E41B17").end()
    .eq(1).css("backgroundColor","#660bf3").end()
    .eq(2).css("backgroundColor","#009Aff").end()
    .eq(3).css("backgroundColor","#20df88").end()

    colorLi.click(function()
    {
        $("link[href*='theme']").attr("href",$(this).attr("data-value"));

     
    });
    var scrollButton =$("#scroll-top");
    $(window).scroll(function(){
        
          $(this).scrollTop()>= 700  ?  scrollButton.show() : scrollButton.hide();
  
        
    });
    scrollButton.click(function(){
        $("html,body").animate({scrollTop : 0},600);
    }); 
});
    // loading screen

    $(window).on('load',function()
    {
        $(".loading-overlay .spinner").fadeOut(1000,
        function(){
            $("body").css("overflow","auto")
            $(this).parent().fadeOut(2000,
            function()
            {
             
                $(this).remove();
            });
           
        });
    });