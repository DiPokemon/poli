<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head itemscope itemtype="http://schema.org/WPHeader">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />   
        <title>ГБУ РО “Городская Больница №4”</title> 
        
        <?php wp_head();?>
        
    </head>
    <body>
        <header>
            <div class="header_top">
                <div class="header_top_menu">
                    <?php
                        $args = array(
                            'container'       => 'nav',
                            'container_class' => 'header_top_menu menu',
                            'menu_class'      => 'menu_list',
                            'fallback_cb'     => 'wp_page_menu',
                            'link_class'      => 'menu_link',
                            'theme_location'  => 'top_menu',
                            'add_li_class'    => 'menu_item',
                            'echo'            => false,  
                        );
                        $temp_menu = wp_nav_menu($args);
                        preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
                        foreach($matches[0] as $value){
                            if(strpos($value, "<span") === false){
                                $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }else{
                                $temp_value = str_replace("<span", "<span itemprop='name'", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }
                        }
                        echo $temp_menu;
                    ?> 
                </div>
                <div class="header_top_social">

                </div>
            </div>
            <div class="header_middle">

                <div class="site_identity">
                    <img class="logo_img" src="" alt="">
                    <div class="logo_text">ГБУ РО “Городская Больница №4”</div>
                </div>

                <div class="header_phone">
                    <i></i>
                    <a href=""></a>
                </div>

                <div class="header_phone">
                    <i></i>
                    <a href=""></a>
                </div>
                
                <a href="" class="blind_version"></a>
            </div>

            <div class="header_bottom">
                    <?php
                        $args = array(
                            'container'       => 'nav',          
                            'container_class' => 'header_main_menu menu',           
                            'menu_class'      => 'menu_list',          
                            'fallback_cb'     => 'wp_page_menu',            
                            'link_class'      => 'menu_link',           
                            'theme_location'  => 'main_menu',
                            'add_li_class'    => 'menu_item',
                            'echo'            => false,               
                        );
                        $temp_menu = wp_nav_menu($args);
                        preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
                        foreach($matches[0] as $value){
                            if(strpos($value, "<span") === false){
                                $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }else{
                                $temp_value = str_replace("<span", "<span itemprop='name'", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }
                        }
                        echo $temp_menu;
                    ?> 
            </div>

            <!-- <div class="header__menutop">
                <div class="header__wrapper">
                    <nav class="menutop_nav">
                        <ul class="menutop__list">
                            <li><a href="#" class="list-links">Информация по правам пациентов</a></li>
                            <li><a href="#" class="list-links">Портал ГОСУСЛУГИ</a></li>
                            <li><a href="#" class="list-links">Результаты СОУТ</a></li>
                            <li><a href="#" class="list-links">Противодействие коррупции</a></li>
                        </ul>
                        <ul class="menutop__icon">
                        <li><a href="#" class="links-icon"><img src="img/ok.svg" alt=""></a></li>
                        <li><a href="#" class="links-icon"><img src="img/vk.svg" alt=""></a></li>
                        <li><a href="#" class="links-icon"><img src="img/inst.svg" alt=""></a></li>
                        <li><a href="#" class="links-icon"><img src="img/tv.svg" alt=""></a></li>
                        <li><a href="#" class="links-icon"><img src="img/fc.svg" alt=""></a></li>
                        </ul> 
                    </nav>
                    <nav class="header_top_social"></nav>
                </div>
            </div> 

            <div class="header__contacts">
                <div class="header__wrapper">
                    <div class="contacts__container">
                        <div class="contacts__container_item logo"></div>
                        <div class="contacts__container_item">ГБУ РО “Городская Больница №4”</div>
                        <div class="contacts__container_item">8 (863) 263-13-80</div>
                        <div class="contacts__container_item">8 (863) 263-50-64</div>
                        <div class="contacts__container_item">Версия для слабовидящих</div>
                    </div> 
                </div>
            </div>

            <div class="header__menubottom">
                <div class="header__wrapper">
                    <nav class="menubottom_nav">
                        <ul class="menubottom__list">
                            <li><a href="#" class="menubottom_links">Главная</a></li>
                            <li><a href="#" class="menubottom_links">О больнице</a></li>
                            <li><a href="#" class="menubottom_links">Отделение</a></li>
                            <li><a href="#" class="menubottom_links">Новости</a></li>
                            <li><a href="#" class="menubottom_links">Задать вопрос</a></li>
                            <li><a href="#" class="menubottom_links">Отзывы</a></li>
                            <li><a href="#" class="menubottom_links">Запись на приём</a></li>
                            <li><a href="#" class="menubottom_links">Контакты</a></li>
                        
                        </ul>
                    </nav>                  

                </div>
            </div>       -->
                          
        </header>
    
        <main>