<?php
/*
Template Name: Шаблон страницы Результаты СОУТ
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="page_sout">
    <div class="page_sout_container container">
        <h2 class="page_sout_title font_w700_s60"><?php the_title(); ?></h2>
        <div class="sout_block">
            <?php foreach($sout as $sout) :?>
            <div class="sout_item font_w600_s18"><a href="<?=$sout['url']?>"></a><?=$sout['title']?></div>
            <?php endforeach ;?>
    </div>
</section>



<?php get_footer(); ?>