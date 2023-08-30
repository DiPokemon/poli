<?php
    require_once( get_template_directory().'/functions-parts/breadcrumbs.php' );
    require_once( get_template_directory().'/functions-parts/navmenu.php' );
    require_once( get_template_directory().'/functions-parts/crb_init.php' );


//Cuting excerpt for words number
function custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Add custom logo
add_theme_support( 'custom-logo' );


add_theme_support('pagination');


//Miniatures
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

//Register menu areas
register_nav_menus([
    'top_menu' => 'Top menu',
    'main_menu' => 'Main menu',
    'footer_menu' => 'Footer menu'
]);

//Add class for logo
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
       $html = str_replace( 'custom-logo-link', 'header__logo_img', $html );
    return $html;
};

//Register and load CSS
function load_styles(){
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/static/fontawesome/css/all.min.css');
  	wp_enqueue_style('style_min', get_template_directory_uri().'/static/css/style.min.css');
  	wp_enqueue_style('slick', get_template_directory_uri().'/static/libs/slick/slick.min.css');
  	wp_enqueue_style('slick_theme', get_template_directory_uri().'/static/libs/slick/slick-theme.min.css');
//    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com', array(), 'null', true);
//    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com', array(), 'null', true);
//    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;700&display=swap', array(), 'null', true);



}; 
add_action('wp_enqueue_scripts', 'load_styles', 10);

//Register and load JS
function load_scripts(){  
  wp_enqueue_script('script', get_template_directory_uri() . '/static/js/script.js', array(), NULL, true);
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.4.min.js');
  wp_enqueue_script( 'jquery' , array(), NULL, true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/static/libs/slick/slick.min.js', array('jquery'), NULL, true);
  wp_enqueue_script('slick_init', get_template_directory_uri().'/static/js/slick_init.js', array('slick','masonry','maskedinput'), NULL, true);
  //wp_enqueue_script('yamap_api', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), NULL, true);  
  //wp_enqueue_script('map_init', get_template_directory_uri().'/static/js/map_init.js', array('yamap_api'), NULL, true); 
  wp_enqueue_script('spincrement', get_template_directory_uri().'/static/js/spincrement.min.js', array('jquery'), NULL, true); 
  //wp_enqueue_script('masonry', get_template_directory_uri().'/static/js/masonry.js', array('jquery'), NULL, true); 
  wp_enqueue_script('maskedinput', get_template_directory_uri().'/static/js/maskedinput.min.js', array('jquery'), NULL, true); 
} 
add_action('wp_enqueue_scripts', 'load_scripts', 10);

/**
* Добавляет блок для ввода контактных данных
*/
function mytheme_customize_register( $wp_customize ) {
    /*
    Добавляем секцию в настройки темы
    */
    $wp_customize->add_section(
    // ID
    'data_site_section',
    // Массив аргументов
    array(
    'title' => 'Контактные данные в шапке сайта',
    'capability' => 'edit_theme_options',
    'description' => "Тут можно указать контактные данные"    )
    );
    /*
    Добавляем поле контактных данных
    */
    $wp_customize->add_setting(
    // ID
    'theme_contacttext',
    // Массив аргументов
    array(
    'default' => '',
    'type' => 'option'
    )
    );
    $wp_customize->add_control(
    // ID
    'theme_contacttext_control',
    // Массив аргументов
    array(
    'type' => 'text',
    'label' => "Текст с контактной информацией",
    'section' => 'data_site_section',
    'settings' => 'theme_contacttext'
    )
    );
    /*
    Добавляем поле телефона site_telephone
    */
    $wp_customize->add_setting(
    // ID
    'site_telephone',
    // Массив аргументов
    array(
    'default' => '',
    'type' => 'option'
    )
    );
    $wp_customize->add_control(
    // ID
    'site_telephone_control',
    // Массив аргументов
    array(
    'type' => 'text',
    'label' => "Текст с телефоном",
    'section' => 'data_site_section',
    'settings' => 'site_telephone'
    )
    );
    }
    add_action( 'customize_register', 'mytheme_customize_register' );
   //Создаем новый тип записей
add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('portfolio', array(
		'label' => null,
		'labels' => array(
			'name' => 'Портфолио', // основное название для типа записи
			'singular_name' => 'Портфолио', // название для одной записи этого типа
			'add_new' => 'Добавить работу', // для добавления новой записи
			'add_new_item' => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item' => 'Редактирование работы', // для редактирования типа записи
			'new_item' => 'Новая работа', // текст новой записи
			'view_item' => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items' => 'Искать работу', // для поиска по этим типам записи
			'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon' => '', // для родителей (у древовидных типов)
			'menu_name' => 'Портфолио', // название меню
		),
		'description' => '',
				'public' => true,
		'publicly_queryable' => true, // зависит от public
		'exclude_from_search' => false, // зависит от public
		'show_ui' => true, // зависит от public
		'show_in_menu' => true, // показывать ли в меню адмнки
		'show_in_admin_bar' => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus' => true, // зависит от public
		'show_in_rest' => true, // добавить в REST API. C WP 4.7
		'rest_base' => null, // $post_type. C WP 4.7
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-gallery',
		'hierarchical' => false,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies' => array('skills'),
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
	));
}

