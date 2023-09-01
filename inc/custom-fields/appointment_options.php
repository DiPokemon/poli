<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', __('Appointments'))
    ->show_on_template('appointment.php')
    ->add_fields(array(
        Field::make('complex', 'appointments', 'Запись на прием')
            ->add_fields('appointments', 'прием', array(
                Field::make('image', 'appointment_image', 'Главная фотография')
                    ->set_value_type('url')
                    ->set_width(10),
                Field::make('textarea', 'important_text', 'Важная информация')
                    ->set_width(40),
                Field::make('text', 'phone_number', 'Телефон для записи на прием и консультаций')
                    ->set_width(20)
                    ->help_text('+7 (***) ***-**-**'),
                Field::make('text', 'registration_url', 'Электронная регистратура')
                    ->set_width(20),
            )),
        Field::make('complex', 'rules', 'Правила записи на первичный прием/ консультацию/ обследование')
            ->add_fields('rules', 'Правила записи', array(
                Field::make('text', 'rule', 'Правила записи')
                    ->set_width(30),
                Field::make('textarea', 'explaining', 'объяснение')
                    ->set_width(30),
            )),
    ));




?>