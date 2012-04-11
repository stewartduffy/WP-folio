<?php
function hide_version(){
  return '';
}
add_filter('the_generator', 'hide_version');

function my_scripts(){
  $template_url = get_bloginfo('template_url');
  wp_deregister_script( 'jquery' );
  wp_enqueue_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", array(), '1.7.1', true );
  wp_enqueue_script('plugins', $template_url."/js/plugins-min.js", array(), '1', true );
  wp_enqueue_script('theme_custom', $template_url."/js/theme-min.js", array(), '1', true );
  wp_enqueue_script('modernizr', $template_url."/js/libs/modernizr-2.5.3.min.js", array(), '2.5.3' );
}
add_action('wp_enqueue_scripts', 'my_scripts');

function test_page(){
  if (is_page('About')) { 
    echo "id='about'";
  } else if (is_page('Contact')) { 
    echo "id='contact'";
  } else {
    echo "id='project_page'";
  }
}
?>