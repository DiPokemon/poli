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
        <h2 class="vacancies_title font_w700_s60">Вакансии</h2>
        <?php foreach ($general_inf as $general) :?>
        <div class="vacancies_contact" >
            <div class="vacancies_contact_item  block1"><p class="vacancies_contact_item_top">Наименование юридического лица:</p> <span class="vacancies_contact_item_down"><?=$general['org_name']?></span></div>
            <div class="vacancies_contact_item  block2" ><span class="vacancies_contact_item_top">Адрес:</span><span class="vacancies_contact_item_down"><?=$general['addres']?></span></div>
            <div class="vacancies_contact_item  block3"><p class="vacancies_contact_item_top">Контактный телефон:</p><span class="vacancies_contact_item_down"><?=$general['number']?></span></div>  
        </div>
        <?php endforeach ;?>
        <div class="vacancies_block">
            <?php foreach ($vacancies as $vacancie) :?>
            <div class="vacancies_block_item">
                <h3 class="vacancies_block_title"><?=$vacancie['title']?></h3>
                <div class="vacancies_block_text"><b>Необходимое количество работников: </b><?=$vacancie['looking_for']?><br>
                    <b>Характер работы: </b><?=$vacancie['job_type']?><br>
                    <b>Заработная плата: </b><?=$vacancie['salary']?><br>
                    <b>Режим работы: </b><?=$vacancie['schedule']?><br>
                    <b><?=$vacancie['qualification']?></div>
                </div>
                <?php endforeach ;?>
        </div>
        <div class="vacancies_data">
            <p class="font_w400_s18">«26» декабря 2022 г.</p>
                <?php foreach($bottom_inf as $inf) :?>
            <p class="font_w400_s18">Начальник отдела кадров ____________<?=$inf['hr']?></p>
                <?php endforeach ;?>
        </div>
    </div>
</div>
</section>



<?php get_footer(); ?>