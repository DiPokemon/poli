$(document).ready(function() {
    $('.slider_wrapper').each(function(index, sliderWrap) {

        var $main_banner = $(sliderWrap).find('.main_banner');
        var $gallery_banner = $(sliderWrap).find('.gallery_banner');
        var $information_banner = $(sliderWrap).find('.information_banner');


        var $main_important_info = $(sliderWrap).find('.information_important_info');

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

        $gallery_banner.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
            dots: false,
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

        $main_important_info.slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 3,
            arrows: false,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1
                    }
                },
            ]
        })





    });









});