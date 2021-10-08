<?php get_header(); ?>

<?php

$plugins = array(
  "get_field" => "Advanced Custom Fields",
  "wp_pagenavi" => "PageNav"
);

foreach ($plugins as $plugin => $name) {

  if(!function_exists($plugin)){
    $alert = "<script type='text/javascript'>
      alert(
        'ごめんなさい。 \\nこのテーマにはプラグイン『${name}』が必要です。\\n ダウンロードしたのちに有効にしてくださいね');
       </script>";
    echo $alert;
    echo '<div class="message_error">';
    echo '<p>エラー：プラグイン' . $name . 'を有効にしてください</p>';
    echo '</div>';
  }
}
?>

<main>

  <section class="p-mainvisual">
    <?php get_template_part('swiper'); ?>
    <!-- <div class="p-mainvisual__wrapper">
      <div class="p-mainvisual__layer--index">
        <h2 class="p-mainvisual__title c-title-text">Raise Burger</h2>
      </div>
    </div> -->
  </section>

  <section class="p-branch c-section__container">
    <ul class="p-branch__wrapper">
      <li class="p-branch__item u-overLayer__parent">
        <?php
        // $takeout = get_term_by('slug', 'takeout', 'dep');
        $item_link = get_term_link('takeout', 'dep');
        ?>
        <a href="<?php echo $item_link; ?>">
          <!-- <a href=" #"> -->
          <div class="p-branch__for-hover">
            <img class="p-branch__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/takeout.jpg" />
            <div class="p-branch__layer u-overLayer__child u-center--column-sb">
              <h2 class="p-branch__item__title p-text-bar">Take Out</h2>
              <ul class="p-branch__boxs">
                <li class="p-branch__textBox">
                  <h3 class="c-textBox__title p-branch__title">Take OUT</h3>
                  <p class="c-textBox__description">当店のテイクアウトで利用できる商品を掲載しています。</p>
                </li>
                <li class="p-branch__textBox">
                  <h3 class="c-textBox__title p-branch__title">Take OUT</h3>
                  <p class="c-textBox__description">当店のテイクアウトで利用できる商品を掲載しています。</p>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </li>

      <li class="p-branch__item u-overLayer__parent">
        <?php
        // $takeout = get_term_by('slug', 'eatin', 'dep');
        $item_link = get_term_link('eatin', 'dep');
        ?>
        <a href="<?php echo $item_link; ?>">
          <!-- <a href="#"> -->
          <div class="p-branch__for-hover">
            <img class="p-branch__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/eatin@2x.jpg" />
            <div class="p-branch__layer u-overLayer__child u-center--column-sb">
              <h2 class="p-branch__item__title p-text-bar">Eat In</h2>
              <ul class="p-branch__boxs">
                <li class="p-branch__textBox">
                  <h3 class="c-textBox__title p-branch__title">Take OUT</h3>
                  <p class="c-textBox__description">当店のテイクアウトで利用できる商品を掲載しています。</p>
                </li>
                <li class="p-branch__textBox">
                  <h3 class="c-textBox__title p-branch__title">Take OUT</h3>
                  <p class="c-textBox__description">当店のテイクアウトで利用できる商品を掲載しています。</p>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </section>
  <!-- <section class="p-access">
    <div class="p-access__map">
      <div class="p-access-text__inner">
        <div class="p-access-text__wrapper">
          <h2 class="p-access__title u-mb--m"><span class="p-text-bar--long u-mb--m">アクセス</span></h2>
          <p class="p-access__description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit minima at ea repudiandae atque ut earum tempore architecto odit quaerat ipsa.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit minima at ea repudiandae atque ut earum tempore architecto odit quaerat Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit.
          </p>
        </div>
      </div>
    </div>
  </section> -->
  <section class="p-access">

    <iframe class="p-access__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747798533349!2d139.74324421605635!3d35.65858483881956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1632914484988!5m2!1sja!2sjp" width="1520" height="800" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
    <div class="p-access-text__inner">
      <div class="p-access-text__wrapper">
        <h2 class="p-access__title u-mb--m"><span class="p-text-bar--long u-mb--m">アクセス</span></h2>
        <p class="p-access__description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit minima at ea repudiandae atque ut earum tempore architecto odit quaerat ipsa.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit minima at ea repudiandae atque ut earum tempore architecto odit quaerat Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel ex, molestias provident enim dignissimos unde minus ab suscipit.
        </p>
      </div>
    </div>

  </section>

</main>
<!-- l-container__left  -->

</div>
</div>

<?php get_sidebar(); ?>

</div><!-- l-container -->

<?php get_footer(); ?>