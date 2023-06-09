<?php
/*
Template Name: Отделения Городской больницы №4 
*/
?>
<?php get_header(); ?>

<?php include 'template-parts/variables.php' ?>

    <section>
        <div class="container">
            <div class="title-depart">
                <h1>Отделения Городской больницы №4 </h1>
            </div>
            <div class="for-flex">
                <div class="search">
                    <button type="submit" class="search-button">
                        <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/otdelenie/Vector.png"
                            alt="Search" class="search-icon">
                    </button>
                    <input type="text" placeholder="Поиск" class="search-input">
                </div>
            </div>

            <div class="title-stacionar">
                <h2>Стационар</h2>
            </div>
        </div>

        <div class="container">
            <!-- card serction -->

            <div class="container">
                <div class="display-flex">
                    <?php foreach($depart_hospital as $item) :?>
                    <div class="card-text-img"> 
                            <a href="<?=$item['url']?>"><img src="<?=$item['image']?>"   alt="img"></a>
                            <p> <br><br><?=$item['name']?></p>
                        </div>
                        <?php endforeach ;?>
                    </div>
            </div>
        <div class="container">

            <div class="title-otherdepart">
                <h2>Другие отделения</h2>
            </div>


            <!-- card serction -->

            <div class="container">
                <div class="display-flex">
                    <?php foreach($other_departs as $item) :?>
                    <div class="card-text-img"> 
                        <a href="<?=$item['url']?>"><img src="<?=$item['image']?>"   alt="img"></a>
                            <p> <br><br><?=$item['name']?></p>
                        </div>
                        <?php endforeach ;?>
                    </div>
            </div>
        </div>





    </section>
    
    <?php get_footer(); ?>