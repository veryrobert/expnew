// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.



jQuery(document).ready(function($) {
  jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
  $('#slider-with-blocks-1').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    fadeinLoadedSlide: true,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    numImagesToPreload: 6,
    transitionType: 'fade',
    keyboardNavEnabled: true,
   autoPlay: {
        // autoplay options go gere
        enabled: true,
        pauseOnHover: false,
        delay:3000,
      }
  });
});


// Random list for home page

// This sets the functions up but I've no clue how… come back to that

this.randomtip = function(){

// define the pause for each tip (in milliseconds) 
    var length = $("#tips li").length; 
    var temp = -1;      

    this.getRan = function(){
        // get the random number
        var ran = Math.floor(Math.random()*length) + 1;
        return ran;
    };
    this.show = function(){
        var ran = getRan();
        // to avoid repeating
        while (ran == temp){
            ran = getRan();
        }; 
        temp = ran;
        $("#tips li").hide();   
        $("#tips li:nth-child(" + ran + ")").fadeIn("slow");        
    };
    show();
};


// This runs the function on page load

$(document).ready(function(){   
    randomtip().show();

// adds fullscreen


});

$('.open').click(function(){
    $('.fullscreen_show_blue').fadeIn('slow', function(){
         $(this).show('.fullscreen_show_blue');

    });
});

$('.close').click(function(){
    $('.fullscreen_show_blue').fadeOut('slow', function(){
         $(this).hide('.fullscreen_show_blue');
       
    });
});

$('.privacy_open').click(function(){
    $('.fullscreen_show_green').fadeIn('slow', function(){
         $(this).show('.fullscreen_show_green');
    });
});

$('.close').click(function(){
    $('.fullscreen_show_green').fadeOut('slow', function(){
         $(this).hide('.fullscreen_show_green');
    });
});

// Have to repeat this function but inside a button so when someone clicks this the button it refreshes the

$('.button').click(function(){  

    var length = $("#tips li").length; 
    var temp = -1;      

    this.getRan = function(){
        // get the random number
        var ran = Math.floor(Math.random()*length) + 1;
        return ran;
    };
    this.show = function(){
        var ran = getRan();
        // to avoid repeating
        while (ran == temp){
            ran = getRan();
        }; 
        temp = ran;
        $("#tips li").hide();   
        $("#tips li:nth-child(" + ran + ")").fadeIn("slow");        
    };
    
    show();
  
});

