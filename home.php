<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>


<section class="slider">
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


<?php

$depar = carbon_get_theme_option( $post->ID, 'office_hospital', 'complex' );

?>

<!-- if ( ! empty( $depar ) ):  -->


<section class="departments">
    <div class="departmens_container">
        <h2 class="departmens_title"><a href="#" class="departmens_title-link"><?php echo carbon_get_theme_option('departments'); ?></a></h2>
        <div class="departmens_body">
            <div class="hospital_left_column">
                <h3 class="hospital_subtitle"><a href="#" class="hospital_subtitle-link"><?php echo carbon_get_theme_option('hospital'); ?></a></h3>
                <?php foreach ($depar as $divv) : ?>
                <div class="hospital_items"><a href="#" class="hospital_items-link"><?php echo $divv['title_office_hospital']; 
                    ?></a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="Other_right_column">
            <h3 class="other_office_subtitle"><a href="#" class="other_office_subtitle-link"><?php echo carbon_get_theme_option('other_departments'); ?></a></h3>
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