<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'reception fields')
    ->show_on_template('depart-reception.php')
    ->add_fields(array(


        Field::make('text', 'custom_title', 'Заголовок отделения')  // Добавляем текстовое поле для заголовка
        ->set_width(100),


        Field::make('complex', 'receptions')
            ->add_fields('reception_fields', 'Заведующий отделением', array(
                Field::make('text', 'job_title', ' должность')
                    ->set_width(20),
                Field::make('text', 'name', 'ФИО')
                    ->set_width(20),
                Field::make('image', 'profile_pic', 'photo')
                    ->set_width(20)
                    ->set_value_type('url'),
                Field::make('textarea', 'inf', 'information')
                    ->set_rows(4),
            )),

            Field::make('complex', 'receptions_staff')
                ->add_fields('reception_fields', 'Заведующий отделением', array(
                    Field::make('text', 'job_title', ' должность')
                        ->set_width(20),
                    Field::make('text', 'name', 'ФИО')
                        ->set_width(20),
                    Field::make('text', 'accreditation', 'Аккредитация')
                        ->set_width(20),
                    Field::make('textarea', 'inf', 'information')
                        ->set_rows(4),
            )),



        
        
        
        
        ));




?>