<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Main page fields', 'policlinic' ) )     
    ->show_on_template('home.php')
    ->add_fields(array(
		Field::make( 'complex', 'main_banners',  __('Main banners', 'policlinic') )
            ->add_fields( 'main_banners_items', __('Banner', 'policlinic'), array(                
                Field::make( 'image', 'main_banner_desk', __( 'Banner for desktop', 'policlinic' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),  
                Field::make( 'image', 'main_banner_mob', __( 'Banner for mobile', 'policlinic' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),
                Field::make( 'text', 'main_banner_alt', __( 'Alt', 'policlinic' ) )
                    ->set_width(30),
                Field::make( 'text', 'main_banner_title', __( 'Title', 'policlinic' ) )
                    ->set_width(30),
                Field::make( 'text', 'main_banner_url', __( 'URL', 'policlinic' ) )
                    ->set_attribute( 'placeholder', 'https://exmaple.ru/example/' )
                    ->set_width(100),
            ) )        
	));