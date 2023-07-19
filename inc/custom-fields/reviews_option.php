<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'reviews')
    ->show_on_template('reviews.php')
    ->add_fields(array(
        Field::make('complex', 'reviews_items', 'Отзывы')
            ->add_fields('reviews_items', 'Отзывы',array(
                Field::make('text', 'name', 'ФИО')
                    ->set_width(40),
                Field::make('textarea', 'text', 'text')
                    ->set_width(40)
                    ->set_rows(4),
            ))

    ))




?>