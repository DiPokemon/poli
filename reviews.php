<?php
/*
Template Name: Шаблон страницы Отзывы
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="page_reviews">
<div class="page_reviews_container container">
   <div class="reviews_title font_w700_s60">Отзывы</div>
   <div class="reviews_cf7"><?php echo do_shortcode( '[contact-form-7 id="82" title="Контактная форма для страницы Отзывы"]' ); ?></div>
   <div class="reviews_column font_w400_s18">
    <?php foreach($reviews_items as $items) :?>
       <div class="reviews_item">
           <div class="reviews_item_title"><?=$items['name']?></div>
           <div class="reviews_item_text"><?=(nl2br(htmlspecialchars($items['text'])))?></div>
       </div>
    <?php endforeach ;?>  
   </div>
   <div class="reviews_href">
        <div class="page1"><a href="#" class="reviews_page">1</a></div> 
        <div class="page2"><a href="#" class="reviews_page">2</a></div>
        <div class="page3"><a href="#" class="reviews_page">3</a></div>
        <div class="page4"><a href="#" class="reviews_page">4</a></div>
        <div class="page5"><a href="#" class="reviews_page">5</a></div>
        <div class="page_next"><a href="#" class="reviews_page_next">Следующая</a></div>

   </div>






</div>


</section>







<?php get_footer(); ?>