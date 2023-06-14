$(document).ready(function(){
	$('.about_slider_top').slick({
        arrows: false,
        slidesToShow: 4,
    });
});
$(document).ready(function(){
	$('.about_slider_bottom').slick({
        arrows: false,
        slidesToShow: 3,
    });
});

$(document).ready(function(){
	$('.news_prevention_slider').slick({
        arrows: false,
        slidesToShow: 3,
    });
});

// ---------------Выпадающее меню--------------------
jQuery(document).ready(function($) {
    $('.menu-item-has-children > a').click(function(e) {
      e.preventDefault();
      $(this).siblings('.sub-menu').slideToggle();
    });
  });