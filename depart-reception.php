<?php
/*
Template Name: Приемное отделение стационара
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

    <section>
    <div class="container">
        <div class="title-depart">
        <h1><?php echo get_the_title(); ?></h1>
        </div>
        <!-- <div class="for-flex">
            <div class="search">
                <button type="submit" class="search-button">
                    <img src="http://test-dev1.ru/wp-content/uploads/otdelenie/Vector.png"
                        alt="Search" class="search-icon">
                </button>
                <input type="text" placeholder="Поиск" class="search-input">
            </div>
        </div> -->

        <div class="for-flex">
                <div class="search">
                    <button type="submit" class="search-button">
                        <img src="http://test-dev1.ru/wp-content/uploads/otdelenie/Vector.png"
                            alt="Search" class="search-icon">
                    </button>
                    <?= do_shortcode('[ivory-search id="392" title="AJAX Search Form"]'); ?>
                </div>
        </div>

    

        <div class="header-card">
            <?php foreach($receptions as $item) :?>
            <div class="card-img" >
                <img src="<?=$item['profile_pic']?>" alt="">
            </div>
            <div class="card-text">
                <h4><?=$item['job_title']?> <br>
                    <span><?=$item['name']?></span>
                </h4>
                <p><?=nl2br(htmlspecialchars($item['inf']))?></p>
            </div>
            
            <?php endforeach ;?>
        </div>


        <div class="wrapper_display-flex">
        <div class="display-flex">
        <?php $count = 0; ?>
        <?php foreach($receptions_staff as $item) :?>
            <div class="cards-for-text">
                <h3><?=$item['name']?></h3>
                <span class="job-title"><?=$item['job_title']?></span>
                <p><?=nl2br(htmlspecialchars($item['inf']))?></p>
                <span class="acreditation-title"><?=nl2br(htmlspecialchars($item['accreditation']))?></span>
            </div>
            
            <?php $count++; ?>
            
            <?php if ($count % 2 === 0) : ?>
                </div><div class="display-flex">
            <?php endif; ?>
        <?php endforeach ;?>
        </div>
        </div>



    </div>
</section>
<?php get_footer(); ?>