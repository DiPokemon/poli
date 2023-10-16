$(document).ready(function() {
    $('.about_slider_top').slick({
        arrows: false,
        slidesToShow: 4,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 570,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 1,
                }
            },
        ]
    });
});
$(document).ready(function() {
    $('.about_slider_bottom').slick({
        arrows: false,
        slidesToShow: 3,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 570,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 1,
                }
            },
        ]
    });
});

$(document).ready(function() {
    $('.news_prevention_slider').slick({
        // arrows: false,
        // slidesToShow: 3,
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        centerMode: true,
        slidesToScroll: 1,
        variableWidth: true,
        dots: false,
        centerPadding: '0px',
    });
});

// $(document).ready(function() {
//     $('.slider_time_limits').slick({
//         arrows: false,
//         slidesToShow: 3,
//         responsive: [{
//                 breakpoint: 1200,
//                 settings: {
//                     arrows: false,
//                     centerMode: false,
//                     slidesToShow: 2,
//                     centerPadding: '10px',
//                 }
//             },
//             {
//                 breakpoint: 800,
//                 settings: {
//                     arrows: false,
//                     centerMode: false,
//                     slidesToShow: 1,
//                     centerPadding: '10px',
//                 }
//             },
//         ]

//     });
// });

// $(document).ready(function() {
//     $('.slider_patient_routing').slick({
//         arrows: false,
//         slidesToShow: 2,
//         responsive: [{
//             breakpoint: 800,
//             settings: {
//                 arrows: false,
//                 centerMode: false,
//                 slidesToShow: 1
//             }
//         }, ]
//     });

//     // $('.slider_free_medical').slick({
//     //     arrows: false,
//     //     slidesToShow: 3,
//     // });
// });



// Получаем все элементы меню с подменю
const menuItemsWithSubmenus = document.querySelectorAll('.header_bottom_menu li.menu-item-has-children');

// Добавляем обработчики событий для наведения и ухода мыши
menuItemsWithSubmenus.forEach(menuItem => {
    let timeoutId; // Здесь будем хранить идентификатор таймаута

    menuItem.addEventListener('mouseenter', () => {
        clearTimeout(timeoutId); // Очищаем предыдущий таймаут
        menuItem.querySelector('.sub-menu').style.display = 'block';
    });

    menuItem.addEventListener('mouseleave', () => {
        // Добавляем небольшую задержку перед скрытием подменю
        timeoutId = setTimeout(() => {
            menuItem.querySelector('.sub-menu').style.display = 'none';
        }, 300); // Здесь 300 миллисекунд – это время задержки
    });
});