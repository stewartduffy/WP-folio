<?php
remove_action('wp_head', 'rsd_link'); // kill the RSD link
remove_action('wp_head', 'wlwmanifest_link'); // kill the WLW link 
remove_action('wp_head', 'index_rel_link'); // kill the index link 
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // kill the prev link 
remove_action('wp_head', 'start_post_rel_link', 10, 0); // kill the start link 
remove_action('wp_head', 'feed_links', 2); // kill post and comment feeds 
remove_action('wp_head', 'feed_links_extra', 3); // kill category, author, and other extra feeds 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // kill adjacent post links 
remove_action('wp_head', 'wp_generator'); // kill the wordpress version number 



 //needed for is_page function:
add_action('wp_print_scripts', 'my_scripts');

function my_scripts()
{
	$template_url = get_bloginfo('template_url');
	wp_enqueue_script('jquery', $template_url."/js/jquery-1.4.2.min.js", array(), '1.4.2' );
	wp_enqueue_script('smooth-scroll', $template_url."/js/jquery.smooth-scroll.js", array('jquery'), '1.0' );
	wp_enqueue_script('scrollTo', $template_url."/js/jquery.scrollTo-1.4.2-min.js", array('jquery'), '1.4.2' );
	wp_enqueue_script('serialScroll', $template_url."/js/jquery.serialScroll-1.2.2-min.js", array('jquery','scrollTo'), '1.2.2' );
	wp_enqueue_script('cufon-yui', $template_url."/js/cufon-yui.js", array('jquery'), '1' );
	wp_enqueue_script('futura_XBlk_BT_400', $template_url."/js/futura_XBlk_BT_400.font.js", array('cufon-yui'), '1' );
	wp_enqueue_script('insignia_LT_A_400', $template_url."/js/insignia_LT_A_400.font.js", array('cufon-yui'), '1' );
	wp_enqueue_script('shadowbox', $template_url."/shadowbox/shadowbox.js", array('jquery'), '1.0' );
	wp_enqueue_script('custom', $template_url."/js/custom.js", array('jquery'), '1.0' );
	if( is_page('Contact') ) {
		wp_enqueue_script('validate', $template_url."/js/validate.js", array(), '1.0' );
	}
}
add_action('wp_head', 'my_scripts',1);


function test_page(){
	if (is_page('About')) { 
		echo "id='about'";
	}	else if (is_page('Contact')) { 
		echo "id='contact'";
	}	else {
		echo "id='project_page'";
	}
}
?>