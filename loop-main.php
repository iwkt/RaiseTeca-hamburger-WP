<?php
if (have_posts()) :
  while (have_posts()) : the_post();
?>
    <li class="p-order__item">
      <div class="p-card">
        <figure class="p-card__img-wrapper">
          <?php
          $array = array(
            "alt" => "商品の写真",
            "class" => "p-card__img"
          )
          ?>
          <?php the_post_thumbnail('large', $array); ?>
        </figure>
        <div class=" p-card__body">
          <h3 class="p-card__title"><?php the_title(); ?></h3>
          <h4 class="p-card__sub-title"><?php the_field('サブタイトル'); ?></h4>

          <p class="p-card__text">
            <?php
            if (mb_strlen(post_custom('キャッチコピー'), 'UTF-8') > 103) {
              $title = mb_substr(post_custom('キャッチコピー'), 0, 103, 'UTF-8');
              echo $title . '…';
            } else {
              echo post_custom('キャッチコピー');
            }
            ?>
          </p>

          <div class="p-card__btn-area">
            <a class="c-round-btn" href="<?php the_permalink(); ?>">詳しく見る</a>
          </div>
        </div><!-- "p-card"__body-->
      </div><!-- "p-card"-->
    </li>
<?php
  endwhile;
endif;
?>