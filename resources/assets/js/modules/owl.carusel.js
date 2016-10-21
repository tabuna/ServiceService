$('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    navText: [
      '<i class="icon-arrow-left"></i>',
        '<i class="icon-arrow-right"></i>'
    ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:6
        },
        1000:{
            items:12
        }
    }
});