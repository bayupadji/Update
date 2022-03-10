require('./bootstrap');
// sidebar float
$(document).ready(function(){
    $(window).scroll(function () {   
       
     if($(window).scrollTop() > 200) {
        $('col sidebar').css('position','fixed');
        $('col sidebar').css('top','0'); 
     }
    
     else if ($(window).scrollTop() <= 200) {
        $('col sidebar').css('position','');
        $('col sidebar').css('top','');
     }  
        if ($('col sidebar').offset().top + $("col sidebar").height() > $("fot").offset().top) {
            $('col sidebar').css('top',-($("col sidebar").offset().top + $("col sidebar").height() - $("fot").offset().top));
        }
    });
    });
// end sidebar 