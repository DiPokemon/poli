<?php
/*
Template Name: Взрослый и детский травмпункт
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<section>
        <div class="container depart-travmpunkt">
            <div class="title-depart">
                <h2><?php echo get_the_title(); ?></h2>
            </div>
            <?php foreach($head_of_department as $item) :?>
            <div class="header-card">
                <div class="card-img">
                    <img width="152px" height="177px" src="<?=$item['profile_pic']?>" alt="">
                </div>
                <div class="card-text">
                    <h4><?=$item['job_title']?>
                        <br>
                        <span> <?=$item['name']?></span>
                    </h4>
                    <p><?=nl2br(htmlspecialchars($item['inf']))?></p>
                </div>
            </div>
            <?php endforeach ;?>
            <div class="info">
               <div class="info-style ">
                     <?php foreach($general_inf2 as $item) :?>
                        <p><span><?=$item['sub_title_location']?></span> <?=$item['location']?></p>
                     </div>
                     <div class="info-style">
                        <h4><b><?=$item['sub_title_number_adults']?></b> </h4>
                        <p><li><?=$item['number_adults']?></li></p>
                        <p><li><?=$item['number_children']?></li></p>
                     </div>
                     <div class="info-style">
                        <h4><b><?=$item['sub_title_working_hours_adults']?></b></h4>
                        <p><li><?=$item['working_hours_adults']?></li></p>
                        <p><li><?=$item['working_hours_children']?></li></p>
                     </div>
                     <div class="info-style">
                        <h4><b><?=$item['sub_title_working_hours_adults_repeat']?></b></h4>
                        <p><li><?=$item['working_hours_adults_repeat']?></li></p>
                        <p><li><?=$item['working_hours_children_repeat']?></li></p>
                     </div>
                     <div class="info-style info-style_width">
                        <h4><b> <?=$item['sub_title_content_adults']?></b></h4>
                        <p><li><?=$item['content_adults']?></li></p>
                        <p><li><?=$item['content_children']?></li></p>
                        <?php endforeach ;?>
                  </div>
                  <div class="info-style info-style_width_profile">
                     <h4><b> <?php echo carbon_get_the_post_meta('sub_title_profile'); ?> </b></h4>
                     <ul> 
                  <?php foreach($profile as $item) :?>
                  <p class="info-text"><li><?=nl2br(htmlspecialchars($item['profile']))?></li></p>
         
                     <?php endforeach ;?>
                     </ul>

                  </div>
               </div>
               
               
               <div class="cards">
                  <?php foreach($travmpunkt_image as $item) :?>
                  <div class="twise-card">
                     <img src="<?=$item['image']?>"   alt="">
                  </div>
                  <?php endforeach ;?>

               </div>



               <div class="display-flex">
               <?php $count = 0; ?>
               <?php foreach($travmpunkt_staff as $item) :?>
                     <div class="cards-for-text">
                        <h3><?=$item['name']?></h3>
                        <span class="job-title"><?=$item['job_title']?></span>
                        <p><?=nl2br(htmlspecialchars($item['inf']))?></p>
                     </div>
                     
                     <?php $count++; ?>
                     
                     <?php if ($count % 2 === 0) : ?>
                        </div><div class="display-flex">
                     <?php endif; ?>
               <?php endforeach ;?>
               </div>

        </div>
    </section>
    
    <?php get_footer(); ?>