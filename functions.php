<?php
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// set_post_thumbnail_size(250, 550);

//タイトル出力
function raisetech_title($title)
{
  if (is_front_page() && is_home()) { //トップページなら
    $title = get_bloginfo('name', 'display');
  } elseif (is_singular()) { //シングルページなら
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'raisetech_title');


function setting_script()
{
  remove_filter('the_excerpt', 'wpautop');//pタグの消去
  wp_enqueue_style('reset_style', get_template_directory_uri() . '/assets/css/foundation/reset.css', array());

  wp_resource_hints('font_NotoSansJP,', '//fonts.googleapis.com', array());
  wp_resource_hints('font_N', '"https://fonts.gstatic.com" crossorigin');
  wp_enqueue_style('font_google', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap', array());
  
  wp_resource_hints('font_Roboto,', '//fonts.googleapis.com', array());
  wp_resource_hints('font_N', '"https://fonts.gstatic.com" crossorigin');
  wp_enqueue_style('font_google_Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap', array());

  wp_enqueue_style('M+PLUS+1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700;900&display=swap', array());

  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2');
  wp_enqueue_style('hamburger_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
;
  //script
  wp_enqueue_script('jQuery', '//code.jquery.com/jquery-3.2.1.min.js');
  wp_enqueue_script('Vue', 'https://unpkg.com/vue@next');
  //footerで
  wp_enqueue_script('food_menu', get_template_directory_uri() . '/assets/js/food_menu.js', array(), false, true);
  wp_enqueue_script('menu_open', get_template_directory_uri() . '/assets/js/menu_open.js', array(), false, true);
  // wp_enqueue_script('add_class', get_template_directory_uri() . '/assets/js/add_class.js', array(), false, true);
  // wp_enqueue_script('hmgr', get_template_directory_uri() . '/js/hmgr.js', array(), false, true);
  // wp_enqueue_script('hover', get_template_directory_uri() . '/js/hover.js', array(), false, true);
  // wp_enqueue_script('acd', get_template_directory_uri() . '/js/acd.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'setting_script');


//カスタム投稿タイプ
function init_func() {
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
add_action( 'init', 'init_func' );


//カスタムカテゴリー --------------------------------
function custom_taxsonomy()
{ //add_actionの２つのパラメーターを定義
  $labels = [
    "singular_name" => "dep",
  ];
  $args = [
    "label" => "カスタムカテゴリー",
    "labels" => $labels,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_in_menu" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'dep', 'with_front' => true,], //カテゴリーのスラッグ
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "dep",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  ];
  register_taxonomy("dep", ["item"], $args); //「商品」というカスタム投稿タイプにカテゴリーを追加
}
add_action('init', 'custom_taxsonomy');


// Add custom editor font sizes.
// add_theme_support(
//   'editor-font-sizes',
//   array(
//     array(
//       'name'      => __('Small', 'twentynineteen'),
//       'shortName' => __('S', 'twentynineteen'),
//       'size'      => 19.5,
//       'slug'      => 'small',
//     ),
//     array(
//       'name'      => __('Normal', 'twentynineteen'),
//       'shortName' => __('M', 'twentynineteen'),
//       'size'      => 22,
//       'slug'      => 'normal',
//     ),
//     array(
//       'name'      => __('Large', 'twentynineteen'),
//       'shortName' => __('L', 'twentynineteen'),
//       'size'      => 36.5,
//       'slug'      => 'large',
//     ),
//     array(
//       'name'      => __('Huge', 'twentynineteen'),
//       'shortName' => __('XL', 'twentynineteen'),
//       'size'      => 49.5,
//       'slug'      => 'huge',
//     ),
//   )
// );

/* カラーパレットの色追加 */
function my_color_set()
{
  add_theme_support('editor-color-palette', array(
    array(
      'name' => __('Black'),
      'slug' => 'black',
      'color' => '#000',
    ),
    array(
      'name' => __('Dark gray'),
      'slug' => 'dark-gray',
      'color' => '#333',
    ),
    array(
      'name' => __('Medium gray'),
      'slug' => 'medium-gray',
      'color' => '#999',
    ),
    array(
      'name' => __('Light gray'),
      'slug' => 'light-gray',
      'color' => '#d3d3d3',
    ),
    array(
      'name' => __('Ghost white'),
      'slug' => 'ghost-white',
      'color' => '#f8f8ff',
    ),
    array(
      'name' => __('White', 'White'),
      'slug' => 'white',
      'color' => '#FFF',
    ),
    array(
      'name' => __('Red'),
      'slug' => 'red',
      'color' => '#ff0000',
    ),
    array(
      'name' => __('Vivid red'),
      'slug' => 'vivid-red',
      'color' => '#cf2e2e',
    ),
    array(
      'name' => __('Blue'),
      'slug' => 'blue',
      'color' => '#0000ff',
    ),
    array(
      'name' => __('Vivid blue'),
      'slug' => 'vivid-blue',
      'color' => '#0693e3',
    ),
    array(
      'name' => __('Green'),
      'slug' => 'green',
      'color' => '#008000',
    ),
    array(
      'name' => __('Vivid brown'),
      'slug' => 'vivid-brown',
      'color' => '#3C2A10',
    )
  ));
}

add_action('after_setup_theme', 'my_color_set',100);


/*
//GutenbergにオリジナルのCSSを適用する
function block_editor_css()
{
  add_theme_support('editor-styles');
  add_editor_style('page.css'); //サイトオリジナル
  add_editor_style('./assets/css/editor-style.css'); //エディタ専用
}
add_action('after_setup_theme', 'block_editor_css');
*/


/* 投稿タイプによって違うブロックエディター用CSSを読み込ませる */
// add_action( 'enqueue_block_editor_assets', 'wt_add_block_editor_style' );
// function wt_add_block_editor_style() {
//   global $post;
//   $post_type = $post -> post_type;
//   if( $post_type == 'post' ){
//     // デフォルトの「投稿」の場合
//     wp_enqueue_style( 'wt-block-editor-style-post', get_stylesheet_directory_uri() . '/css/editor-style-post.css', array( 'wp-edit-blocks' ), '1.0.0' );
//   }elseif( $post_type == 'page' ){
//     // 固定ページの場合
//     wp_enqueue_style( 'wt-block-editor-style-page', get_stylesheet_directory_uri() . '/css/editor-style-page.css', array( 'wp-edit-blocks' ), '1.0.0' );
//   }elseif( $post_type == 'info' ){
//     // カスタム投稿タイプ「info」の場合
//     wp_enqueue_style( 'wt-block-editor-style-info', get_stylesheet_directory_uri() . '/css/editor-style-info.css', array( 'wp-edit-blocks' ), '1.0.0' );
//   }
// }


//カスタムフィールド ---------------------------------
/*
function create_post_type()
{
  //カスタム投稿タイプがダッシュボードの編集画面で使用する項目を配列で用意
  $supports = array(
    'title',
    'editor',
    'author',
    'thumbnail',
    'revisions'
  );
  //カスタム投稿タイプを追加するための関数
  //第一引数は任意のカスタム投稿タイプ名
  register_post_type(
    'hoge_custom_post',
    array(
      'label' => 'サンプルカスタム投稿',
      'public' => true, //フロントエンド上で公開する場合true
      'has_archive' => true, //アーカイブページを表示したい場合true
      'menu_position' => 3, //メニューを表示させる場所
      'supports' => $supports //ダッシュボードの編集画面で使用する項目
    )
  );
}
add_action('init', 'create_post_type');
*/

/*
function add_custom_fields()
{
  add_meta_box(
    'custom_setting', //編集画面セクションのHTML ID
    'カスタム情報', //編集画面セクションのタイトル、画面上に表示される
    'insert_custom_fields', //編集画面セクションにHTML出力する関数
    'item', //投稿タイプ名
    'normal' //編集画面セクションが表示される部分
  );
}
add_action('admin_menu', 'add_custom_fields');

function custom_metabox_edit_form_tag()
{
  echo ' enctype="multipart/form-data"';
}
//画像をアップする場合は、multipart/form-dataの設定が必要なので、post_edit_form_tagをフックしてformタグに追加
add_action('post_edit_form_tag', 'custom_metabox_edit_form_tag');

// カスタムフィールドの入力エリア
function insert_custom_fields()
{
  global $post;
  //get_post_meta関数を使ってpostmeta情報を取得
  $hoge_name = get_post_meta(
    $post->ID, //投稿ID
    'hoge_name', //キー名
    true //戻り値を文字列にする場合true(falseの場合は配列)
  );
  $hoge_thumbnail = get_post_meta($post->ID, 'hoge_thumbnail', true);
  echo '名前： <input type="text" name="hoge_name" value="' . $hoge_name . '" /><br>';
  echo '画像： <input type="file" name="hoge_thumbnail" accept="image/*" /><br>';
  if (isset($hoge_thumbnail) && strlen($hoge_thumbnail) > 0) {
    //hoge_thumbnailキーのpostmeta情報がある場合は、画像を表示
    //$hoge_thumbnailには、後述するattach_idが格納されているので、wp_get_attachment_url関数にそのattach_idを渡して画像のURLを取得する
    echo '<img style="width: 200px;display: block;margin: 1em;" src="' . wp_get_attachment_url($hoge_thumbnail) . '">';
  }
}

function save_custom_fields($post_id)
{
  if (isset($_POST['hoge_name'])) {
    //hoge_nameキーで、$_POST['hoge_name']を保存
    update_post_meta($post_id, 'hoge_name', $_POST['hoge_name']);
  } else {
    //hoge_nameキーの情報を削除
    delete_post_meta($post_id, 'hoge_name');
  }

  if (isset($_FILES['hoge_thumbnail']) && $_FILES["hoge_thumbnail"]["size"] !== 0) {
    $file_name = basename($_FILES['hoge_thumbnail']['name']);
    $file_name = trim($file_name);
    $file_name = str_replace(" ", "-", $file_name);

    $wp_upload_dir = wp_upload_dir(); //現在のuploadディクレトリのパスとURLを入れた配列
    $upload_file = $_FILES['hoge_thumbnail']['tmp_name'];
    $upload_path = $wp_upload_dir['path'] . '/' . $file_name; //uploadsディレクトリ以下などに配置する場合は$wp_upload_dir['basedir']を利用する
    //画像ファイルをuploadディクレトリに移動させる
    move_uploaded_file($upload_file, $upload_path);

    $file_type = $_FILES['hoge_thumbnail']['type'];
    //正規表現で拡張子なしのスラッグ名を生成
    $slug_name = preg_replace('/\.[^.]+$/', '', basename($upload_path));

    if (file_exists($upload_path)) {
      //保存に成功してファイルが存在する場合は、wp_postsテーブルなどに情報を追加
      $attachment = array(
        'guid'           => $wp_upload_dir['url'] . '/' . basename($file_name),
        'post_mime_type' => $file_type,
        'post_title' => $slug_name,
        'post_content' => '',
        'post_status' => 'inherit'
      );
      //添付ファイルを追加
      $attach_id = wp_insert_attachment($attachment, $upload_path, $post_id);
      if (!function_exists('wp_generate_attachment_metadata')) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
      }
      //添付ファイルのメタデータを生成し、wp_postsテーブルに情報を保存
      $attach_data = wp_generate_attachment_metadata($attach_id, $upload_path);
      wp_update_attachment_metadata($attach_id, $attach_data);
      //wp_postmetaテーブルに画像のattachment_id(wp_postsテーブルのレコードのID)を保存
      update_post_meta($post_id, 'hoge_thumbnail', $attach_id);
    } else {
      //保存失敗
      echo '画像保存に失敗しました';
      exit;
    }
  }
}
add_action('save_post', 'save_custom_fields');
*/


// 固定カスタムフィールドボックス
function add_custom_fields() {
	//add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
	//第4引数のpostをpageに変更すれば固定ページにオリジナルカスタムフィールドが表示されます(custom_post_typeのslugを指定することも可能)。
	//第5引数はnormalの他にsideとadvancedがあります。
	add_meta_box( 'item_setting', '商品の情報', 'insert_custom_fields', 'item', 'normal');
}
add_action('admin_menu', 'add_custom_fields');
 
 
// カスタムフィールドの入力エリア
function insert_custom_fields() {
	global $post;
 
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo 'サブタイトル： <input type="text" name="sub-title" value="'.get_post_meta($post->ID, 'sub-title', true). '" size="50" /><br><br>';
	echo '説明： <input type="text" name="description" value="'.get_post_meta($post->ID, 'book_author', true).'" size="50" /><br>';
	echo '価格　　　　： <input type="text" name="price" value="'.get_post_meta($post->ID, 'price', true). '" size="50" /><br><br>';
	
	if( get_post_meta($post->ID,'fevorite_label',true) == "is-on" ) {
		$fevorite_label_check = "checked";
	}//チェックされていたらチェックボックスの$fevorite_label_checkの場所にcheckedを挿入
	echo 'お気に入り　： <input type="checkbox" name="fevorite_label" value="is-on" '.$fevorite_label_check.' ><br>';
}
 
 
// カスタムフィールドの値を保存
function save_custom_fields( $post_id ) {
	if(!empty($_POST['sub-title'])){ //題名が入力されている場合
		update_post_meta($post_id, 'sub-title', $_POST['sub-title'] ); //値を保存
	}else{ //題名未入力の場合
		delete_post_meta($post_id, 'sub-title'); //値を削除
	}
	
	// if(!empty($_POST['book_author'])){
	// 	update_post_meta($post_id, 'book_author', $_POST['book_author'] );
	// }else{
	// 	delete_post_meta($post_id, 'book_author');
	// }
	
	if(!empty($_POST['price'])){
		update_post_meta($post_id, 'price', $_POST['price'] );
	}else{
		delete_post_meta($post_id, 'price');
	}
	
	if(!empty($_POST['fevorite_label'])){
		update_post_meta($post_id, 'fevorite_label', $_POST['fevorite_label'] );
	}else{
		delete_post_meta($post_id, 'fevorite_label');
	}
}
add_action('save_post', 'save_custom_fields');



//コンテンツ内の全部の画像を拾ってくる
function post_images(){
  global $post, $posts;
  ob_start();
  ob_end_clean();
  preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  return $matches[1];
}