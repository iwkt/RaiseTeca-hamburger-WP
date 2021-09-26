<?php get_header(); ?>
<main>

  <section class="p-mainvisual">
    <div class="p-mainvisual__wrapper">
      <div class="p-mainvisual__layer--wide" style="
          background: url(<?php the_field('mainvisual'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h1 class="p-mainvisual__title--font-lg--single c-title-text"><?php echo get_the_title(); ?></h1>
  </section>

  <div class="c-section__container--mb">

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <!--  ループ開始  -->
        <h2 class="p-card__sub-title--single"><?php the_field('サブタイトル'); ?></h2>
        <p class="p-card__text--single">
          <?php the_field('キャッチコピー'); ?>
        </p>
        <figure class="p-card__img-wrapper">
          <img class="p-card__img--single" src="<?php the_field('topImage') ?>">
        </figure>

        <section class="p-product__media--single">
          <ul class="p-product__media__items">
            <li class="p-product__media__item">
              <div class="p-media">
                <figure class="p-media__img-wrapper">
                  <img calss="p-media__img" src="<?php the_field('image1') ?>" alt="">
                </figure>
                <div class="p-media__body">
                  <p class="p-media__text p-product__description">
                    <?php the_field('article1') ?>
                  </p>
                </div>
              </div>
            </li>
            <li class="p-product__media__item">
              <div class="p-media--right">
                <figure class="p-media__img-wrapper">
                  <img calss="p-media__img" src="<?php the_field('image2') ?>" alt="">
                </figure>
                <div class="p-media__body">
                  <p class="p-media__text p-product__description">
                    <?php the_field('article2') ?>
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </section>

        <div class="ttl"><?php the_content(); ?></div>

    <?php endwhile;
    endif; ?>
    <!--  /ループ終わり -->

  </div>
  <!--c-section__container-->
</main>

</div>
<!--l-main__container-->
</div> <!-- l-container__left  -->

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>