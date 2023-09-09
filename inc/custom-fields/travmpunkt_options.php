<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'reception fields')
    ->show_on_template('depart-travmpunkt.php')
    ->add_fields(array(
        Field::make('complex', 'head_of_department')
            ->add_fields('head_of_department', 'Заведующий отделением', array(
                Field::make('image', 'profile_pic', 'photo')
                    ->set_width(20)
                    ->set_value_type('url'),
                Field::make('text', 'job_title', ' должность')
                    ->set_width(20),
                Field::make('text', 'name', 'ФИО')
                    ->set_width(20),
                Field::make('textarea', 'inf', 'information')
                    ->set_rows(4)
        )),
            Field::make('complex', 'general_inf2')
                ->add_fields('general_inf', 'информация', array(
                    Field::make('text', 'sub_title_location', 'Расположение:')
                    ->set_width(50),
                    Field::make('text', 'location', 'Локация:')
                    ->set_width(50),
                    Field::make('text', 'sub_title_number_adults', 'Способ связи')   
                        ->set_width(33),
                    Field::make('text', 'number_adults', 'Телефон взрослый:')   
                        ->set_width(33),
                    Field::make('text', 'number_children', 'Телефон детский :')   
                        ->set_width(33),
                    Field::make('text','sub_title_working_hours_adults', 'Режим работы взрослый:')
                        ->set_width(33),    
                    Field::make('text','working_hours_adults', 'Режим работы взрослый:')
                        ->set_width(33),
                    Field::make('text','working_hours_children', 'Режим работы детский :')
                        ->set_width(33),
                    Field::make('text','sub_title_working_hours_adults_repeat', 'Режим работы (повторного приёма):')
                        ->set_width(33),    
                    Field::make('text','working_hours_adults_repeat', 'Режим работы взрослый:')
                        ->set_width(33),
                    Field::make('text','working_hours_children_repeat', 'Режим работы детский :')
                        ->set_width(33),    
                    Field::make('text','sub_title_content_adults', 'Контингент обслуживания взрослый:')
                        ->set_width(33),    
                    Field::make('text','content_adults', 'Контингент обслуживания взрослый:')
                        ->set_width(33),
                    Field::make('text','content_children', 'Контингент обслуживания детский:')
                        ->set_width(33)
                    )),
            Field::make('text','sub_title_profile', 'Профиль:')
                    ->set_width(100),        
            Field::make('complex', 'profile')
                ->add_fields('profile', 'Профиль',array(
                    Field::make('textarea','profile', 'Профиль:')
                        ->set_rows(4)
                )),
                   
            Field::make('complex', 'travmpunkt_image')
                ->add_fields('image', 'image',array(
                    Field::make('image', 'image', 'image')
                        ->set_value_type('url'),
                    )),
            Field::make('complex', 'travmpunkt_staff')
                ->add_fields('travmpunkt_fields', 'staff', array(
                    Field::make('text', 'job_title', ' должность')
                        ->set_width(20),
                    Field::make('text', 'name', 'ФИО')
                        ->set_width(20),
                    Field::make('textarea', 'inf', 'information')
                        ->set_rows(4),
            )),
        
        
        ));




?>