<?php
/*
Template Name: Общая информация о стационаре
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

    <section>
    <div class="container stacionar-depart">
        <div class="title-depart">
            <h1><?php echo get_the_title(); ?></h1>
        </div>
        <?php foreach($general_information as $item) :?>
        <div>
            <p><span class="adress"><span><?=$item['title'] ?>   </span><?=$item['argument'] ?></span></p>
        </div>
        <?php endforeach ;?>
        <div class="for-margin">
        <?php foreach($part_of as $item) :?> <p> <span class="adress"><span><?=nl2br(htmlspecialchars($item['part_of_information']))?></span></br></p><?php endforeach ;?>
            <?php foreach($floor_information as $item) :?><p> <?=$item['information'] ?> </p> <?php endforeach ;?>
        </span>
        </div>
        <?php foreach($more_information as $item) :?>
        <div class="block-info">
            
            <p><?=$item['more']?></p>
        <?php endforeach ;?>
        </div>


        <div class="cards">
            <?php foreach($images as $item) :?>
                <div class="twise-card">
                    <img src="<?=$item['image']?>"  alt="">
                </div>
            <?php endforeach ;?>
            
        </div>








    </div>
</section>
<?php get_footer(); ?>