<?php
/*
Template Name: Шаблон страницы Реквизиты
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section class="requisites">
<div class="requisites_container container">
    <h2 class="requisites_title font_w700_s60"><?php the_title(); ?></h2>
    <div class="requisites_block">
        <?php foreach($requisite_items as $requisite) :?>
        <div class="requisites_item">
                <p class="requisites_item_title font_w600_s18"><b><?=$requisite['title']?></b></p>
                <?php if (!empty($requisite['subtitle'])):?>
                <p class="requisites_item_subtitle font_w600_s18"><b><?=(nl2br(htmlspecialchars($requisite['subtitle'])))?></b></p>
                <?php endif ;?>
                <p class="requisites_item_text font_w600_s18"><?=(nl2br(htmlspecialchars($requisite['text'])))?></p>
            </div>
        <?php endforeach ;?>
    </div>
</div>



</section>



<?php get_footer(); ?>