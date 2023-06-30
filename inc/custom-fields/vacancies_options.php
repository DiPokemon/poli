<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Vancies page fields')
    ->show_on_template('vacancies.php')
    ->add_fields(array(
        Field::make('complex', 'general_inf', 'Общая информация' )
                ->add_fields('general_inf', 'Общая информация', array(
                    Field::make('text','org_name', 'Наименование юридического лица:')
                        ->set_width(33),
                    Field::make('text', 'addres', 'Адрес:')
                        ->set_width(33),
                    Field::make('text', 'number', 'Контактный телефон:')
                        ->set_width(33),
            )),
        Field::make('complex', 'vacancies', 'vacansies')
                ->add_fields('vacansies', 'vacansies', array(
                    Field::make('text', 'title' , 'Вакансия')
                        ->set_width(30),
                    Field::make('text', 'looking_for', 'Необходимое количество работников:')
                        ->set_width(30),
                    Field::make('text','job_type', 'Характер работы: ')
                        ->set_width(30),
                    Field::make('text', 'salary', 'Заработная плата: ')
                        ->set_width(30),
                    Field::make('text', 'schedule', 'Режим работы: ')
                        ->set_width(30),
                    Field::make('text', 'qualification', 'требования')
                        ->set_width(30),
                )),  
        Field::make('complex', 'bottom_inf', 'information')
                ->add_fields('bottom_inf', 'bottom_inf',array(
                    Field::make('text', 'hr', 'Начальник отдела кадров')
                ))

    ))



?>