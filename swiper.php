<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <!-- slide1 -->
      <div class="p-mainvisual__layer--index" style="
        background: url(<?php the_field('mainvisual1'); ?>);
        background-position: 50% 50%;
        background-size: cover;
      ">
        <h2 class="p-mainvisual__title c-title-text c-title-text"><?php the_field('pagettl1'); ?></h2>
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide2 -->
      <div class="p-mainvisual__layer--index" style="
          background: url(<?php the_field('mainvisual2'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text"><?php the_field('pagettl2'); ?></h2>
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide3 -->
      <div class="p-mainvisual__layer--index" style="
          background: url(<?php the_field('mainvisual3'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text"><?php the_field('pagettl3'); ?></h2>
      </div>
    </div>
    <div class="swiper-slide">
      <!-- slide4 -->
      <div class="p-mainvisual__layer--index" style="
          background: url(<?php the_field('mainvisual4'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title c-title-text c-title-text"><?php the_field('pagettl4'); ?></h2>
      </div>
    </div>
  </div>
</div>