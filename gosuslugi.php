<?php
/*
Template Name: Шаблон страницы Портал ГОСУСЛУГИ
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section class="page_gosuslugi">
<div class="page_gosuslugi_container container">
<h2 class="page_gosuslugi_title font_w700_s60">Портал ГОСУСЛУГИ</h2>
    <?php foreach($gosuslugi as $item) :?>
<h3 class="page_gosuslugi_subtitle font_w700_s35"><?=$item['title']?></h3>
<img  src="<?=$item['image']?>" alt="img" width="789px">


    <?php endforeach ;?>
</div>




</section>





<?php get_footer(); ?>