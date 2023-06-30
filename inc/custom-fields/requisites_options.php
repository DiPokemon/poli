<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'Requisites')
    ->show_on_template('requisites.php')
    ->add_fields(array(
        Field::make('complex', 'requisite_items', 'Реквизиты')
            ->add_fields('requisite_items', 'Реквизиты', array(
                Field::make('text', 'title', 'Заголовок')
                    ->set_width(40),
                Field::make('text', 'subtitle', 'подзаголовок')
                    ->help_text('подзаголовок для дополнительного контента (можно не заполнять)')
                    ->set_width(40),
                Field::make('textarea', 'text', 'Реквизит')
                    ->set_rows(10)

            )),
    ))



?>