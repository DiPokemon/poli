<?php
/*
Template Name: Main page
*/
?>
<?php get_header(); ?>

<?php include 'template-parts/variables.php' ?>

<?php if ($main_banners) :?>
    <section>
        <div class="">
            <div class="slider_wrapper">
            <div class="main_banner">
                <?php foreach( $main_banners as $banner ) : ?>
                    <?php if ($banner['main_banner_url']) : ?>
                        <a href="<?=$banner['main_banner_url']?>" class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </a>
                    <?php else : ?>
                        <div class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
            </div>
        </div>
    </section>
<?php endif; ?>




<section class="departments">
    <div class="departmens_container container">
        <h2 class="departmens_title"><a href="#" class="departmens_title-link"><?php echo carbon_get_theme_option('departments'); ?></a></h2>
        <div class="departmens_body">
            <div class="hospital_left_column">
                <h3 class="hospital_subtitle"><a href="#" class="hospital_subtitle-link"><?= get_category( 1, ARRAY_A)['name']; ?></a></h3>

                <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 1,
                    'orderby' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <div class="hospital_items">
                        <a href="#" class="hospital_items-link"><?php the_title(); ?></a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
                
            </div>


            <div class="Other_right_column">
            <h3 class="other_office_subtitle"><a href="#" class="other_office_subtitle-link"><?= get_category( 5, ARRAY_A)['name']; ?></a></h3>

            <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 5,
                    'orderby' => 'ASC',
                    'post_type' => 'post',
                    'suppress_filter' => true
                ]);



                foreach ($posts as $post) {
                    setup_postdata ($post);
                    ?>
                    <div class="other_office_items">
                        <a href="#" class="other_office_items-link"><?php the_title(); ?></a>
                    </div>
                    <?php
                }
            wp_reset_postdata();
            ?>


            </div>
        </div>
    </div>
</section>






<section class="important_information">
        <div class="important_information_container container">
                <h3 class="important_information_title"><a href="#" class="important_information_title-link"><?= get_category( 10, ARRAY_A)['name']; ?></a></h3>
        </div>

        <?php if ($main_banners) :?>
    <section>
        <div class="">
            <div class="slider_wrapper">
            <div class="main_banner">
                <?php foreach( $main_banners as $banner ) : ?>
                    <?php if ($banner['main_banner_url']) : ?>
                        <a href="<?=$banner['main_banner_url']?>" class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </a>
                    <?php else : ?>
                        <div class="banner">
                            <img class="main_banner_desk" src="<?=$banner['main_banner_desk']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                            <img class="main_banner_mob" src="<?=$banner['main_banner_mob']?>" alt="<?=$banner['main_banner_alt']?>" title="<?=$banner['main_banner_title']?>">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
            </div>
        </div>
    </section>
<?php endif; ?>



</section>


<section class="news">
   <div class="news_container container">
       <h3 class="news_title"><a href="#" class="news_title-link"><?= get_category( 9, ARRAY_A)['name']; ?></a></h3>
       
       <div class="news_body">
           <div class="news_posts">
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
                    <div class="news_posts_items">
                        <a href="#" class="news_posts_items-link"><?php the_title(); ?></a>
                    </div>
                    <?php
                }
            wp_reset_postdata();
            ?>
           </div>
           <div class="news_img">

                   
            
                 '<img src=" <?php echo carbon_get_theme_option( $custom_image ); ?> " alt="Пользовательское изображение">';
            



            </div>
       </div>
       <div class="news_buttom"></div>




   </div> 

</section>

<section class="gallery">

</section>
<section class="contacts">

</section>






<?php get_footer(); ?>