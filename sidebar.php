<div class="l-container__right p-sidebar js-menu">
  <button id="MenuBtn" class="p-sidebar__btn-close"><span class="c-close-btn"></span></button>
  <div id="foodMenu">
    <!-- <nav class="globalNavi">
      <//?php
      $args = array(
        'menu'        => 'gmenu',
        'menu_class'  => 'p-sidebar__menu',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav> -->

    <!-- こちらはカスタムカテゴリ -->
    <!-- <nav class="globalNavi">
      <//?php
      $args = array(
        'menu'        => 'global-navigation-custom',
        'menu_class'  => 'p-sidebar__menu p-menu-global-navigation-custom',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav> -->

    <!-- こちらはカスタムカテゴリ -->
    <h3 class="p-sidebar__menu-title">MENU</h3>
    <nav class="p-sidebar__globalNavi">
      <?php
      $args = array(
        'menu'        => 'item_menu',
        'menu_class'  => 'p-sidebar__menu p-sidebar__item-menu', //mainのulに付与される
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </nav>
  </div>
</div>