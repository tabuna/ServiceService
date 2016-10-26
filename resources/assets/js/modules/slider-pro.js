jQuery( document ).ready(function( $ ) {
    $( '.slider-pro' ).sliderPro({
        width: 960,
        height: 500,
        arrows: true,
        buttons: false,
        thumbnailImageSize: 'thumbnail',
        fade: true,
        fullScreen: true,
        shuffle: true,
        smallSize: 500,
        mediumSize: 1000,
        largeSize: 3000,
        thumbnailArrows: true,
        autoplay: false
    });
});