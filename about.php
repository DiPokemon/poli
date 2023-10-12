<?php
/*
Template Name: Шаблон страницы О больнице
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section>
<?php if ($about_ambulances) :?>
  <?php foreach($about_ambulances as $about_ambulance):?>
   <div class="about_container container">
      <h2 class="about_title font_w700_s60"><?php the_title(); ?></h2>

      <img src="<?=$about_ambulance['about_page_image']?>" />

      <div class="text_top font_w400_s18">
          <p> <?=nl2br(htmlspecialchars($about_ambulance['about_info']))?> </p>
        </div>
        <br>
        <?php endforeach; ?>
      <?php endif; ?>

<!--------------------------------------------------  -->
<?php if ($about_banners) :?>
  <!-- <div class="about_slider_top">
  <?php foreach($about_banners as $banner):?>
      <div class="slider__item">
          <div>
            <img class="about_banner_desk" src="<?=$banner['about_banner_desk']?>" alt="<?=$banner['about_banner_alt']?>" title="<?=$banner['about_banner_title']?>" width="290" height="430">
      </div>
    </div>

    <?php endforeach;?>
  </div> -->
<?php endif;?>
<!-- ------------------------------------------------ -->


<?php
$about_banners = carbon_get_the_post_meta('about_banners');

if ($about_banners) {
    echo '<div class="about_image_block">';
    foreach ($about_banners as $banner) {
        // echo '<div class="about_image_item">';
        // echo '<div>';
        echo '<div class="about_image_item"><img class="about_banner_desk" src="' . esc_url($banner['about_banner_desk']) . '" alt="' . esc_attr($banner['about_banner_alt']) . '" title="' . esc_attr($banner['about_banner_title']) . '" width="290" height="430"></div>';
        // echo '</div>';
        // echo '</div>';
    }
    echo '</div>';
}
?>





<!-- ------------------------------------------------- -->


      <div class="text_bottom font_w400_s18">
      <?=nl2br(htmlspecialchars($about_ambulance['about_info2']))?>


</div>
      <h3 class="subtitle_top font_w700_s35"><?php echo carbon_get_the_post_meta('sub_title_licenses'); ?></h3>
      <div class="about_slider_bottom">
        <?php if ($licenses) :?>
          <?php foreach($licenses as $license) :?>
        <div class="slider__item">
            <a href="<?=$license['license_link']?>"> <img src="<?=$license['license_image']?>" alt="img"></a>
        </div>
          <?php endforeach ;?>
        <?php endif ;?>
       </div>

      <h3 class="subtitle_bottom font_w700_s35"><?php echo carbon_get_the_post_meta('sub_title_hospital'); ?></h3>   
      <!-- <style>
        .block_item {
          width: 290px; 
          height: 110px; 
          text-align: center; 
          display: flex;
          justify-content: center;
          align-items: center;
        }
      </style> -->
          <div class="block_row">
          <?php if ($bottom_slider) :?>
            <?php foreach($bottom_slider as $slider) :?>

      <div class="block_item font_w600_s18"><a href="<?=$slider['url']?>"><?=$slider['title']?></a></div>
              
            <?php endforeach ;?>
          <?php endif ;?> 
          
          </div>

      







   </div>
</section>













<?php get_footer(); ?>