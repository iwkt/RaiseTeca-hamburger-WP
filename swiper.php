<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <!-- slide1 -->
      <div class="p-mainvisual__layer--index" style="
        /* background: url(<?php the_field('mainvisual1'); ?>); */
        background: url(<?php echo esc_url(get_theme_file_uri("./assets/images/mv_main@2x.jpg")); ?>); 
        background-position: 50% 50%;
        background-size: cover;
      ">
        <h2 class="p-mainvisual__title c-title-text c-title-text">Raise Burger</h2>
        <!-- <h2 class="p-mainvisual__title c-title-text c-title-text"><//?php the_field('pagettl1'); ?></h2> -->
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide2 -->
      <div class="p-mainvisual__layer--index" style="
          /* background: url(<?php the_field('mainvisual2'); ?>); */
          background: url(<?php echo esc_url(get_theme_file_uri("./assets/images/mv_egg_orange.jpg")); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text">Fresh Salada</h2>
        <!-- <h2 class="p-mainvisual__title c-title-text c-title-text"><//?php the_field('pagettl2'); ?></h2> -->
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide3 -->
      <div class="p-mainvisual__layer--index" style="
          /* background: url(<?php the_field('mainvisual3'); ?>); */
          background: url(<?php echo esc_url(get_theme_file_uri("./assets/images/burger_poteto_salada.jpg")); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text">みんなでおいしい</h2>
        <!-- <h2 class="p-mainvisual__title c-title-text c-title-text"><//?php the_field('pagettl3'); ?></h2> -->
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide4 -->
      <div class="p-mainvisual__layer--index" style="
          /* background: url(<?php the_field('mainvisual4'); ?>); */
          background: url(<?php echo esc_url(get_theme_file_uri("./assets/images/salad-2068220_1920.jpg")) ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text">Helthy Style</h2>
        <!-- <h2 class="p-mainvisual__title c-title-text c-title-text"><//?php the_field('pagettl4'); ?></h2> -->
      </div>
    </div>
  </div>
</div>