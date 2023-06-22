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
    ));
?>