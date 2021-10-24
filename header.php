<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <!-- commnet -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="twitter:card" content="summary_large_image" />
  <!--①-->
  <meta name="twitter:site" content="@miku_nosuke" />
  <!--②-->
  <meta property="og:url" content="https://hamburger.miku-nosuke.com/" />
  <!--③-->
  <meta property="og:title" content="RaiseTech Hamburger" />
  <!--④-->
  <meta property="og:description" content="RaiseTech　WordPress副業コース2021年の課題制作。本来静的な課題であったが自分の好奇心から躍動感のあるページを作成。期間内に課題クリアしました。" />
  <!--⑤-->
  <meta property="og:image" content="https://hamburger.miku-nosuke.com/wp-content/themes/hamburger/screenshot.png" />
  <!--⑥-->

  <?php wp_head(); ?>
</head>

<body <?php body_class('body js-menu'); ?> class="body js-menu">
  <?php wp_body_open(); ?>
  <div class="l-global-container js-menu">
    <div class="l-container">
      <div class="l-container__left">
        <div class="l-main__container">

          <header class="l-header">
            <button id="js-menu_open" class="p-header__menu-btn  p-menu">Menu</button>
            <div class="p-header__wrapper">
              <div class="p-header__outer">
                <h1 class="p-header__title"><a href="<?php echo esc_url(home_url()); ?> ">Hamburger</a></h1>
                <div class="p-header__form">
                  <?php get_search_form(); ?>
                </div>
              </div>
            </div>
          </header>