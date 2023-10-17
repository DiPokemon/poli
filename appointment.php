<?php
/*
Template Name: Шаблон страницы Запись на приём
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="appointment">
    <div class="appointment_container container">
        <h2 class="appointment_title font_w700_s60"><?php the_title(); ?></h2>
        <div class="important2_container container">
       <h3 class="important2_title font_w700_s35"><?php echo carbon_get_the_post_meta('sub_title_importent_inf'); ?></h3>
       
       
       
       <div class="important2_body">
       
       <div class="important2_img">
           <?php if ('$appointments') :?>
            <?php foreach ($appointments as $appointment) :?>
       <img src="<?= $appointment['appointment_image'] ?>" alt="img">
       </div>
       
       
       <div class="important2_text font_w400_s18">
        <br>
        
       <p><?=$appointment['important_text']?></p>
       <br>
       <p><?=$appointment['sub_title_phone_number']?><br><b><?=$appointment['phone_number']?></b></p>
       
       </div>
       </div>

  </div>
        <p class="appointment_href font_w400_s18"><?=$appointment['sub_title_registration_url']?><b><a href="<?=$appointment['registration_url']?>"><?=$appointment['registration_url']?></a></b></p>
            <?php endforeach ;?>
           <?php endif ;?>
        <h3 class="appointment_subtitle2 font_w700_s35"><?php echo carbon_get_the_post_meta('sub_title_rules'); ?></h3>
        <p class="font_w400_s18"> <?php echo carbon_get_the_post_meta('sub_title_rules_info'); ?>

                <br>
                <br>
                <?php if ($rules):?>
                 <?php $iterationCount = 1 ?>
                    <?php foreach ($rules as $rule) :?>
                     <?=$iterationCount ?>. — <?=$rule['rule']?> <br>
                     <?php $iterationCount++ ?>
                    <?php endforeach ;?>
                <?php endif ;?>
            </p>
            <br>


            <?php if ($rules):?>
                 <?php $iterationCount = 1 ?>
                    <?php foreach ($rules as $rule) :?>
                         <?php if (!empty($rule['explaining'])): ?>
            <p class="font_w400_s18" style="    ">
                <?=$iterationCount ?>. - <?=nl2br(htmlspecialchars($rule['explaining']))?>
                <br>
                <br>
            </p>
                         <?php endif; ?>
                      <?php $iterationCount++ ?>
                  <?php endforeach ;?>
            <?php endif ;?>

    </div>
</section>







<?php get_footer(); ?>