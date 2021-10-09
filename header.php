<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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