<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Vancies page fields')
    ->show_on_template('vacancies.php')
    ->add_fields(array(
        Field::make('complex', 'general_inf', 'Общая информация' )
                ->add_fields('general_inf', 'Общая информация', array(
                    Field::make('text','sub_title_org_name', 'Наименование юридического лица:')
                        ->set_width(50),
                    Field::make('text','org_name', 'Наименование юридического лица:')
                        ->set_width(50),
                    Field::make('text', 'sub_title_addres', 'Адрес:')
                        ->set_width(50),    
                    Field::make('text', 'addres', 'Адрес:')
                        ->set_width(50),
                    Field::make('text', 'sub_title_number', 'Контактный телефон:')
                        ->set_width(50),    
                    Field::make('text', 'number', 'Контактный телефон:')
                        ->set_width(50),
            )),
        Field::make('complex', 'vacancies', 'vacansies')
                ->add_fields('vacansies', 'vacansies', array(
                    Field::make('text', 'title' , 'Вакансия')
                        ->set_width(100),
                    Field::make('text', 'sub_title_looking_for', 'Необходимое количество работников:')
                        ->set_width(50),    
                    Field::make('text', 'looking_for', 'Необходимое количество работников:')
                        ->set_width(50),
                    Field::make('text','sub_title_job_type', 'Характер работы: ')
                        ->set_width(50),    
                    Field::make('text','job_type', 'Характер работы: ')
                        ->set_width(50),
                    Field::make('text', 'sub_title_salary', 'Заработная плата: ')
                        ->set_width(50),
                    Field::make('text', 'salary', 'Заработная плата: ')
                        ->set_width(50),
                    Field::make('text', 'sub_title_schedule', 'Режим работы: ')
                        ->set_width(50),    
                    Field::make('text', 'schedule', 'Режим работы: ')
                        ->set_width(50),
                    Field::make('text', 'qualification', 'требования')
                        ->set_width(100),
                )),  

        Field::make('complex', 'bottom_inf', 'information')
                ->add_fields('bottom_inf', 'bottom_inf',array(
                    Field::make('text', 'sub_title1_hr', 'Начальник отдела кадров')
                    ->set_width(33),
                    Field::make('text', 'sub_title2_hr', 'Начальник отдела кадров')
                    ->set_width(33),
                    Field::make('text', 'hr', 'Начальник отдела кадров')
                    ->set_width(33),
                ))

    ))



?>