<?php
/*
Template Name: Шаблон страницы О больнице
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>


<section>
<?php if ($about_ambulances) :?>
  <?php foreach($about_ambulances as $about_ambulance):?>
   <div class="about_container container">
      <h2 class="about_title font_w700_s60">О больнице</h2>

      <img src="<?=$about_ambulance['about_page_image']?>" />

      <div class="text_top font_w400_s18">
          <?=$about_ambulance['about_info'] ?>

      
      </div>
  <?php endforeach; ?>
<?php endif; ?>
      <div class="about_slider_top">
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/0090.png" alt="img">
        </div>
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/0186.png" alt="img">
        </div>
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/0055.png" alt="img">
        </div>
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/0131.png" alt="img">
        </div>
      </div>
      <div class="text_bottom font_w400_s18">
        Адрес: 344006, г. Ростов-на-Дону, пр. Богатяновский спуск, 27/160
      <br>
      <br>
        Главный врач: к.м.н., Пакус Дмитрий Игоревич
      <br>
      <br> 
        Справочные: 
      <br>
      
        Главного врача: 263-30-90, факс: 227-76-05, e-mail: gb4com@mail.ru
      <br>
      
        Приемное отделение: 263-50-64
      <br>
      
        Травмпункт: 263-40-23
      <br>
      <br>
        Общее количество коек: 230 (200 круглосуточных + 30 дневного стационара), в т.ч. 9 коек реанимации.
      <br>
      <br>
        Городская больница №4 является многопрофильным лечебно-профилактическим учреждением г. Ростов-на-Дону, включающим в себя стационар (круглосуточный и дневной): городской эндокринологический центр, терапевтическое отделение, кардиологическое отделение с центром кардиореабилитации, нефрологическое отделение с диализным залом. Неврологическое отделение с центром нейрореабилитации, взрослый и детский травмпункт,
      <br>
      <br>
        МБУЗ «ГБ №4 г. Ростова-на-Дону» является клинической базой для кафедры и кафедры внутренних болезней №3 Ростовского Государственного медицинского университета, организационно-методическим центром по постдипломному обучению врачей г. Ростов-на-Дону, Ростовской области и других регионов страны. Участвует в клинических испытаниях и внедрении новых технологий и лекарственных средств на Федеральном уровне.
      <br>
      <br>
        Больница осуществляет прием больных по следующим профилям: терапия, неврология, кардиология, нефрология, эндокринология. Ежегодно больница оказывает помощь более 6 тыс. пациентам.
      <br>
      <br>
        Горбольница №4 в рамках договоров на оказание медицинской помощи в системе обязательного медицинского страхования сотрудничает со следующими страховыми медицинскими организациями: ЗАО «Макс-М», ООО МСО «Панацея», СМО ООО «АльфаСтрахование — ОМС» филиал «АсСтра», Ростовский филиал ОАО «Страховая компания «СОГАЗ Мед», филиал ООО «Капитал-Мед».





</div>
      <h3 class="subtitle_top font_w700_s35">Лицензии на осуществление медицинской деятельности</h3>
      <div class="about_slider_bottom">
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/Group 247.jpg" alt="img">
        </div>
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/Group 246.jpg" alt="img">
        </div>
        <div class="slider__item">
            <img src="http://ce40725-wordpress-sxtw3.tw1.ru/wp-content/uploads/2023/05/Group 245.jpg" alt="img">
        </div>
              
       </div>
      <h3 class="subtitle_bottom font_w700_s35">Общественный совет больницы</h3>
      <div class="block_row">
           <div class="block_item font_w600_s18"><a href="#">Информация<br> на рассмотрения<br> жалоб 2015</a></div>
           <div class="block_item font_w600_s18"><a href="#">Информация<br> на рассмотрения<br> жалоб 2016</a></div>
           <div class="block_item font_w600_s18"><a href="#">Приказ 129 ОД</a></div>
           <div class="block_item font_w600_s18"><a href="#">Протокол №1</a></div>

      </div>


      







   </div>
</section>













<?php get_footer(); ?>