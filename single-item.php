<?php get_header(); ?>
<main>

  <section class="p-mainvisual">
    <div class="p-mainvisual__wrapper">
      <div class="p-mainvisual__layer--wide" style="
          background: url(<?php the_field('mainvisual画像'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title--font-lg c-title-text"><?php echo get_the_title(); ?></h2>
      </div>
    </div>
  </section>

  <div class="c-section__container--mb">

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <!--  ループ開始  -->
        <div class="ttl"><?php the_content(); ?></div>

    <?php endwhile;
    endif; ?>
    <!--  ループ終わり -->

  </div>
  <!--c-section__container-->
</main>

</div>
<!--l-main__container-->
</div> <!-- l-container__left  -->

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>