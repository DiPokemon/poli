<?php
/*
Template Name: Шаблон страницы Новости
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="page_news_top">
  <div class="page_news_container container">
      <h2 class="page_news_title font_w700_s60"><?php the_title(); ?></h2>
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      
          <form>
            
              <input type="search" placeholder="Поиск">
              <a href="#"><i class="fa fa-light fa-magnifying-glass"></i></a>
             
            
          </form> -->

          <div class="for-flex">
                <div class="search">
                    <button type="submit" class="search-button">
                        <img src="http://test-dev1.ru/wp-content/uploads/otdelenie/Vector.png"
                            alt="Search" class="search-icon">
                    </button>
                    <?= do_shortcode('[ivory-search id="392" title="AJAX Search Form"]'); ?>
                </div>
            </div>

            
            



      <!-- <input type="text" maxlength= "12" placeholder="Поиск" class="searchbar"> -->
      
  </div>
  <div class="prevention">
      <div class="container">
            
                <h3 class="prevention_title font_w700_s35"><?php echo carbon_get_the_post_meta('head_title'); ?></h3>
                
      </div>
        <!-- <div class="news_slider"> -->
      
  <div class="slider_wrapper">
    <div class="news_prevention_slider">
    <?php if ($news_slider) :?>
      <?php foreach($news_slider as $item) :?>
        <div class="slider__item">
          
            <a href="<?=$item['n_url']?>"><img src="<?=$item['n_image']?>" alt="img"></a>
        </div>
        <?php endforeach ;?>
        <?php endif; ?>
      </div>
      
      
    </div>
  
  
  </div>
      
    
  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
  </div>
    
</section>



<?php
$section_classes = ["announcement_container","important1", "important2_container","important3_container" ]; // Define an array of section classes
$class_index = 0; // Initialize the class index
$body_classes = ["announcement_body","important1_body", "important2_body","important3_body" ];
$body_index = 0;
$title_classes = ["announcement_title","important1_title", "important2_title","important3_title" ];
$title_index = 0;
$text_classes = ["announcement_text","important1_text", "important2_text","important3_text" ];
$text_index = 0;


foreach ($news_feed as $item) :
  $section_class = $section_classes[$class_index];
  $class_index = ($class_index + 1) % count($section_classes); 
  $current_body_class = $body_classes[$body_index]; 
  $body_index = ($body_index + 1) % count($body_classes); 
  $current_title_class = $title_classes[$title_index]; 
  $title_index = ($title_index + 1) % count($title_classes); 
  $current_text_class = $text_classes[$text_index]; 
  $text_index = ($text_index + 1) % count($text_classes); 
?>
<section class="<?= $section_class ?> midel">
  <div class="container">
    <h3 class="<?= $current_title_class ?> font_w700_s35"><?= $item['news_title'] ?></h3>
    <div class="<?= $current_body_class ?>">
      <div class="important1_img">
        <img width="430" height="280" src="<?= $item['feed_image'] ?>" alt="img">
      </div>
      <div class="<?= $current_text_class ?>">
      <?php if (!empty($item['content'])) : ?>
        <p class="<?= $current_title_class ?> font_w400_s18"><?= nl2br(htmlspecialchars($item['content'])) ?></p>
      <?php endif; ?>

      <?php if (isset($item['buttons']) && is_array($item['buttons'])) : ?>
        <div>
          <?php foreach ($item['buttons'] as $button) : ?>
            <?php if (!empty($button['button_text']) && !empty($button['button'])) : ?>
              <a href="<?= $button['button'] ?>" class="<?= $current_title_class ?> font_w400_s18"><?= nl2br(htmlspecialchars($button['button_text'])) ?></a>
              <?php if (!empty($button['content-dop'])) : ?>
                <p class="<?= $current_title_class ?> font_w400_s18"><?= nl2br(htmlspecialchars($button['content-dop'])) ?></p>
              <?php endif; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($item['content-dop'])) : ?>
        <p class="<?= $current_title_class ?> font_w400_s18"><?= nl2br(htmlspecialchars($item['content-dop'])) ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php endforeach; ?>


<!--  -->



</section>
<section class="news">
   <div class="news_container container">
       <h3 class="news_title"><a href="#" class="news_title-link"><?= get_category( 9, ARRAY_A)['name']; ?></a>
       </h3>
       
       <div class="news_body">
       <div class="news_img">
           
           <?php
                // Получение значения кастомного поля из Theme Options
                $image_news = carbon_get_theme_option('custom_image');                
            ?>                      
            <img width="430" height="328" src="<?=$image_news ?>" alt="Изображение">
            </div>
           <div class="news_posts">
           <ul class="news_posts_items1">
                <li></li>
                    </ul>
           <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 9,
                    'orderby' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <ul class="news_posts_items">
                        <li><a href="#" class="news_posts_items-link"><?php the_title(); ?></a></li>
                    </ul>
                    <?php
                }
            wp_reset_postdata();
            ?>
           </div>
           
       </div>
       <div class="news_buttom">
       <a href="<?php echo carbon_get_theme_option('url_news'); ?>" class="news_buttom-link"><?php echo carbon_get_theme_option('botton_text'); ?></a>
       </div>



   </div> 

</section>



<?php get_footer(); ?>

