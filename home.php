<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>


<section class="slider">
<div class="your-class">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
</div>






<br>
<br>
<br>
<br>
<div>Slider</div>
<br>
<br>
<br>
<br>
<br>
</section>




<section class="departments">
    <div class="departmens_container">
        <h2 class="departmens_title"><a href="#" class="departmens_title-link"><?php echo carbon_get_theme_option('departments'); ?></a></h2>
        <div class="departmens_body">
            <div class="hospital_left_column">
                <h3 class="hospital_subtitle"><a href="#" class="hospital_subtitle-link"><?= get_category( 1, ARRAY_A)['name']; ?></a></h3>

                <?php
                $posts = get_posts([
                    'numberposts' => -1,
                    'category' => 7,
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
                <div class="other_office_items"><a href="#" class="other_office_items-link"><?php echo carbon_get_theme_option('title_office_hospital'); ?></a></div>
            </div>
        </div>
    </div>
</section>






<section class="important information">

</section>


<section class="news">

</section>

<section class="gallery">

</section>
<section class="contacts">

</section>






<?php get_footer(); ?>