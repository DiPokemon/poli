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
            ) ),
            
        Field::make( 'complex', 'inf_important_banners',  __('Important information banners', 'policlinic') )
            ->add_fields( 'inf_important_banners_items', __('Banner', 'policlinic'), array(                
                Field::make( 'image', 'inf_important_banner_desk', __( 'Banner for desktop', 'policlinic' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),  
                Field::make( 'image', 'inf_important_banner_mob', __( 'Banner for mobile', 'policlinic' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),
                Field::make( 'text', 'inf_important_banner_alt', __( 'Alt', 'policlinic' ) )
                    ->set_width(30),
                Field::make( 'text', 'inf_important_banner_title', __( 'Title', 'policlinic' ) )
                    ->set_width(30),
                Field::make( 'text', 'inf_important_banner_url', __( 'URL', 'policlinic' ) )
                    ->set_attribute( 'placeholder', 'https://exmaple.ru/example/' )
                    ->set_width(100),
            ) ),    
        Field::make('complex', 'gallery_banners', __('Gallery banners', 'policlinic'))
            ->add_fields('gallery_banners', __('Banner', 'policlinic'), array(
                Field::make('image', 'gallery_banner_desk', __('Banner for Desktop', 'policlinic'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'gallery_banner_mob', __('Banner for Mobile', 'policlinic'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('text', 'gallery_banner_alt', __('Alt', 'policlinic'))
                    ->set_width(30),
                Field::make('text', 'gallery_banner_title', __('Title', 'policlinic'))
                    ->set_width(30),
                
            ) )
        
            ));