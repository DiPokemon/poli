$(document).ready(function() {
    $('.slider_wrapper').each(function(index, sliderWrap) {

        var $main_banner = $(sliderWrap).find('.main_banner');
        var $gallery_banner = $(sliderWrap).find('.gallery_banner');
        var $information_banner = $(sliderWrap).find('.information_banner');
        var $main_important_info = $(sliderWrap).find('.information_important_info');
        var $slider_time_limits = $(sliderWrap).find('.slider_time_limits');
        var $slider_free_medical = $(sliderWrap).find('.slider_free_medical');
        var $slider_patient_routing = $(sliderWrap).find('.slider_patient_routing');
        var $news_prevention_slider = $(sliderWrap).find('.news_prevention_slider');
        
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
            autoplay: true,
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
            dots: false,
            responsive: [{
                breakpoint: 550,
                settings: {
                    dots: true,
                }
            }, ]
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
            dots: true,
            // variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },

                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        centerMode: true,

                    }
                },
            ]
        })



        $slider_time_limits.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
            dots: false,
            arrows: false,
            // responsive: [{
            //     breakpoint: 1200,
            //     settings: {
            //         arrows: false,
            //         centerMode: true,
            //         slidesToShow: 1
            //     }
            // }, ]
        })


        $slider_free_medical.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 1,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: true,
            dots: false,
            arrows: false,
            // responsive: [{
            //     breakpoint: 1200,
            //     settings: {
            //         arrows: false,
            //         centerMode: true,
            //         slidesToShow: 1
            //     }
            // }, ]
        })


        $slider_patient_routing.slick({
            infinite: false,
            autoplay: false,
            slidesToShow: 1,
            centerMode: false,
            slidesToScroll: 0,
            variableWidth: true,
            dots: false,
            arrows: false,
            responsive: [{
                breakpoint: 820,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                }
            }, ]
        })

        $news_prevention_slider.slick({
            infinite: true,
            autoplay: false,
            slidesToShow: 3,
            centerMode: true,
            slidesToScroll: 1,
            variableWidth: false,
            dots: false,
            arrows: false,
            // centerPadding: '0px',
            responsive: [{
                breakpoint: 767,
                settings: {
                    centerMode: true,
                    slidesToShow: 2,
                }
            }, 
            {
                breakpoint: 500,
                settings: {
                    centerMode: true,
                    slidesToShow: 1,
                }
            }, ]
        })















    });
});