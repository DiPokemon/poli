<?php
/*
Template Name: Шаблон страницы Вакансии
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<!--  -->

<section class="vacancies">
    <div class="container">
    <div class="vacancies_container ">
        <h2 class="vacancies_title font_w700_s60"><?php the_title(); ?></h2>
        <?php foreach ($general_inf as $general) :?>
        <div class="vacancies_contact" >
            <div class="vacancies_contact_item  block1"><p class="vacancies_contact_item_top"><?=$general['sub_title_org_name']?></p> <span class="vacancies_contact_item_down"><?=$general['org_name']?></span></div>
            <div class="vacancies_contact_item  block2" ><span class="vacancies_contact_item_top"><?=$general['sub_title_addres']?></span><span class="vacancies_contact_item_down"><?=$general['addres']?></span></div>
            <div class="vacancies_contact_item  block3"><p class="vacancies_contact_item_top"><?=$general['sub_title_number']?></p><span class="vacancies_contact_item_down"><?=$general['number']?></span></div>  
        </div>
        <?php endforeach ;?>
        <div class="vacancies_block">
            <?php foreach ($vacancies as $vacancie) :?>
            <div class="vacancies_block_item">
                <h3 class="vacancies_block_title"><?=$vacancie['title']?></h3>
                <div class="vacancies_block_text"><b><?=$vacancie['sub_title_looking_for']?></b><?=$vacancie['looking_for']?><br>
                    <b><?=$vacancie['sub_title_job_type']?> </b><?=$vacancie['job_type']?><br>
                    <b><?=$vacancie['sub_title_salary']?></b><?=$vacancie['salary']?><br>
                    <b><?=$vacancie['sub_title_schedule']?> </b><?=$vacancie['schedule']?><br>
                    <b><?=$vacancie['qualification']?></div>
                </div>
                <?php endforeach ;?>
        </div>
        <div class="vacancies_data">
            
                <?php foreach($bottom_inf as $inf) :?>
            <p class="font_w400_s18"><?=$inf['sub_title1_hr']?></p>        
            <p class="font_w400_s18"><?=$inf['sub_title2_hr']?><?=$inf['hr']?></p>
                <?php endforeach ;?>
        </div>
    </div>
</div>
</section>



<?php get_footer(); ?>