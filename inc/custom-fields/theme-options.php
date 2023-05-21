<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page. Создание в админке нового пункта меню "Theme options" 
$basic_options_container = Container::make( 'theme_options', __( 'Theme options', 'kstehno' ) )
   

    ->set_icon( 'dashicons-welcome-widgets-menus' )    
    ->add_tab( __( 'Additional code', 'kstehno' ), array( //Создание вкладки "Additional code" в новом пункте меню "Theme options" 
        Field::make( 'header_scripts', 'head_code', __('Code in HEAD', 'kstehno')), //Создаём поле 'Code in HEAD' на вкладке "Additional code"
        Field::make( 'footer_scripts', 'footer_code', __('Code in FOOTER', 'kstehno')), //Создаём поле 'Code in FOOTER' на вкладке "Additional code"
        Field::make( 'textarea', 'text_404', __('Page 404 text', 'kstehno') ), //Создаём поле 'Page 404 text' на вкладке "Additional code"                           
    ) )
    ->add_tab( __( 'Contacts', 'kstehno' ), array( //Создание вкладки "Contacts" в новом пункте меню "Theme options" 
        Field::make( 'text', 'org_name', __('Organization name', 'kstehno')), //Создаем поле 'Organization name' на вкладке "Contacts"
        Field::make( 'text', 'main_phone', __( 'main phone', 'kstehno' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' )            
            ->set_width(33),
        Field::make( 'text', 'second_phone', __( 'Add. phone', 'kstehno' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' ) 
            ->set_width(33),
        Field::make( 'text', 'visually_impaired', __( 'Add. text', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'visually_impaired' ) 
            ->set_width(33),
        
        
        
        
        
        Field::make( 'text', 'email', __( 'E-mail', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'example@example.com' )
            ->set_width(33),
        Field::make( 'text', 'vk', __( 'VKontakte', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'vk.com/example' )
            ->set_width(33),
        Field::make( 'text', 'tg', __( 'Telegram', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'example' )
            ->set_width(33),
        Field::make( 'text', 'wa', __( 'WhatsApp', 'kstehno' ) )
            ->set_attribute( 'placeholder', '7**********' )
            ->set_width(33),
        Field::make( 'text', 'inst', __( 'Instagram', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'instagram.com/example' )
            ->set_width(33),
        Field::make( 'text', 'fb', __( 'Facebook', 'kstehno' ) )
            ->set_attribute( 'placeholder', 'facebook.com/example' )
            ->set_width(33),
        Field::make( 'text', 'cf7', __( 'Contact form', 'kstehno' ) )
            ->set_attribute( 'placeholder', '[contact-form-7 id="1" title="Contact form 1"]' )  
            ->set_width(33),
    ) )
    ->add_tab( __( 'Address', 'kstehno' ), array(
        Field::make( 'text', 'address_city', __( 'City', 'kstehno' ) )
            ->set_width(50),
        Field::make( 'text', 'address_street', __( 'Street', 'kstehno' ) )
            ->set_width(50),
        Field::make( 'text', 'address_build', __( 'Building', 'kstehno' ) )
            ->set_width(50),
        Field::make( 'text', 'address_index', __( 'ZIP-Code', 'kstehno' ) )
            ->set_width(50),
        Field::make( 'text', 'address_latitude', __( 'Latitude (for maps)', 'kstehno' ) )
            ->set_width(50),
        Field::make( 'text', 'address_longitude', __( 'Longitude (for maps)', 'kstehno' ) )
            ->set_width(50),
    ) )
    
    ->add_tab( __( 'Department-Hospital', 'kstehno' ), array(
        Field::make( 'text', 'departments', __( 'Depart', 'kstehno' ) ),
        Field::make( 'text', 'hospital', __( 'Hospital', 'kstehno' ) ),
        
        Field::make( 'complex', 'office_hospital', __( 'Ofices-Hospital', 'kstehno' ) )
               ->add_fields( array(
               Field::make( 'text', 'title_office_hospital', __( 'Title', 'kstehno' ) ),
               Field::make( 'image', 'photo_office_hospital', __( 'Photo', 'kstehno' ) ),
                ->set_value_type( 'url' ), //Добавил тип получения картинки - URL
               )),
        // Field::make( 'text', 'address_index1', __( 'ZIP-Code', 'kstehno' ) )
        //     ->set_width(50),
        // Field::make( 'text', 'address_latitude1', __( 'Latitude (for maps)', 'kstehno' ) )
        //     ->set_width(50),
        // Field::make( 'text', 'address_longitude1', __( 'Longitude (for maps)', 'kstehno' ) )
        //     ->set_width(50),
    ) )


    ->add_tab( __( 'Other-Departments', 'kstehno' ), array(
        Field::make( 'text', 'other_departments', __( 'Other-depart', 'kstehno' ) ),

        Field::make( 'complex', 'offices_other_departments', __( 'Other_Departments', 'kstehno' ) )
               ->add_fields( array(
               Field::make( 'text', 'title_other_departments', __( 'Title', 'kstehno' ) ),
               Field::make( 'image', 'photo_other_departments', __( 'Photo', 'kstehno' ) ),       
               )),
    ) );           