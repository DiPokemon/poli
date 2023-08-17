<?php
/*
Template Name: Шаблон страницы Отзывы
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

ЙЦУЦЙУ

<section class="page_reviews">
	<div class="page_reviews_container container">
	   <div class="reviews_title font_w700_s60">Отзывы</div>
	   <div class="reviews_cf7"><?php echo do_shortcode( '[contact-form-7 id="82" title="Контактная форма для страницы Отзывы"]' ); ?></div>

		<?php
			$reviews_posts = new WP_Query(array(
				'category_name' => 'reviews',
				'post_status' => 'publish',
				'post_type' => 'post',				
				'posts_per_page' => 7,
				'paged' => get_query_var('paged'),				
			));
		?>	

		<?php if ($reviews_posts->have_posts()): ?>
		   <div class="reviews_column font_w400_s18">
			  <?php while($reviews_posts -> have_posts()) : $reviews_posts -> the_post(); ?>

				 <div class="reviews_item">
					<div class="reviews_item_title"><?php the_title(); ?></div>
					<div class="reviews_item_text"><?php the_content(); ?></div>
				 </div>

			  <?php endwhile; ?>
			   <?php posts_nav_link(); ?>
		   </div>
			<?php wp_reset_query(); ?>
		<?php endif; ?>

		<!--
	   <div class="reviews_href">
			<div class="page1"><a href="#" class="reviews_page">1</a></div> 
			<div class="page2"><a href="#" class="reviews_page">2</a></div>
			<div class="page3"><a href="#" class="reviews_page">3</a></div>
			<div class="page4"><a href="#" class="reviews_page">4</a></div>
			<div class="page5"><a href="#" class="reviews_page">5</a></div>
			<div class="page_next"><a href="#" class="reviews_page_next">Следующая</a></div>
	   </div>
		-->
	</div>
</section>

<section>
<?php if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); ?>
		<?php the_title()?>
	<?php endwhile; ?>
	
	<?php the_posts_pagination();?>
	
	<?php else: ?>
	
	<p>Нет постов в цикле.</p>
	
<?php endif; ?>
</section>





<?php get_footer(); ?>