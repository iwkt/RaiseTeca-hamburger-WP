<?php
/*
Plugin Name: custom_tx_item
Plugin URI: miku-nosuke@com
Description: カスタムタクソノミ
Version:  1.0
Author: miku-nosuke
Author URI: miku-nosuke@com
License: GPL2
*/

//カスタム投稿タイプ
function init_func()
{
  $labels = [
    "name" => "商品",
    "singular_name"   => "商品",
    "edit_item"       => "商品の編集",
    "new_item"        => "新規商品",
    "name_admin_bar"  => "商品",
    "all_items"       => "商品の一覧",
    "add_new"         => "商品の新規追加",
  ];
  $args = [
    "label" => "商品", //管理画面に出てくる名前
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => ["slug" => "item", "with_front" => true], //スラッグをitemに設定
    "query_var" => true,
    "menu_position" => 5,
    "supports" => ["title", "editor", "thumbnail", "custom-fields"],
    "menu_icon" => "dashicons-food",
  ];
  register_post_type("item", $args);
}
add_action('init', 'init_func');