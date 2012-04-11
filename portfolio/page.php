<?php get_header(); ?>
        <div id="right_wrapper" class="right">
                    
            <?php include('global_nav.php') ?>
            
		<?php 
	if (is_page(4)){
		if(have_posts() ){
			while(have_posts()){
				the_post();?>
        	<div class="content_box project">
            	<span class="top"></span>
                	<?php echo get_post_meta($post->ID, "about_image", true) ; ?>
					<?php the_content() ?>
                <span class="bottom"></span>
            </div>
                <?php
			}
		} else{
		echo "no posts";
		}
	} else if (is_page(8)){
		if(have_posts() ){
			while(have_posts()){
				the_post();?>
        	<div class="content_box">
            	<span class="top"></span>
        <div class="contact_info left">
            	<span class="top"></span>
					<?php the_content() ?>
        </div>
        <dl class="right">
            <dt>Phone Number</dt>
            <dd>021-980-355</dd>
            <dt>Email Address</dt>
            <dd>duffy.stewart@gmail.com</dd>
        </dl>   
        <?php  
			$success = isset($_GET['success']);	
			$fail = isset($_GET['fail']);	
			if($success){
				echo "<p class='thanksyou_message right'>Thanks for your enquiry.<br />I will try and get back to you as soon as possible.</p>";
			} else if($fail) {
				echo "<p>Unfortunately your enquiry did not make it. We are experiencing technical difficulties. Please come back later</p>";
			} else {
				//if no fail or success vars in url. then show form:
			?>
    <form class="right" name="enquiry_form" id="enquiry_form" method="post" action="<?php echo ENQUIRY_PLUGIN_URL ?>/formmail.php">
        <input type="hidden" name="returnpage" value="<?php the_permalink() ?>" />
    	<h4>Contact Form</h4>
        <input type="text" name="name" id="name" value="Name" maxlength="50" /><br />
        <input type="text" name="email" id="email_form" value="Email" /><br />
        <input type="text" name="subject" id="subject" value="Subject" /><br />
        <textarea name="enquiry" rows="4" cols="40" id="enquiry" >Enquiry</textarea><br />
        <div id="message"></div>
        <input type="submit" name="formmail" id="submit" value="" onclick = "return validate()" />	
        <input type="text" class="other" name="other" size="20" id="other" />
    </form>
            <?php }//endif ?>
    
        <div class="clear"></div>
                <span class="bottom"></span>
            </div>
                <?php
			}
		} else{
		echo "no posts";
		}
	}
		?>
        </div>
        <div class="clear"></div>
    </div>
<?php get_footer(); ?>