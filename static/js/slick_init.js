$(document).ready(function() {
    $('.slider_wrapper').each(function(index, sliderWrap) {

        var $main_banner = $(sliderWrap).find('.main_banner');
        var $main_gallery = $(sliderWrap).find('.main_gallery');
        var $information_banner = $(sliderWrap).find('.information_banner');



        $main_banner.slick({
            infinite: true,
            autoplay: false,
            dots: true,
            arrows: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            //centerPadding: '0px',
            // responsive: [{
            //     breakpoint: 1200,
            //     settings: {
            //         arrows: false,
            //         centerMode: false,
            //         slidesToShow: 1
            //     }
            // }, ]
        });

        $main_gallery.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 2,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
        });


        $information_banner.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
            dots: true,
            // responsive: [{
            //     breakpoint: 1200,
            //     settings: {
            //         arrows: false,
            //         centerMode: true,
            //         slidesToShow: 1
            //     }
            // }, ]
        })





    });









});