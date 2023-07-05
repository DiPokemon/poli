<?php
/*
Template Name: Шаблон страницы Администрация
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="administration">
    <div class="administration_container container">
        <h2 class="administration_title font_w700_s60">Администрация</h2>
        <?php foreach($head_doctor as $head) :?>

        <div class="administration_main">
            <div class="administration_main_image">
            <img src="<?=$head['doctor_image']?>" alt="img" style="width: 238px; height: 300px;">
            </div>
            <div class="administration_main_text">
                <h3 class="administration_text_subtitle font_w700_s35">Главный врач:<br><?=$head['doctor_name']?></h3>
                <div class="administration_text">Телефон: <span class="admin_contact_information"><?=$head['number']?></span>, факс: <span class="admin_contact_information"><?=$head['fax']?></span><br> E-mail: <span class="admin_contact_information"><?=$head['enail']?></span><br> Кабинет № <?=$head['room_number']?><br><br> Часы работы:<span class="admin_contact_information"> <?=$head['working_hours']?></span><br> Часы приема граждан:<span class="admin_contact_information"><br><?=nl2br(htmlspecialchars($head['business_hours']))?></span></div>
            </div>
        </div>
        <?php endforeach ;?>

        <?php foreach($staff_members as $staff) :?>

        <div class="administration_other">
            <div class="administration_position">
                <div class="administration_position_image"><img src="<?=$staff['picture']?>" alt="img" style="width: 132px; height: 157px;"></div>
                <div class="administration_position_content">
                    <div class="administration_position_title"><?=$staff['job']?></div>
                    <div class="administration_position_name"><?=$staff['name']?></div>
                    <div class="administration_position_text"><b>Телефон:</b> <?=$staff['number']?><br><b>Кабинет № <?=$staff['room_number']?></b><br> <b>Часы работы:</b><?=nl2br(htmlspecialchars($staff['working_hours']))?></div>

                </div>
            </div>
        </div>
        <?php endforeach ;?>

        <div class="administration_paycheck" >
        <?php if ($bottom_slider) :?>
            <?php foreach($bottom_slider as $slider) :?>
            <div class="administration_paycheck_item" style="width: 360px; height: 109px;">
                <div class="block_item font_w600_s18"><a href="<?=$slider['url']?>"><?=$slider['title']?></a></div>
            </div>
            <?php endforeach ;?>
        <?php endif ;?> 
        </div>
    </div>
</section>




<?php get_footer(); ?>