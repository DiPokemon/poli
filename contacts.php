<?php
/*
Template Name: Шаблон страницы контактов
*/
?>
<?php get_header(); ?>
<section class="page_contacts">
<div class="page_contacts_container container">
        
        <h2 class="contacts_title">
            <a href="#" class="contacts_title-link"><?= carbon_get_theme_option('contact'); ?></a>
        </h2>
        
        <div class="page_contacts_body">
            <div class="page_contacts_text">
                 <div class="contacts_text_top">
                    <p><b>Адрес:</b> 344006, г. Ростов-на-Дону, пр. Богатяновский спуск, 27/160</p>
                    <p><b>Главный врач:</b> к.м.н., Пакус Дмитрий Игоревич</p>
                    <p><b>Справочные:</b></p>
                </div>

                <div class="contacts_text_bottom">
                    <ul>
                        <li>Главного врача: 263-30-90, факс: 227-76-05, e-mail: gb4com@mail.ru</li>
                        <li>Приемное отделение: 263-50-64</li>
                        <li>Терапевтическое отделение 1: 8 (863) 227-75-48</li>
                        <li>Терапевтическое отделение 2: 8 (863) 227-74-96</li>
                        <li>Травмпункт: 263-40-23</li>
                        <li>Отдел кадров: 227-76-05</li>
                        
                    </ul>
                    
                </div>

                
                <nav class="header_top_social social">
                <div class="social_item"><a href="#"><i class="fa-brands fa-odnoklassniki"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-vk"></i></a></div> 
                <div class="social_item"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                <div class="social_item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                </nav>
                
            </div>
            <div class="contacts_form">
            
            <?= do_shortcode('[contact-form-7 id="67" title="Контактная форма 1"]'); ?>
            </div>

        </div>             
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A33a2a7bc07b169c86e649ae6c58e8143399888560efcdf4494892c443a5c2773&amp;width=1200&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>




</div>
</section>
<?php get_footer(); ?>

