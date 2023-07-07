<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Stacionar Fields')
    ->show_on_template('depart-stacionar.php')
    ->add_fields(array(
        Field::make('complex', 'general_information')
            ->add_fields('general_information', 'general',array(
                Field::make('text', 'title', 'Типы информации')
                    ->set_width(30),
                Field::make('text', 'argument','argument')
                    ->set_width(30),
            )),
        
        Field::make('complex', 'floor_information', 'состав стационара')
            ->add_fields('floor_information', 'состав стационара',array(
                Field::make('text', 'information', 'information')
                    
            )),
        Field::make('complex', 'more_information', 'more information')
            ->add_fields('more_information' , 'more information', array(
                Field::make('textarea', 'more', 'more')
                    ->set_rows(4),
            )),
        Field::make('complex', 'images', 'bottom')
            ->add_fields('images', 'stacionar images',array(
                Field::make('image', 'image', 'img')
                    ->set_value_type('url')
            )),
            ));



?>