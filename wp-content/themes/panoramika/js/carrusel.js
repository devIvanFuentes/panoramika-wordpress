(function($) {


    $(document).ready(function(){

    	$('.owl-carousel').owlCarousel({
    	stagePadding: 50,
        loop:false,
        margin:15,
        nav:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            768:{
                items:2,
                nav:true
            },
            623:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false
                }
            }
        })

        $('.owl-carousel--testimonios').owlCarousel({
        stagePadding: 50,
        loop:false,
        margin:10,
        nav:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            623:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:false
                }
            }
        })


    });
})( jQuery );