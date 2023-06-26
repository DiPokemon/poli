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

$(document).ready(function(){
	$('.slider_time_limits').slick({
        arrows: false,
        slidesToShow: 3,
    });
});

$(document).ready(function(){
	$('.slider_patient_routing').slick({
        arrows: false,
        slidesToShow: 3,
    });
});

$(document).ready(function(){
	$('.slider_free_medical').slick({
        arrows: false,
        slidesToShow: 3,
    });
});

// ---------------Выпадающее меню при нажатии--------------------
// jQuery(document).ready(function($) {
//     $('.menu-item-has-children > a').click(function(e) {
//       e.preventDefault();
//       $(this).siblings('.sub-menu').slideToggle();
//     });
//   });

// ----------------Выпадающее меню при наведении------------------
jQuery(document).ready(function($) {
    $('.menu-item-has-children').hover(
      function() {
        $(this).find('.sub-menu').stop().slideDown();
      },
      function() {
        $(this).find('.sub-menu').stop().slideUp();
      }
    );
  });