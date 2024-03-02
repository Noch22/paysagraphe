<?php 

add_action('wp_enqueue_scripts', 'load_scripts_and_style');


function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }
  
  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }
  
  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
}

function p($args){
  echo '<pre>';
  var_dump($args);
  echo '</pre>';
}


function d($args){
  p($args);
  die();
}
add_image_size( 'cover_image', 1280, 720, array( 'center', 'center' ) );
add_image_size( 'cover_thumbnail', 60, 60, array( 'center', 'center' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', [
  'height' => 200,
  'width' => 200,
  'flex-height' => true,
	'flex-width' => true,
  ]);

function custom_js_import() {
  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/2030674e04.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.hoverintent/1.10.1/jquery.hoverIntent.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <?php
}
add_action('wp_head', 'custom_js_import');


function currentYear(){
  return date('Y');
}
add_shortcode( 'year', 'currentYear' );