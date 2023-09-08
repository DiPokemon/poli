<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', __('Administration Page Fields'))
    ->show_on_template('administration.php')
    ->add_fields(array(
        Field::make('complex', 'head_doctor', 'Главный врач:')
            ->add_fields('head_doctor', 'Главный врач', array(
                Field::make('text', 'sub_title_position', 'Должность')
                        ->set_width(50),
                Field::make('text', 'doctor_name', 'ФИО')
                        ->set_width(50),
                Field::make('text', 'sub_title_telefon', 'Телефон:')
                        ->set_width(25),
                Field::make('text', 'phone_number', 'Номер')
                        ->set_width(25)
                        ->help_text('+7 (***)  '),
                Field::make('text', 'sub_title_fax', 'факс:')
                        ->set_width(25),
                Field::make('text', 'fax', 'Номер факса:')
                        ->set_width(25),
                Field::make('text', 'sub_title_email', 'E-mail')
                        ->set_width(25),
                Field::make('text', 'email', 'E-mail:')
                        ->set_width(25),
                Field::make('text', 'sub_title_room', 'Кабинет №')
                        ->set_width(25),
                Field::make('text', 'room_number', 'Кабинет №')
                        ->set_width(25),
                Field::make('text', 'sub_title_work_hours', 'Часы работы')
                        ->set_width(25),
                Field::make('text', 'working_hours', 'Время')
                        ->set_width(25)
                        ->help_text('например:понедельник – пятница: с 08:00 до 16:00'),
                Field::make('text', 'sub_title_office_hours', 'часы приёма граждан')
                        ->set_width(25),     
                        
                Field::make('textarea', 'business_hours', 'Время')
                        ->set_rows(4)
                        ->set_width(25)
                        ->help_text('например: четверг: с 16:00 до 18:00 вторник: с 16:00 до 18:00'),                    
                Field::make('image', 'doctor_image', 'Head doctors image')
                    ->set_value_type('url')
                    ->set_width(25),
                       
            )),
        Field::make('complex', 'staff_members', 'сотрудники больницы')
            ->add_fields('staff_members', 'сотрудники больницы',array(
                Field::make('image', 'picture', 'picture')
                    ->set_value_type('url')
                    ->set_width(25),
                Field::make('text', 'job', 'род деятельности')
                    ->set_width(25),
                Field::make('text', 'name', 'ФИО')
                    ->set_width(25),
                Field::make('text', 'sub_title_number', 'Телефон:')
                    ->set_width(25),    
                Field::make('text','number','Номер')
                    ->set_width(20)
                    ->help_text('+7 (***)  '),
                Field::make('text', 'sub_title_room_num', 'Кабинет №')
                    ->set_width(20),
                Field::make('text', 'room_num', 'Номер кабинета')
                    ->set_width(20),
                Field::make('text', 'sub_title_working_hours', 'Часы работы:')
                    ->set_width(20),    
                Field::make('textarea','working_hours','Время')
                    ->set_rows(4)
                    ->set_width(20)
                    ->help_text('например:понедельник – пятница: с 08:00 до 18:00'),
                
                    
            )),
        Field::make('complex', 'bottom_slider', 'administration paycheck')
            ->add_fields('bottom_slider', 'нижний Slider',array(
                Field::make('text', 'title', 'Заголовок')
                    ->set_width(20),
                Field::make('text', 'url', 'ссылка ')
                    ->set_attribute('type', 'url')
                    ->set_width(20),
            )),    

            ))






?>