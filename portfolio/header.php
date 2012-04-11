<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme-styles.css" />

  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
    	<div id="left_wrapper">
        	<div class="left_header">
            	<h1 class="left"><a href="<?php bloginfo("home"); ?>" id="logo">Stewart Duffy</a></h1>
                <span id="logo_line" class="left"></span>
                
<?php
/*
<ul id="global_nav">
<li><a class="global_nav <?php if(is_home() or is_category(3) or is_category(4) or is_category(5)){echo "selected";} ?>" href="<?php bloginfo("home"); ?>" >Work</a></li>
<?php
<li><a class="global_nav <?php if(is_page(2)){echo "selected";} ?>" href="<?php echo get_page_link(4) ?>" >About</a></li>
<li><a class="global_nav <?php if(is_page(25)){echo "selected";} ?>" href="<?php echo get_page_link(8) ?>" >Contact</a></li>
</ul>
*/
?>
                <h3 class="clear" id="tag_line">Designer | Developer</h3>
            	<span class="left_header"></span>
            </div>
            
        	<div class="left_footer">
            	<ul id="icons">
                	<li id="linkedin"><a href="http://www.linkedin.com/in/stewartduffy">LinkedIn</a></li>
                	<li id="twitter"><a href="http://twitter.com/duffyblackpeace">Twitter</a></li>
                	<li id="cv_button"><a href="http://stewartduffy.com/wp-content/uploads/stewart_duffy_cv.doc">Cv</a></li>
                </ul>
            	<span class="left_footer"></span>
            </div>
        </div>