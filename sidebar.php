<div class="l-container__right p-sidebar js-menu">
  <button id="MenuBtn" class="p-sidebar__btn-close"><span class="c-close-btn"></span></button>
  <div id="foodMenu">
    <!-- <ul class="p-sidebar__menu"> -->
      <!-- <li v-for="item in foodItems" :key="item.sn">
        <h3 class="p-sidebar__mainmenu-item">{{ item.category }}</h3>
        <ul class="p-sidebar__submenu-items">
          <li class="p-sidebar__submenu-item"> -->
            <nav class="globalNavi">
              <?php
              $args = array(
                'menu'        => 'gmenu',
                'menu_class'  => 'p-sidebar__menu',
                'container' => false,
              );
              wp_nav_menu($args);
              ?>
            </nav>

        <!-- こちらはカスタムカテゴリ -->
            <nav class="globalNavi">
              <?php
              $args = array(
                'menu'        => 'global-navigation-custom',
                'menu_class'  => 'p-sidebar__menu',
                'container' => false,
              );
              wp_nav_menu($args);
              ?>
            </nav>
          <!-- </li>
        </ul>
      </li> -->
    <!-- </ul> -->
  </div>
</div>