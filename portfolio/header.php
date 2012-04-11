<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/libs/shadowbox/shadowbox.css" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie7.css" />
<![endif]-->
<!--[if IE]>
<script type="text/javascript"> Cufon.now(); </script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
    	<div id="left_wrapper">
        	<div class="left_header">
            	<h1 class="left"><a href="<?php bloginfo("home"); ?>" id="logo">Stewart Duffy</a></h1>
                <span id="logo_line" class="left"></span>
                <ul id="global_nav">
			<li><a class="global_nav <?php if(is_home() or is_category(3) or is_category(4) or is_category(5)){echo "selected";} ?>" href="<?php bloginfo("home"); ?>" >Work</a></li>
			<?php
			/*
			<li><a class="global_nav <?php if(is_page(2)){echo "selected";} ?>" href="<?php echo get_page_link(4) ?>" >About</a></li>
			*/
			?>
			<li><a class="global_nav <?php if(is_page(25)){echo "selected";} ?>" href="<?php echo get_page_link(8) ?>" >Contact</a></li>
                </ul>
                
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