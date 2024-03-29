<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Новости')
    ->show_on_template('news.php')
    ->add_fields(array(
        Field::make('text', 'head_title', 'head title')
            ->set_width(100),



        Field::make('complex', 'news_slider')
            ->add_fields('news_slider', 'video slider',array(
                

                
                        Field::make('image', 'n_image')
                            ->set_value_type('url')
                            ->set_width(30),
                        Field::make('text', 'n_url', 'url')
                            ->set_attribute('type', 'url'),
             
             )),
             Field::make('complex', 'news_feed', 'все новости') 
             ->add_fields('news_feed', 'новости', array(
                Field::make('image', 'feed_image', 'img')
                    ->set_width(25)
                    ->set_value_type('url'),
                Field::make('text', 'news_title', 'title')
                    ->set_width(25),
                Field::make('textarea', 'content', 'Информация')
                    ->set_rows(4)
                    ->set_width(50),
                Field::make('complex', 'buttons', 'ссылки',)
                    ->add_fields('buttons',array(
                        Field::make('text', 'button_text',)
                            ->set_width(50),
                        Field::make('text', 'button', 'Открыть')
                            ->set_width(50)
                            ->set_attribute('type', 'url'),
                        Field::make('textarea', 'content-dop', 'Информация доп ')
                            ->set_rows(4)
                            ->set_width(50)

                    )),


                    )),
    ))


?>