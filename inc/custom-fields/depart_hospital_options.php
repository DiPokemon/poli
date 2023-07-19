<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('post_meta', 'отделения-городской-больницы-№4')
    ->show_on_template('depart-hospital.php')
    ->add_fields(array(
        Field::make('complex', 'depart_hospital')
            ->add_fields('depart_ambulance', 'Стационар',array(
                Field::make('image','image','image')
                    ->set_value_type('url'),
                Field::make('text','name','отделение'),
                Field::make('text', 'url', 'url')
                    ->set_attribute('type', 'url')
            ))
            ));

Container::make('post_meta', 'Другие отделения')
    ->show_on_template('depart-hospital.php')
    ->add_fields(array(
        Field::make('complex', 'other_departs')
            ->add_fields('other_departs', 'Другие отделения',array(
                Field::make('image','image','image')
                    ->set_value_type('url'),
                Field::make('text','name','отделение'),
                Field::make('text', 'url', 'url')
                    ->set_attribute('type', 'url')
             ))
            ));





?>