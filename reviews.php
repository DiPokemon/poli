<?php
/*
Template Name: Шаблон страницы Отзывы_old
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="page_reviews">
<div class="page_reviews_container container">
   <h2 class="reviews_title font_w700_s60"><?php the_title(); ?></h2>
   <div class="reviews_cf7"><?php echo do_shortcode( '[contact-form-7 id="82" title="Контактная форма для страницы Отзывы"]' ); ?></div>
   <div class="reviews_column font_w400_s18">
    <?php foreach($reviews_items as $items) :?>
       <div class="reviews_item">
           <div class="reviews_item_title"><?=$items['name']?></div>
           <div class="reviews_item_text"><?=(nl2br(htmlspecialchars($items['text'])))?></div>
       </div>
    <?php endforeach ;?>  
   </div>
   <!-- <div class="reviews_href">
        <div class="page1"><a href="#" class="reviews_page">1</a></div> 
        <div class="page2"><a href="#" class="reviews_page">2</a></div>
        <div class="page3"><a href="#" class="reviews_page">3</a></div>
        <div class="page4"><a href="#" class="reviews_page">4</a></div>
        <div class="page5"><a href="#" class="reviews_page">5</a></div>
        <div class="page_next"><a href="#" class="reviews_page_next">Следующая</a></div>

   </div> -->


   <?php
$reviews_category = get_category_by_slug('reviews');
$cat_reviews_id = $reviews_category->term_id;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
   'cat' => $cat_reviews_id,
   'post_type' => 'post',
   'posts_per_page' => 7,
   'paged' => $paged
);

$reviews_query = new WP_Query($args);
?>

<div class="reviews_column">
   <?php while ($reviews_query->have_posts()) : $reviews_query->the_post(); ?>

      <div class="reviews_item">
         <div class="reviews_item_title font_w400_s18"><?= the_title() ?></div>
         <div class="reviews_item_text font_w400_s18"><?= the_content(); ?></div>
      </div>

   <?php endwhile; ?>
</div>

<div class="pagination">

<?php
   echo paginate_links(array(
      'total' => $reviews_query->max_num_pages,
      'current' => $paged,
      'prev_text' => __('Предыдущая', 'default'),
      'next_text' => __('Следующая', 'default')
   ));
   ?>




   
</div>



<?php wp_reset_postdata(); ?>




</div>


   
   






</section>










<?php get_footer(); ?>