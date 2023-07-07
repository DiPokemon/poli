<?php
//   $head_code = carbon_get_theme_option( 'head_code' );
//   $footer_code = carbon_get_theme_option( 'footer_code' );
//   $title = carbon_get_theme_option( 'main_title' );

//   $description = carbon_get_theme_option( 'main_description' );
//   $org_name = carbon_get_theme_option( 'org_name' );

//  $contacts_main_phone_front = phone_front(carbon_get_theme_option( 'main_phone' ));
//  $contacts_add_phone_front = phone_front(carbon_get_theme_option( 'second_phone' ));
//  $contacts_main_phone_href = phone_href(carbon_get_theme_option( 'main_phone' ));
//   $contacts_add_phone_href = phone_href(carbon_get_theme_option( 'second_phone' ));

//   $contacts_mail = carbon_get_theme_option( 'email' );
//   $contacts_vk = carbon_get_theme_option( 'vk' );
//   $contacts_wa = phone_wa(carbon_get_theme_option( 'wa' ));
//   $contacts_tg = carbon_get_theme_option( 'tg' );
//   $contacts_inst = carbon_get_theme_option( 'inst' );
//   $contacts_fb = carbon_get_theme_option( 'fb' );

//   $address_city = carbon_get_theme_option( 'address_city' );
//   $address_street = carbon_get_theme_option( 'address_street' );
//   $address_building = carbon_get_theme_option( 'address_build' );
//   $address_zipcode = carbon_get_theme_option( 'address_index' );
//   $address_latitude = carbon_get_theme_option( 'address_latitude' );
//   $address_longitude = carbon_get_theme_option( 'address_longitude' );

//   $faq_title = carbon_get_theme_option( 'main_faq_title' );
//   $faq_items = carbon_get_theme_option( 'main_faq' );
//   $testimonials_title = carbon_get_theme_option( 'main_testimonials_title' );
//   $testimonial_items = carbon_get_theme_option( 'testimonial' );
//   $sidebar_title = carbon_get_theme_option( 'sidebar_title' );
//   $sidebar_description = carbon_get_theme_option( 'sidebar_description' );
//   $advantages = carbon_get_theme_option( 'advantages' );
//   $cf7 = carbon_get_theme_option( 'cf7' );

//   $text_404 = carbon_get_theme_option( 'text_404' );


  //Main page fields
  $main_banners = carbon_get_the_post_meta( 'main_banners' );
  $inf_important_banners = carbon_get_the_post_meta('inf_important_banners');
  $gallery_banners = carbon_get_the_post_meta('gallery_banners');

  //About page fields
  $about_ambulances = carbon_get_the_post_meta('about_ambulance');
  $about_banners = carbon_get_the_post_meta('about_banners');
  $licenses = carbon_get_the_post_meta('licenses');
  $text_information = carbon_get_the_post_meta('text_information');
  $bottom_slider = carbon_get_the_post_meta('bottom_slider');
  // appointments page fields
  $appointments = carbon_get_the_post_meta('appointments');
  $rules = carbon_get_the_post_meta('rules');
  // administration
  $head_doctor = carbon_get_the_post_meta('head_doctor');
  $staff_members = carbon_get_the_post_meta('staff_members');
  $bottom_slider = carbon_get_the_post_meta('bottom_slider');
  // vacansies
  $vacancies = carbon_get_the_post_meta('vacancies');
  $general_inf = carbon_get_the_post_meta('general_inf');
  $bottom_inf = carbon_get_the_post_meta('bottom_inf');
  // requisites
  $requisite_items = carbon_get_the_post_meta('requisite_items');
  //reviews
  $reviews_items = carbon_get_the_post_meta('reviews_items');
  //top header
  $sout = carbon_get_the_post_meta('sout');
  $contacts =carbon_get_the_post_meta('contacts');
  $information = carbon_get_the_post_meta('information');
  $guarantee = carbon_get_the_post_meta('guarantee');
  $waiting_time = carbon_get_the_post_meta('waiting_time'); 
  $waiting_time_image = carbon_get_the_post_meta('waiting_time_image');
  $routing = carbon_get_the_post_meta('routing');
  $routing_image = carbon_get_the_post_meta('routing_image');
  $guarantee2 = carbon_get_the_post_meta('guarantee2');
  $information = carbon_get_the_post_meta('information');
  $bottom_slider_items = carbon_get_the_post_meta('bottom_slider_items');
  $bottom_slider2 = carbon_get_the_post_meta('bottom_slider2');
  $bottom_slider_items2 = carbon_get_the_post_meta('bottom_slider_items2');
  $gosuslugi = carbon_get_the_post_meta('gosuslugi');
  // departs
  $depart_hospital = carbon_get_the_post_meta('depart_hospital');
  $other_departs = carbon_get_the_post_meta('other_departs');
  $general_information = carbon_get_the_post_meta('general_information');
  $floor_information =  carbon_get_the_post_meta('floor_information');
  $more_information = carbon_get_the_post_meta('more_information');
  $images = carbon_get_the_post_meta('images');
  $receptions = carbon_get_the_post_meta('receptions');
  $receptions_staff = carbon_get_the_post_meta('receptions_staff');
  $travmpunkt_staff = carbon_get_the_post_meta('travmpunkt_staff');
  $head_of_department = carbon_get_the_post_meta('head_of_department');
  $general_inf2 = carbon_get_the_post_meta('general_inf2');
  $profile = carbon_get_the_post_meta('profile');
  $travmpunkt_image = carbon_get_the_post_meta('travmpunkt_image');
?>