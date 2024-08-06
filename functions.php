
<?php

// cssとjs読み込ませ
  function theme_file_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array(), '20240717', true);

    wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
  }
  add_action( 'wp_enqueue_scripts', 'theme_file_scripts' );

  // imgショートコード
  function img_directory(){
    return get_template_directory_uri().'/img/';
  }
  add_shortcode('img', 'img_directory');

    // エディタ自動入力の打ち消し
  add_action('init', function() {
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
  });
  add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
  });
?>
