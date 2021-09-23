<?php get_header(); ?>
<main>
  <section class="p-mainvisual">
    <div class="p-mainvisual__wrapper">
      <div class="p-mainvisual__layer--archive">
        <h2 class="p-mainvisual__title--font-lg c-title-text">Menu:</h2>
        <p class="p-mainvisual__sub-title"><?php echo single_cat_title('', false); ?></p>
      </div>
    </div>
  </section>

  <div class="c-section__container--mb">
    <article class="p-article">
      <h2 class="p-article__title">当店の人気シリーズ</h2>
      <p class="p-article__text">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium dolores minima distinctio expedita aut quos quaerat labore ea, asperiores et, alias mollitia? Ad, quibusdam porro neque tenetur culpa dignissimos? Deserunt.
        こちらはArchive-item.php
      </p>

      <!-- <?php $cat = single_cat_title('', false) ?>
        <?php
        if ($cat == "チーズバーガー") :
        ?>
          <?php get_template_part('recomendation_cheese'); ?>

        <?php else : ?>
      <div class="col-full">
        <div class="wrap-col">
          <p class="p-branch__search-result">検索キーワードに該当する記事がありませんでした。</p>
        </div>
      </div>

    <?php
        endif;
    ?> -->

      </p>
    </article>

    <section id="post-<?php the_ID(); ?>" <?php post_class('p-order'); ?> class="p-order">
      <ul class="p-order__items">

        <?php get_template_part('loop', 'sub'); ?>

      </ul>
    </section>

    <section class="p-page-nation">
      <!-- <div class="p-page-nation__wapper--mobile"> -->

        <!-- <a href="#">
          <span class="p-page-nation__text--pre">prev</span>
        </a>
        <a href="#" class="p-page-nation__text--next">next</a> -->
      <!-- </div> -->
      <!-- <div class="p-page-nation__wapper--pc"> -->
        <!-- <div class="p-page-naiton__page-number">page 1/10</div>
        <ul class="p-page-nation__items">
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">1</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">2</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">3</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">4</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">5</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">6</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">7</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">8</a>
          </li>
          <li class="p-page-nation__item">
            <a class="p-page-nation__link" href="#">9</a>
          </li>
        </ul> -->

        <?php wp_pagenavi(); ?><!-- plugin pagenation -->


      </div>
    </section>
    こちらはArchive-item.php
</main>
<!-- l-container__left  -->

</div>
</div>
<!--l-main__container-->

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>