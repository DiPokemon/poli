<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page. Создание в админке нового пункта меню "Theme options" 
$basic_options_container = Container::make( 'theme_options', __( 'Theme options', 'policlinic' ) )
   

    ->set_icon( 'dashicons-welcome-widgets-menus' )    
    ->add_tab( __( 'Additional code', 'policlinic' ), array( //Создание вкладки "Additional code" в новом пункте меню "Theme options" 
        Field::make( 'header_scripts', 'head_code', __('Code in HEAD', 'policlinic')), //Создаём поле 'Code in HEAD' на вкладке "Additional code"
        Field::make( 'footer_scripts', 'footer_code', __('Code in FOOTER', 'policlinic')), //Создаём поле 'Code in FOOTER' на вкладке "Additional code"
        Field::make( 'textarea', 'text_404', __('Page 404 text', 'policlinic') ), //Создаём поле 'Page 404 text' на вкладке "Additional code"                           
    ) )
    ->add_tab( __( 'Contacts', 'policlinic' ), array( //Создание вкладки "Contacts" в новом пункте меню "Theme options" 
        Field::make( 'text', 'org_name', __('Organization name', 'policlinic')), //Создаем поле 'Organization name' на вкладке "Contacts"
        Field::make( 'text', 'main_phone', __( 'main phone', 'policlinic' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' )            
            ->set_width(33),
        Field::make( 'text', 'second_phone', __( 'Add. phone', 'policlinic' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' ) 
            ->set_width(33),
        Field::make( 'text', 'visually_impaired', __( 'Add. text', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'visually_impaired' ) 
            ->set_width(33),
        Field::make( 'text', 'adress1', __( 'Add. adress', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'text' ) 
            ->set_width(50), 
        Field::make( 'text', 'adress2', __( 'Add. adress', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'text' ) 
            ->set_width(50),    
        Field::make( 'text', 'head_doctor', __( 'Head doctor', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'head doctor' ) 
            ->set_width(50), 
        Field::make( 'text', 'name_head_doctor', __( 'Name head doctor', 'policlinic' ) )
            ->set_attribute( 'placeholder', __('Ivan', 'policlinic') ) 
            ->set_width(50),        
        
        
        
        
            
        Field::make( 'text', 'email', __( 'E-mail', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'example@example.com' )
            ->set_width(33),
        Field::make( 'text', 'fax', __( 'факс', 'policlinic' ) )
            ->set_width(33),
        Field::make( 'text', 'vk', __( 'VKontakte', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'vk.com/example' )
            ->set_attribute('type', 'url')
            ->set_width(33),
        Field::make( 'text', 'tg', __( 'Telegram', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'example' )
            ->set_width(33),
        Field::make( 'text', 'wa', __( 'WhatsApp', 'policlinic' ) )
            ->set_attribute( 'placeholder', '7**********' )
            ->set_width(33),
        Field::make( 'text', 'inst', __( 'Instagram', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'instagram.com/example' )
            ->set_attribute('type', 'url')
            ->set_width(33),
        Field::make( 'text', 'twitter', __( 'Twitter', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'Twitter.com/example' )
            ->set_attribute('type', 'url')
            ->set_width(33),
        Field::make( 'text', 'ok', __( 'Odnoklasniki', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'ok.ru/example' )
            ->set_attribute('type', 'url')
            ->set_width(33),
        Field::make( 'text', 'fb', __( 'Facebook', 'policlinic' ) )
            ->set_attribute( 'placeholder', 'facebook.com/example' )
            ->set_attribute('type', 'url')
            ->set_width(33),
        Field::make( 'text', 'cf7', __( 'Contact form', 'policlinic' ) )
            ->set_attribute( 'placeholder', '[contact-form-7 id="1" title="Contact form 1"]' )  
            ->set_width(33),
    ) )
    ->add_tab( __( 'Address', 'policlinic' ), array(
        Field::make( 'text', 'address_city', __( 'City', 'policlinic' ) )
            ->set_width(50),
        Field::make( 'text', 'address_street', __( 'Street', 'policlinic' ) )
            ->set_width(50),
        Field::make( 'text', 'address_build', __( 'Building', 'policlinic' ) )
            ->set_width(50),
        Field::make( 'text', 'address_index', __( 'ZIP-Code', 'policlinic' ) )
            ->set_width(50),
        Field::make( 'text', 'address_latitude', __( 'Latitude (for maps)', 'policlinic' ) )
            ->set_width(50),
        Field::make( 'text', 'address_longitude', __( 'Longitude (for maps)', 'policlinic' ) )
            ->set_width(50),
    ) )
    
    ->add_tab( __( 'Custom fields', 'policlinic' ), array(
        Field::make( 'text', 'departments', __( 'Depart', 'policlinic' ) ),
        Field::make( 'text', 'contact', __( 'Contact', 'policlinic' ) ),
        Field::make( 'image', 'custom_image', __( 'News image news', 'policlinic' ) )
            ->set_value_type( 'url' ),
        Field::make( 'text', 'botton_text', __( 'Текст кнопки', 'policlinic' ) ), 
        Field::make('text', 'url_news', 'url')
                    ->set_attribute('type', 'url'),   
        

        Field::make( 'complex', 'office_hospital', __( 'Ofices-Hospital', 'policlinic' ) )
               ->add_fields( array(
               Field::make( 'text', 'title_office_hospital', __( 'Title', 'policlinic' ) ),
               Field::make( 'image', 'photo_office_hospital', __( 'Photo', 'policlinic' ) )
                ->set_value_type( 'url' ), //Добавил тип получения картинки - URL
               )),
    ) )


    ->add_tab( __( 'Other-Departments', 'policlinic' ), array(
        Field::make( 'text', 'other_departments', __( 'Other-depart', 'policlinic' ) ),

        Field::make( 'complex', 'offices_other_departments', __( 'Other_Departments', 'policlinic' ) )
               ->add_fields( array(
               Field::make( 'text', 'title_other_departments', __( 'Title', 'policlinic' ) ),
               Field::make( 'image', 'photo_other_departments', __( 'Photo', 'policlinic' ) ),       
               )),
    ) );           