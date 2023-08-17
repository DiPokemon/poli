<?php
/*
Template Name: Шаблон страницы Информация по правам пациентов
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section class="page_information">
<div class="page_information_container container">
    <h2 class="page_information_title font_w700_s60">Информация по правам пациентов</h2>
    <!-- <form>
              <input type="search" placeholder="Поиск">
              <a href="#"><i class="fa fa-light fa-magnifying-glass"></i></a>
    </form> -->

    <div class="for-flex">
                <div class="search">
                    <button type="submit" class="search-button">
                        <img src="http://test-dev1.ru/wp-content/uploads/otdelenie/Vector.png"
                            alt="Search" class="search-icon">
                    </button>
                    <input type="text" placeholder="Поиск" class="search-input">
                </div>
            </div>
    <!-- <input type="text" maxlength= "12" placeholder="Поиск" class="searchbar"> -->
    <h3 class="page_information_subtitle font_w700_s35">Контакты вышестоящих органов</h3>
    <div class="page_information_block">
        <div class="page_information_item">
            <?php foreach($contacts as $contact) :?>
            <h4 class="inf_block_title font_w600_s18"><?=$contact['title']?></h4>
            <?php endforeach ?>
                <ul class="page_information_list">
                    <?php

                    foreach ($contacts as $contact) {
                        $title = $contact['title'];
                        $information = $contact['information'];

                        foreach ($information as $info) {
                            $plusImg = $info['plus_img'];
                            $content = $info['content'];

                            echo '<li>';
                            if (!empty($plusImg)) {
                                echo '<span class="plus_img"><img src="' .$plusImg . '" alt="Plus Image"></span>';
                            }
                            echo '<span class="font_w400_s18">' . nl2br(htmlspecialchars($content)) . '</span>';
                            echo '</li>';
                        }

                        echo '</li>';
                    }
                    ?>
                </ul>
                    
        </div>
    </div>
    <?php foreach($guarantee as $guarantee):?>
    <h3 class="page_information_subtitle font_w700_s35"><?=$guarantee['title']?></h3>
    <div class="page_information_reminder">
        <img  src="<?=$guarantee['image']?>" alt="im" />
        <div class="reminder_content">
            <p class="reminder_text font_w400_s18"><?=$guarantee['button_title']?></p>
            <div class="reminder_bottom"><a href="<?=$guarantee['url']?>" class="font_w400_s18">Открыть</a></div>
        <?php endforeach ;?>
        </div>
    </div>
    <?php foreach($waiting_time as $item) :?>
        <?php if (!empty($item['title'])) :?>
    <h3 class="page_information_subtitle font_w700_s35"><?=$item['title'] ?></h3>
        <?php endif ;?>
    <?php endforeach ;?>
    <div class="slider_time_limits">
        <?php foreach($waiting_time_image as $item) :?>
        <div class="slider__item">
            <img src="<?=$item['image']?>" alt="img">
        </div>
        <?php endforeach ?>
    </div> 
    <?php foreach($routing as $item) :?>
        <?php if (!empty($item['title'])) :?>
    <h3 class="page_information_subtitle font_w700_s35"><?=$item['title']?></h3>
        <?php endif ;?>
    <?php endforeach ?>
    <div class="slider_patient_routing">
        <?php foreach($routing_image as $item) :?>
    <div class="slider__item">
            <img width="379px" height="537px" src="<?=$item['image']?>" alt="img">
        </div>
        <?php endforeach ?>
    </div>
    <?php foreach($guarantee2 as $guarantee):?>
        <?php if (!empty($guarantee['title'])) :?>
    <h3 class="page_information_subtitle font_w700_s35"><?=$guarantee['title']?></h3>
        <?php endif ;?>
    <?php endforeach ?>
    <div class="slider_free_medical">
        <?php foreach($guarantee2 as $guarantee):?>
        <div class="slider__item">
            <img src="<?=$guarantee['image']?>" alt="img">
        </div>
        <?php endforeach ;?>
    </div>  
    
    
    <?php foreach($information2 as $item) :?>
        <h3 class="page_information_subtitle font_w700_s35"><?=$item['head_title']?></h3> 
    <?php endforeach ;?> 
    
    <div class="insurance_organizations_block">
    <?php foreach($bottom_slider_items as $item) :?>
   
        <div class="block_item font_w600_s18"><a href="<?=$item['url']?>"><?=$item['title']?></a></div>
    
    <?php endforeach ;?> 
    </div>

    <?php foreach($bottom_slider2 as $item) :?>
        <h3 class="page_information_subtitle font_w700_s35"><?=$item['head_title']?></h3>
    <?php endforeach ;?> 
    
    <div class="tabs_block">
    <?php foreach($bottom_slider_items2 as $item) :?>
    
        <div class="block_item font_w600_s18"  ><a href="<?=$item['url']?>"><?=$item['title']?></a></div>
    
    <?php endforeach ;?> 
    </div>
    
    











</section>









<?php get_footer(); ?>