$(document).ready(function () {       
    $('.slider_wrapper').each(function (index, sliderWrap) {
        var $main_banner = $(sliderWrap).find('.main_banner');            

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
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                      arrows: false,
                      centerMode: false,
                      slidesToShow: 1
                    }
                },
            ]
        });

    }); 
});