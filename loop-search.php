<!-- <h1 class="p-branch__search-result"><?php the_search_query(); ?> の検索結果</h1> -->

<?php
if (empty(get_search_query())) : // 検索キーワードがないとき
?>
  <p class="p-branch__search-result">検索キーワードが未入力です。</p>;
  <?php
else : // 検索キーワードがあるとき

  if (have_posts()) :
    // if (have_posts() && get_search_query()) :
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
            <!-- <h4 class="p-card__sub-title">当店売上げ No.1</h4> -->
            <h4 class="p-card__sub-title"><?php echo get_post_meta($post->ID, 'sub-title', true); ?></h4>
            <p class="p-card__text"><?php the_excerpt(); ?></p>

            <div class="p-card__btn-area">
              <a class="c-round-btn" href="<?php the_permalink(); ?>">詳しく見る</a>
            </div>
          </div><!-- "p-card"__body-->
        </div><!-- "p-card"-->
      </li>
    <?php
    endwhile;
    ?>

  <?php else : ?>
    <div class="col-full">
      <div class="wrap-col">
        <p class="p-branch__search-result">検索キーワードに該当する商品がありませんでした。</p>
      </div>
    </div>

  <?php endif; ?>
<?php endif; ?>

loop-search