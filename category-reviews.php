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
        <div class="reviews_cf7"><?php echo do_shortcode('[contact-form-7 id="82" title="Контактная форма для страницы Отзывы"]'); ?></div>
        <?php
        if (!function_exists('pagination')) :

            function pagination($paged = '', $max_page = '')
            {
                $big = 999999999; // need an unlikely integer
                if (!$paged) {
                    $paged = get_query_var('paged');
                }

                if (!$max_page) {
                    global $wp_query;
                    $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
                }

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, $paged),
                    'total' => $max_page,
                    'mid_size' => 1,
                    'prev_text' => __('«'),
                    'next_text' => __('»'),
                    'type' => 'list'
                ));
            }
        endif;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $reviews_posts = new WP_Query(array(
            'category_name' => 'reviews',
            'post_status' => 'publish',
            'post_type' => 'post',
            'posts_per_page' => 3,
            'paged' => $paged,
            'orderby' => 'meta_value_num',
            'meta_key' => 'post_views_count',
        ));
        ?>

        <?php if ($reviews_posts->have_posts()) : ?>
            <div class="reviews_column font_w400_s18">
                <?php while ($reviews_posts->have_posts()) : $reviews_posts->the_post(); ?>

                    <div class="reviews_item">
                        <div class="reviews_item_title"><?php the_title(); ?></div>
                        <div class="reviews_item_text"><?php the_content(); ?></div>
                    </div>

                <?php endwhile; ?>
                <div class="pagination">
                    <?php pagination($paged, $reviews_posts->max_num_pages); // Pagination Function ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>