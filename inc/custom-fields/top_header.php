<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Результаты СОУТ')
    ->show_on_template('sout.php')
    ->add_fields(array(
        Field::make('complex', 'sout', 'Результаты СОУТ')
            ->add_fields('sout', 'Результаты СОУТ',array(
                Field::make('text', 'title', 'Title')
                    ->set_width(50),
                Field::make('text', 'url', 'url')
                    ->set_attribute('type', 'url')
                    ->set_width(50),
            )),
        ));
Container::make('post_meta', 'information for patients')
    ->show_on_template('information.php')
    ->add_fields(array(
        Field::make('complex', 'contacts', 'Контакты вышестоящих органов')
            ->add_fields(array(
                Field::make('text', 'title', 'Заголовок')
                    ->set_width(30),
                Field::make('complex', 'information', 'содержание')
                    ->add_fields(array(
                        Field::make('image', 'plus_img', 'plus img')
                            ->set_value_type('url')
                            ->set_width(30),
                        Field::make('textarea', 'content')
                    ))
            ))
        ));
Container::make('post_meta', 'guarantee')
    ->show_on_template('information.php')
    ->add_fields(array(
        Field::make('complex', 'guarantee', 'Памятка для граждан о гарантиях бесплатного оказания медицинской помощи')
            ->add_fields(array(
                Field::make('text', 'title', 'Заголовок')
                    ->set_width(20),
                Field::make('image', 'image', 'image')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('text', 'button_title', 'заголовок кнопки')
                    ->set_width(20),
                Field::make('text', 'url', 'Ссылка')
                    ->set_attribute('type', 'url')
                    ->set_width(20),
            ))
        ));

Container::make('post_meta', 'waiting times ')
    ->show_on_template('information.php')
    ->add_fields(array(
        Field::make('complex', 'waiting_time', 'Предельные сроки ожидания медицинской помощи')
            ->add_fields(array(
                Field::make('text', 'title', 'Заголовок')
                ->set_width(20),
            )),
        Field::make('complex', 'waiting_time_image', 'image')
            ->add_fields(array(
                Field::make('image', 'image', 'image')
                    ->set_value_type('url'),


            ))
        ));

Container::make('post_meta', 'routing ')
    ->show_on_template('information.php')
    ->add_fields(array(
        Field::make('complex', 'routing', 'Порядок маршрутизации пациентов')
            ->add_fields(array(
            Field::make('text', 'title', 'Заголовок')
                ->set_width(20),
            )),
        Field::make('complex', 'routing_image', 'image')
            ->add_fields(array(
                Field::make('image', 'image', 'image')
                    ->set_value_type('url'),
                ))
            ));

Container::make('post_meta', 'guarantee2')
    ->show_on_template('information.php')
    ->add_fields(array(
        Field::make('complex', 'guarantee2', 'Памятка для граждан о гарантиях бесплатного оказания медицинской помощи')
            ->add_fields(array(
        Field::make('text', 'title', 'Заголовок')
            ->set_width(20),
        Field::make('image', 'image', 'image')
            ->set_value_type('url'),
                ))
            ));

Container::make('post_meta','bottom_slider')
    ->show_on_template('information.php')
    ->add_fields(array(    
        Field::make('complex', 'information2', __('Информация о страховых медицинских организациях'))
            ->add_fields('information', __('Информация о страховых медицинских организациях'),array(
                Field::make('text', 'head_title', __('Заголовок'))
                    ->set_width(20),
            )),
            Field::make('complex', 'bottom_slider_items', 'inf')
                ->add_fields(array(
                    Field::make('text', 'title', __('Заголовок'))
                        ->set_width(20),
                    Field::make('text', 'url', __('ссылка '))
                        ->set_attribute('type', 'url')
                        ->set_width(20),
                    ))
                ));

Container::make('post_meta','bottom_slider2')
    ->show_on_template('information.php')
    ->add_fields(array(    
        Field::make('complex', 'bottom_slider2', __('Вкладки:'))
            ->add_fields('bottom_slider2', __('Вкладки:'),array(
                Field::make('text', 'head_title', __('Заголовок'))
                    ->set_width(20),
                        )),
        Field::make('complex', 'bottom_slider_items2', 'inf')
            ->add_fields(array(
                Field::make('text', 'title', __('Заголовок'))
                    ->set_width(20),
                Field::make('text', 'url', __('ссылка '))
                    ->set_attribute('type', 'url')
                    ->set_width(20),
                                ))
                            )); 

Container::make('post_meta', 'gosuslugi')
    ->show_on_template('gosuslugi.php')
    ->add_fields(array(
        Field::make('complex', 'gosuslugi', 'ГОСУСЛУГИ')
            ->add_fields('gosuslugi', 'ГОСУСЛУГИ',array(
                Field::make('text', 'title', 'tiitle')
                    ->set_width(30),
                Field::make('image', 'image', 'image')
                    ->set_value_type('url')
                ))
            ));






?>