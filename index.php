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
      </p>
    </article>

    <section id="post-<?php the_ID(); ?>" <?php post_class('p-order'); ?> class="p-order">
      <ul class="p-order__items">

        <?php get_template_part('loop', 'main'); ?>

      </ul>
    </section>

    <section class="p-page-nation">
      <?php wp_pagenavi(); ?><!-- plugin pagenation -->
    </section>


    これはindex.phpです

</main>
<!-- l-container__left  -->

</div>
</div>
<!--l-main__container-->

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>