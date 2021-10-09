  <?php
  $args = array(
    'post_type' => 'item', // 投稿タイプスラッグ
    'posts_per_page' => 5
  );
  $the_query = new WP_Query($args); // データベースを検索して引っ張ってくる情報を作成（$argsで必要な情報を配列にして渡している）				
  ?>

  <?php
    if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post(); 
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
            <h4 class="p-card__sub-title"><?php echo get_post_meta($post->ID, 'sub-title', true); ?></h4>
            <p class="p-card__text"><?php the_excerpt(); ?></p>
            <div class="p-card__btn-area">
              <div class="c-round-btn">
                <a href="<?php the_permalink(); ?>">詳しく見る</a>
              </div>
            </div>
          </div><!-- "p-card"__body-->
        </div><!-- "p-card"-->
      </li>
  <?php
    endwhile;
  endif;
  ?>
  こちらはサブループ