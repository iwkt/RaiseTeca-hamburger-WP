<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>BugerRaise</title> -->
  <!-- <link rel="shortcut icon" href="./assets/images/tmfav08902b.ico" type="image/x-icon"> -->
  <!-- <link rel="stylesheet" href="./assets/css/foundation/reset.css"> -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
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