<?php get_header(); ?>
<main>

  <section class="p-mainvisual">
    <div class="p-mainvisual__wrapper">
      <div class="p-mainvisual__layer--wide" style="
          background: url(<?php the_field('mainvisual'); ?>);
          background-position: 50% 50%;
          background-size: cover;
        ">
        <h2 class="p-mainvisual__title--font-lg c-title-text"><?php echo get_the_title(); ?></h2>
      </div>
    </div>
  </section>

  <p class="damy">single.php</p>
  <div class="c-section__container--mb">
    <article class="p-article">
      <h2 class="p-article__title p-product__aticle__title"><?php the_field('サブタイトル'); ?></h2>
      <p class="p-article__text">
        <?php the_field('キャッチコピー'); ?>これはカスタムフィールドplug-in
        <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium dolores minima distinctio expedita aut quos quaerat labore ea, asperiores et, alias mollitia? Ad, quibusdam porro neque tenetur culpa dignissimos? Deserunt.-->
      </p>
      <!-- <ul class="p-article__items">
        <li class="p-article__item">
          <h3>見出しh3</h3>
        </li>
        <li class="p-article__item">
          <h4>見出しh4</h4>
        </li>
        <li class="p-article__item">
          <h5>見出しh5</h5>
        </li>
        <li class="p-article__item">
          <h6>見出しh6</h6>
        </li>
      </ul> -->
    </article>

    <section class="p-product__quote p-quote c-section__container--mb">
      <p class="p-product__quote__text"><?php the_field('引用'); ?></p>
      <div class="p-quote__sorce-wrapper">
        <span class="p-quote__sorce" 　>出典元：</span><a class="p-quote__sorce__link" href="#">○○○○○○○○○○○○</a>
      </div>
    </section>


    <section class="p-product__img-wide u-mb--30">
      <img class="p-product__img" src="./assets/images/buger_potato_wide@2x.jpg" alt="">
    </section>

    <section class="p-product__media">
      <ul class="p-product__media__items">
        <li class="p-product__media__item">
          <div class="p-media">
            <figure class="p-media__img-wrapper">
              <img class="p-media__img" src="<?php the_field('記事1用画像'); ?>" alt="">
            </figure>
            <div class="p-media__body">
              <p class="p-media__text p-product__description">
                <?php the_field('記事1'); ?>
              </p>
            </div>
          </div>
        </li>
        <li class="p-product__media__item">
          <div class="p-media--right">
            <figure class="p-media__img-wrapper">
              <img class="p-media__img" src="<?php the_field('記事2用画像'); ?>" alt="">
            </figure>
            <div class="p-media__body">
              <p class="p-media__text p-product__description">
                <?php the_field('記事2'); ?>
              </p>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <!--  ループ開始  -->

        <div class="date"><?php echo get_the_date('Y.m.d'); ?></div>
        <div class="ttl"><?php the_title(); ?></div>
        <div class="ttl"><?php the_content(); ?></div>

        <?php
        if (post_images()) :
          $images = post_images();
          // foreach ($images as $img) :
        ?>
          <img src="<?php echo $images[1]; ?>" alt="<?php the_title(); ?>">

        <?
        endif; ?>

    <?php endwhile;
    endif; ?>
    <!--  /ループ終わり -->

    <section class="p-product">
      <div class="p-product-image__wrapper">
        <img src="./assets/images/buger_potato@2x.jpg" alt="" class="p-product-image__normal-wide">
        <!-- <ul class="p-product-image__items">
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
          <li class="p-product-image__item"><a href="#"><img src="./assets/images/buger_potato@2x.jpg" alt=""></a></li>
        </ul> -->
      </div>
      <div class="p-product-text__wrapper">
        <ol class="p-product-text__items">
          <li class="p-product-text__item">リストリストリスト</li>
          <li class="p-product-text__item">リストリストリスト
            <ol class="p-product-text__items p-product-text__items--child">
              <li class="p-product-text__item">リスト2リスト2リスト2</li>
              <li class="p-product-text__item">リスト2リスト2リスト2</li>
            </ol>
          </li>
        </ol>
        <ol class="p-product-text__items">
          <li class="p-product-text__item">リストリストリスト</li>
          <li class="p-product-text__item">リストリストリスト</li>
        </ol>
      </div>
      <div class="p-product-text__wrapper--decoration-none">
        <ul class="p-product-text__items">
          <li class="p-product-text__item">リストリストリスト</li>
          <li class="p-product-text__item">リストリストリスト
            <ul class="p-product-text__items p-product-text__items--child">
              <li class="p-product-text__item">リスト2リスト2リスト2</li>
              <li class="p-product-text__item">リスト2リスト2リスト2</li>
            </ul>
          </li>
        </ul>
        <ul class="p-product-text__items">
          <li class="p-product-text__item">リストリストリスト</li>
          <li class="p-product-text__item">リストリストリスト</li>
        </ul>
      </div>
    </section>
    <section class="p-product-code">
      <!-- <pre class="c-code__pre p-product__pre"> -->
      <!-- <code class="c-code"> -->
      <ul class="p-product-code__items">
        <li class="p-product-code__item">&lt;html&gt;</li>
        <li class="p-product-code__item">&lt;head&gt;</li>
        <li class="p-product-code__item">&lt;/head&gt;</li>
        <li class="p-product-code__item">&lt;body&gt;</li>
        <li class="p-product-code__item">&lt;/body&gt;</li>
        <li class="p-product-code__item">&lt;/html&gt;</li>
      </ul>
      <!-- </code> -->
      <!-- </pre> -->
    </section>

    <section　class="p-product__table-section">
      <table border="1" class="p-product__table">
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
      </table>
    </section>
    <button class="c-gradietion-btn--long p-product__btn-long">ボタン</button>
    <section class="p-product__text-bold">
      <p>boldboldboldboldboldboldbold</p>
    </section>

  </div>
  <!--c-section__container-->
</main>

</div>
<!--l-main__container-->
</div> <!-- l-container__left  -->

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>