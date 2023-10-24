<?php
/*
Template Name: Шаблон страницы Администрация
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>

<section class="administration">
    <div class="administration_container container">
        <h2 class="administration_title font_w700_s60"><?php the_title(); ?></h2>
        <?php foreach($head_doctor as $head) :?>
            <div class="administration_main_main admin_desk_main ">  
        <div class="administration_main">
            <div class="administration_main_image">
            <img src="<?=$head['doctor_image']?>" alt="img" >
            </div>
            <div class="administration_main_text">
                <h4 class="administration_text_subtitle font_w700_s35"><?=$head['sub_title_position']?><br><?=$head['doctor_name']?></h4>
                <div class="administration_text"><?=$head['sub_title_telefon']?><span class="admin_contact_information"><?=$head['phone_number']?></span><?=$head['sub_title_fax']?><span class="admin_contact_information"><?=$head['fax']?></span><br><?=$head['sub_title_email']?><span class="admin_contact_information"><?=$head['email']?></span><br> <?=$head['sub_title_room']?><?=$head['room_number']?><br><br><?=$head['sub_title_work_hours']?><span class="admin_contact_information"> <?=$head['working_hours']?></span><br><?=$head['sub_title_office_hours']?><span class="admin_contact_information"><br><?=nl2br(htmlspecialchars($head['business_hours']))?></span></div>
            </div>
        </div>
        </div>


        <div class="administration_main_main admin_mob_main">     
        <div class="administration_main">
            <div class="administration_main_image">
            <img src="<?=$head['doctor_image']?>" alt="img" >
            </div>
            <div class="administration_main_text">
                <h4 class="administration_text_subtitle font_w700_s35"><?=$head['sub_title_position']?><br><?=$head['doctor_name']?></h4>
               
            </div>
        </div>
        <div class="administration_text"><?=$head['sub_title_telefon']?><span class="admin_contact_information"><?=$head['phone_number']?></span><?=$head['sub_title_fax']?><span class="admin_contact_information"><?=$head['fax']?></span><br><?=$head['sub_title_email']?><span class="admin_contact_information"><?=$head['email']?></span><br> <?=$head['sub_title_room']?><?=$head['room_number']?><br><br><?=$head['sub_title_work_hours']?><span class="admin_contact_information"> <?=$head['working_hours']?></span><br><br><?=$head['sub_title_office_hours']?><span class="admin_contact_information"><br><?=nl2br(htmlspecialchars($head['business_hours']))?></span></div>
    </div>







        <?php endforeach ;?>

        <?php foreach($staff_members as $staff) :?>

        <div class="administration_other administration_other_desk">
            <div class="administration_position">
                <div class="administration_position_image"><img src="<?=$staff['picture']?>" alt="img"></div>
                <div class="administration_position_content">
                    <h4 class="administration_position_title"><?=$staff['job']?></h4>
                    <h4 class="administration_position_name"><?=$staff['name']?></h4>
                    <div class="administration_position_text"><b><?=$staff['sub_title_number']?></b> <?=$staff['number']?><br><b><?=$staff['sub_title_room_num']?><?=$staff['room_num']?></b><br> <b><?=$staff['sub_title_working_hours']?></b><?=nl2br(htmlspecialchars($staff['working_hours']))?></div>

                </div>
            </div>
        </div>

        <div class="administration_other administration_other_mob">
            <div class="administration_position">
                <div class="administration_position_image"><img src="<?=$staff['picture']?>" alt="img"></div>
                <div class="administration_position_content">
                    <h4 class="administration_position_title"><?=$staff['job']?></h4>
                    <h4 class="administration_position_name"><?=$staff['name']?></h4>
                    

                </div>
            </div>
            <div class="administration_position_text"><b><?=$staff['sub_title_number']?></b> <?=$staff['number']?><br><b><?=$staff['sub_title_room_num']?><?=$staff['room_num']?></b><br> <b><?=$staff['sub_title_working_hours']?></b><?=nl2br(htmlspecialchars($staff['working_hours']))?></div>
        </div>



        <?php endforeach ;?>

        <div class="administration_paycheck" >
        <?php if ($bottom_slider) :?>
            <?php foreach($bottom_slider as $slider) :?>
            <div class="administration_paycheck_item">
                <div class="block_item font_w600_s18"><a href="<?=$slider['url']?>"><?=$slider['title']?></a></div>
            </div>
            <?php endforeach ;?>
        <?php endif ;?> 
        </div>
    </div>
</section>




<?php get_footer(); ?>