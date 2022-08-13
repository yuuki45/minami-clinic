<?php

function display_title()
{
  add_theme_support( 'post-thumbnails' );
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'display_title');


function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');


function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
 function add_origin_thanks_page() {
 $thanks = home_url('/thanks/');
 $recruit = home_url('/reservation/');
   echo <<< EOC
     <script>
       var thanksPage = {
         159: '{$thanks}',
         164: '{$recruit}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
   EOC;
 }

function my_theme_scripts()
{
  wp_enqueue_style('original-css', get_theme_file_uri('/css/styles.css'), ['slick-css'],['slick-theme-css']);
  wp_enqueue_style('slick-css', get_theme_file_uri('/css/slick.css'));
  wp_enqueue_style('slick-theme-css', get_theme_file_uri('/css/slick-theme.css'));
  
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

// ContactForm7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}
