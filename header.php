<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head itemscope itemtype="http://schema.org/WPHeader">
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />   
        <!-- <link rel="stylesheet" type="text/css" href="static/libs/slick/slick.css"/>
        // Add the new slick-theme.css if you want the default styling
        <link rel="stylesheet" type="text/css" href="static/libs/slick/slick-theme.css"/> -->
        <!-- <title>ГБУ РО “Городская Больница №4”</title>  -->
        
        <?php wp_head();?>
        
    </head>
    <body>
        <header>
            <div class="header_top">
                <div class="header_container">
                    <!-- <nav class="header_top_menu"> -->
                    <?php
                        $args = array(
                            'container'       => 'nav',          
                            'container_class' => 'header_top_menu menu',           
                            'menu_class'      => 'menu_list',          
                            'fallback_cb'     => 'wp_page_menu',            
                            'link_class'     => 'menu_link',           
                            'theme_location'  => 'top_menu',
                            'add_li_class'    => 'menu_item',
                            'echo'          => false,               
                        );
                        $temp_menu = wp_nav_menu($args);
                        preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
                        foreach($matches[0] as $value)
                        {
                            if(strpos($value, "<span") === false)
                            {
                                $temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }else{
                                $temp_value = str_replace("<span", "<span itemprop='name'", $value);
                                $temp_menu = str_replace($value, $temp_value, $temp_menu);
                            }
                        }
                        echo $temp_menu;
                    ?>  
                       
                    <!-- </nav> -->
                    <nav class="header_top_social social social_header">
                      <div class="social_item"><a href="<?php echo carbon_get_theme_option('ok'); ?>"><i class="fa-brands fa-odnoklassniki"></i></a></div>
                      <div class="social_item"><a href="<?php echo carbon_get_theme_option('vk'); ?>"><i class="fa-brands fa-vk"></i></a></div> 
                      <div class="social_item"><a href="<?php echo carbon_get_theme_option('inst'); ?>"><i class="fa-brands fa-instagram"></i></a></div>
                      <div class="social_item"><a href="<?php echo carbon_get_theme_option('twitter'); ?>"><i class="fa-brands fa-twitter"></i></a></div>
                      <div class="social_item"><a href="<?php echo carbon_get_theme_option('fb'); ?>"><i class="fa-brands fa-facebook"></i></a></div>
                    
                    
                    
                         
                    
                    
                    
                        </nav>
                </div>
            </div>
            <div class="header_middle">
                <div class="header_container">
                    <div class="site_identification">
                       <div class="logo_img logo_img_mobil"><?php the_custom_logo() ?></div>
                       <h1 class="logo_text"><a href="#" class="logo_text-link"><?php echo carbon_get_theme_option('org_name'); ?></a></h1>
                       <div class="header_phone"><i class="fa-solid fa-phone"></i><a href="#" class="header_phone-link"><?php echo carbon_get_theme_option('main_phone'); ?></a></div>
                       <div class="header_phone"><i class="fa-solid fa-phone"></i><a href="#" class="header_phone-link"><?php echo carbon_get_theme_option('second_phone'); ?></a></div>
                       <div class="visually_impaired"><a href="#" class="visually_impaired-link"><?php echo carbon_get_theme_option('visually_impaired'); ?></a></div>
                    </div>

                    <!-- Mobil -->
                    <div class="site_identification_mobil">
                       <div class="logo_img logo_img_mobil"><?php the_custom_logo() ?></div>
                       <h1 class="logo_text"><a href="#" class="logo_text-link"><?php echo carbon_get_theme_option('org_name'); ?></a></h1>
                       <div class="visually_impaired_mobil"><a href="#" class="visually_impaired-link_mobil"> <img class="visually_img" src="http://test-dev1.ru/wp-content/uploads/2023/05/Group843.png" alt="img" /></a></div>
                       <div class="header_phone_mobil"><a href="#" class="header_phone-link_mobil"><img class="header_phone_img" src="http://test-dev1.ru/wp-content/uploads/2023/05/Group838.png" alt="img" /></a></div>
                       <div class="header_menu_mobil"><a href="#" class="header_menu-link_mobil"><img class="header_menu_img" src="http://test-dev1.ru/wp-content/uploads/2023/05/Group841.png" alt="img" /></a></div>
                    </div>
                
                
                
                
                
                
                
                
                
                
                
                
                <!--<div class="contacts__container">
                        <div class="contacts__container_item logo"></div>
                        <div class="contacts__container_item">ГБУ РО “Городская Больница №4”</div>
                        <div class="contacts__container_item">8 (863) 263-13-80</div>
                        <div class="contacts__container_item">8 (863) 263-50-64</div>
                        <div class="contacts__container_item">Версия для слабовидящих</div>
                    </div> -->
                </div>
            </div>
            <div class="header_bottom">
                <div class="header_container">
                    <nav class="header_bottom_menu">
                                    <?php
                                        $args = array(
                                            'container'       => 'nav',          
                                            'container_class' => 'header_bottom_menu menu',           
                                            'menu_class'      => 'menu_list',          
                                            'fallback_cb'     => 'wp_page_menu',            
                                            'link_class'     => 'menu_link',           
                                            'theme_location'  => 'main_menu',
                                            'add_li_class'    => 'menu_item',
                                            'echo'          => false,               
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
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                            <!-- <ul class="menubottom__list">
                            <li><a href="#" class="menubottom_links">Главная</a></li>
                            <li><a href="#" class="menubottom_links">О больнице</a></li>
                            <li><a href="#" class="menubottom_links">Отделение</a></li>
                            <li><a href="#" class="menubottom_links">Новости</a></li>
                            <li><a href="#" class="menubottom_links">Задать вопрос</a></li>
                            <li><a href="#" class="menubottom_links">Отзывы</a></li>
                            <li><a href="#" class="menubottom_links">Запись на приём</a></li>
                            <li><a href="#" class="menubottom_links">Контакты</a></li>
                        
                        </ul> -->
                    </nav>
                    

                </div>
            </div>      
                          
        </header>
    
        <main>


        <style>
.header_bottom_menu ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.header_bottom_menu li {
  position: relative;
  display: inline-block;
}

.header_bottom_menu a {
  text-decoration: none;
  color: #333;
}

/* Стилизация выпадающих подменю */
.header_bottom_menu .sub-menu {
  display: none;
  position: absolute;
  top: 100%; /* Изменяем top на 0 */
  left: 0;
  background-color: #fff;
  border: 1px solid #ccc;
}

.header_bottom_menu .sub-menu li {
  width: 200px;
}

/* Стилизация третьего уровня меню */
.header_bottom_menu .sub-menu .sub-menu {
  top: 0;
  left: 100%;
}
.sub-menu .menu-item{
    margin-top: 5px !important;
    margin-bottom: 5px !important;
}
</style>