
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        dotsEach:true,

    
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
    

$('#leftArrow').click(function(){
    $('.owl-carousel').trigger('prev.owl.carousel',[1000])
})

$('#rightArrow').click(function(){
    $('.owl-carousel').trigger('next.owl.carousel',[1000])
})