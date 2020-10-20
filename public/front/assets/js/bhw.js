$(document).ready(function(){


	$('#main-slider').carousel({
        pause: true,
        interval: false,
	});





	    // Code for Main Slider
    $('.work-slider').owlCarousel({
        // items:3,
        merge:true,
        loop:true,
        autoplay:true,
        autoplaySpeed:2000,
        autoplayTimeout:10000,
        smartSpeed:500,
        margin:30,
        nav:false,
        navDots:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });



    //Code for sticky menu


    var x = $('.header-main').offset().top; 
    
    $(window).scroll(function(){
        var y = $(window).scrollTop();
        
        if(y>x){
            $('.header-main').addClass('sticky');
           }else{
            $('.header-main').removeClass('sticky');
           }
    });
    
    $('.header-main').wrapAll('<div class="cover">');
    $('.cover').css('height', $('.header-main').outerHeight());
    $('.cover').css('max-height', '90px');
    



//jQuery Code for back to top
$(window).scroll(function(){    
    var wScroll = $(this).scrollTop();

    var showScrollButton = 5;

    if(wScroll > showScrollButton){
        $('#top').fadeIn();  
    }else{
        $('#top').fadeOut();
    }

});


//creating clidk function
$('#top').click(function(){
    $('body, html').animate({
       scrollTop:0 
    }, 2000);
    return false;
});





var gallery = $('.gallery a').simpleLightbox({

    /* options */

});





    $('.members-slider').owlCarousel({
        merge:true,
        loop:true,
        autoplay:true,
        autoplaySpeed:2000,
        autoplayTimeout:10000,
        smartSpeed:500,
        margin:30,
        nav:false,
        navDots:true,
        lazyLoad:true,
        center:false,
        responsive:{
            480:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });





    $('.region-slider').owlCarousel({
        merge:true,
        loop:true,
        autoplay:true,
        autoplaySpeed:2000,
        autoplayTimeout:10000,
        smartSpeed:500,
        margin:30,
        nav:true,
        navDots:false,
        lazyLoad:true,
        center:false,
        responsive:{
            480:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });



    
    $('.optional-btn.btn-subscribe').click(function(){
        $(this).hide();
        $('.main-btn.btn-subscribe').show();
        $('.subscription-form input').slideDown(300);
    })



    // Video popup code
    $('.video-link').magnificPopup({
        type: 'iframe',
        iframe: {
            markup:
                '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1',
                },
            },
            srcAction: 'iframe_src',
        },
    });



    $('.search-icon').click(function(){
        $('.search-field').toggle();
        $(this).children('i.fa').toggleClass('fa-close');
    });




	
});