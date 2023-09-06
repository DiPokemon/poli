<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __('About Page Fields', 'policlinic'))
    ->show_on_template('about.php')
    ->add_fields(array(
        Field::make('complex', 'about_ambulance', __('About Ambulance'))
            ->add_fields('about_ambulance', __('information'), array(
                Field::make('image', 'about_page_image', __('Main image', 'policlinic'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('textarea', 'about_info', 'about ambulance')
                    ->set_rows(4)
                    ->help_text('Информация о больнице')
                    ->set_width(80)
            )),
        
        Field::make('complex', 'about_banners', __('About banners'))
            ->add_fields('about_banner_items', __('Banner'),array(
                Field::make('image', 'about_banner_desk', __('Banner for desktop'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'about_banner_mob', __('Banner for mobile'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('text', 'about_banner_alt', __('ALT'))
                    ->set_width(20),
                Field::make('text', 'about_banner_title', __('Title'))
                    ->set_width(20),
                Field::make('text', 'about_banner_url', __('URL'))
                    ->set_attribute('type', 'url')
                    ->set_width(20),
            )),
            Field::make('text', 'sub_title_licenses', 'Подзаголовок')
                    ->set_width(50),

        Field::make('complex', 'licenses', __('Лицензии на осуществление медицинской деятельности'))
            ->add_fields('licenses', __('Files'), array(
                
                Field::make('text', 'title', __('название документа'))
                    ->set_width(20),
                Field::make('image', 'license_image', __('фото документа'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('text', 'license_link', __('ссылка на документ'))
                    ->set_attribute('type', 'url')
                    ->set_width(20),

            )),
        Field::make('text', 'sub_title_hospital', 'Подзаголовок')
            ->set_width(50),    
        Field::make('complex', 'bottom_slider', __('Общественный совет больницы'))
            ->add_fields('bottom_slider', __('нижний блок с ссылками'),array(
                Field::make('text', 'title', __('Заголовок'))
                    ->set_width(20),
                Field::make('text', 'url', __('ссылка '))
                    ->set_attribute('type', 'url')
                    ->set_width(20)
            )),    
    ))
    
?>