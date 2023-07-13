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
                <h1>Взрослый и детский травмпункт</h1>
            </div>
            <?php foreach($head_of_department as $item) :?>
            <div class="header-card">
                <div class="card-img">
                    <img width="152px" height="177px" src="<?=$item['profile_pic']?>" alt="">
                </div>
                <div class="card-text">
                    <h3><?=$item['job_title']?>
                        </br>
                        <span> <?=$item['name']?></span>
                    </h3>
                    <p><?=nl2br(htmlspecialchars($item['inf']))?></p>
                </div>
            </div>
            <?php endforeach ;?>
            <div class="info">
               <div class="info-style ">
                     <?php foreach($general_inf2 as $item) :?>
                        <p><span>Расположение:</span> <?=$item['location']?></p>
                     </div>
                     <div class="info-style">
                        <h3><b>Телефон:</b> </h3>
                        <p><li><?=$item['number_adults']?></li></p>
                        <p><li><?=$item['number_children']?></li></p>
                     </div>
                     <div class="info-style">
                        <h3><b>Режим работы:</b></h3>
                        <p><li><?=$item['working_hours_adults']?></li></p>
                        <p><li><?=$item['working_hours_children']?></li></p>
                     </div>
                     <div class="info-style">
                        <h3><b> Контингент обслуживания:</b></h3>
                        <p><li><?=$item['content_adults']?></li></p>
                        <p><li><?=$item['content_children']?></li></p>
                        <?php endforeach ;?>
                  </div>
                  <div class="info-style">
                     <h3><b> Профиль: </b></h3>
                  <?php foreach($profile as $item) :?>
                    <p class="info-text"><li><?=nl2br(htmlspecialchars($item['profile']))?></li></p>
                        <br>
                     <?php endforeach ;?>

                  </div>
               </div>
               
               
               <div class="cards">
                  <?php foreach($travmpunkt_image as $item) :?>
                  <div class="twise-card">
                     <img width="520px" height="346" src="<?=$item['image']?>"   alt="">
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


    <style>
        @media (max-width:1122px) {
    .header-card{
        width: 100%;
    }
    .cards-for-text{
        
        margin-right:0px;
        width: 100%;
    }
    
  }
       @media (max-width:1212px) {
    .header-card img {
      width: 150px;
         }

   .card-img img{
        width:500px;
    }
    .cards{
        justify-content:center !important;

    }
 }
 @media (max-width:1045px){
   .card-img img{
        width:400px;
    }
 }
 @media (max-width:845px){
   .card-img img{
        width:320px;
    }
 }
    </style>
    <?php get_footer(); ?>