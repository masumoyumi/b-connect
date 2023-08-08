<?php
  add_action('wp_enqueue_scripts', 'add_styles');

  add_theme_support('post-thumbnails');

  function add_styles() {


    // reset style
    wp_register_style(
      'reset_style',
      get_template_directory_uri() . '/css/reset.css',
      array(),
      '1.0'
    );

    wp_register_style(
        'swiper_style',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        '1.0'
      );

	// main style
    wp_enqueue_style(
      'main_style',
      get_template_directory_uri() . '/css/main.css',
      array('reset_style','swiper_style'),
      '1.0'
    );  
  }

  // jsの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
  // デフォルトのjQueryを削除
  wp_deregister_script('jquery');

// jQuery script
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js',
        array(),
        '1.0'
      );


// GSAP3 script
  wp_register_script(
    'gsap_script',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js',
    array(),
    '1.0'
  );

  // GSAP3 ScrollTrigger script
  wp_register_script(
    'gsap-scroll-trigger_script',
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js',
    array(),
    '1.0'
  );

  wp_register_script(
    'swiper_script',
    'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
    array(),
    '1.0'
  );

  wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script','gsap_script','gsap-scroll-trigger_script','swiper_script'), // 'jquery_script'が読み込まれた後に'main_script'を読み込む
    '1.0'
  );

  /* main.js にdefer属性を付与 */
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle) {
  // 識別名がmain_script以外はそのまま返却
  if ($handle !== 'main_script') {
    return $tag;
  }

  // deferを追加して返却する
  return str_replace(' src=', ' defer src=', $tag);
}

}


function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '支店情報'; /*「投稿」のラベル名 */
    $args['has_archive']='branch'; /* アーカイブにつけるスラッグ名 */
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

function custom_archive_posts_per_page( $query ) {
  if ( is_archive() && !is_admin() ) {
      $posts_per_page = 5; // アーカイブページで表示する記事の数
      $query->set( 'posts_per_page', $posts_per_page );
  }
}
add_action( 'pre_get_posts', 'custom_archive_posts_per_page' );


function wpcf7_custom_item_error_position( $items, $result ) {
  $class = 'wpcf7-custom-item-error';
  $names = array( 'catalog' ); // name属性を指定

  if ( isset( $items['invalid_fields'] ) ) {
      foreach ( $items['invalid_fields'] as $k => $v ) {
          $orig = $v['into'];
          $name = substr( $orig, strrpos($orig, ".") + 1 );
          if ( in_array( $name, $names ) ) {
              $items['invalid_fields'][$k]['into'] = ".{$class}.{$name}";
          }
      }
  }
  return $items;
}
add_filter( 'wpcf7_ajax_json_echo', 'wpcf7_custom_item_error_position', 10, 2 );


?>