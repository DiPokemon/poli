<?php
// Carbon Fields initialization
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( get_template_directory().'/inc/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'register_custom_fields' );
function register_custom_fields() {
	require get_template_directory() . '/inc/custom-fields/theme-options.php';
	//require get_template_directory() . '/inc/custom-fields/post-options.php';
    require get_template_directory() . '/inc/custom-fields/page-options.php';
    //require get_template_directory() . '/inc/custom-fields/product-options.php';
    //require get_template_directory() . '/inc/custom-fields/category-options.php';
    require get_template_directory() . '/inc/custom-fields/about_page.php';
    require get_template_directory() . '/inc/custom-fields/appointment_options.php';
    require get_template_directory() . '/inc/custom-fields/administration_options.php';
    require get_template_directory() . '/inc/custom-fields/vacancies_options.php';
    require get_template_directory() . '/inc/custom-fields/requisites_options.php';
    require get_template_directory() . '/inc/custom-fields/reviews_option.php';
    require get_template_directory() . '/inc/custom-fields/top_header.php';
    require get_template_directory() . '/inc/custom-fields/depart_hospital_options.php';
    require get_template_directory() . '/inc/custom-fields/depart_stacionar_options.php';
    require get_template_directory() . '/inc/custom-fields/reception_options.php';
    require get_template_directory() . '/inc/custom-fields/travmpunkt_options.php';
    require get_template_directory() . '/inc/custom-fields/news_options.php';

}