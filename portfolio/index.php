<?php get_header(); ?>

        <div id="right_wrapper" class="right">
                    
            <?php include('global_nav.php') ?>
            
	    <div class="content_box">
		<span class="top"></span>
		    <?php
		    $intro_page = new WP_Query();
		    $conditions = array(
			'page_id' => 114
		     );
		    $intro_page->query( $conditions );
		    if($intro_page->have_posts()){
			while ($intro_page->have_posts()) {
			     $intro_page->the_post();
			     ?>
			     <?php the_content();
			     }
			}
			?>
		<span class="bottom"></span>
	    </div>

<?php
	if(is_home()){
		$category	= " t.publish = '0' ";
	} else if (is_category(3)){
		$category	= "wp_cat.name = 'interactive' AND t.publish == '1' ";
	} else if (is_category(4)){ 
		$category	= "wp_cat.name = 'motion' AND t.publish == '1' ";
	} else if (is_category(5)){ 
		$category	= "wp_cat.name = 'static' AND t.publish == '1' ";
	}
	$project = new Pod("project"); 
	$project->findRecords("displayorder ASC", -1, $category);
	$projectTotal = $project->getTotalRows();
	
if( $projectTotal > 0 ) {
	$id				= 0;
	$nextproject	= 0;
	while ($project->fetchRecord()) {	

	//common variables
	$name		 		= $project->get_field('name');
	$images				= $project->get_field('images');
	$description		= $project->get_field('description');
	$time_frame		= $project->get_field('time_frame');
	$sub_heading	= $project->get_field('sub_heading');
	$url						= $project->get_field('url');
	$embed				= $project->get_field('embed');
	$displayorder		= $project->get_field('displayorder');
	$publish 				= $project->get_field('publish');
	
		
	$images     		= $images[0]['guid'];
	$imageArray 		= $project->get_field('images');
	$count 				= count($imageArray);
	$displayorder		= round($displayorder);
	//$nextproject		= $displayorder+1;
	$nextproject		= ($nextproject++)+1;
?>

        	<div class="content_box project" id="<?php echo "id-".$id++ ?>">
            	<span class="top"></span>
                <h2 class="content_header"><?php echo $name; ?></h2>
                
                <div class="screen_slider">
					<?php
                    
                    //echo "count = ".$count; 
                    if ( $count > 1 ) {
                    echo "<ul class='slider_nav'>";
                        $increment = 1;
                    if (!empty( $embed )){ 
                        $increment = 2;
                        echo "<li><a href='#'>1</a></li>"; 
                        }
                        for($i = 0;$i < $count; $i++){
                            $temp = $i+$increment;
                            //$thumb = $imageArray[$i]['guid'];
                            echo "<li><a href='#'>$temp</a></li>";
                        }
                    echo "</ul>";
                    }
                    ?>
                    <div class="sections">
                        <ul class="sections">
							<?php
								if (!empty( $embed )){ echo "<li>$embed</li>";  }
									if($imageArray != null){
										for($i = 0;$i < $count; $i++){
											$thumb = $imageArray[$i]['guid'];
                      if (!empty( $url )){
											echo "<li><a href='$url' class='project_image' ><img src='$thumb' alt='$name' /></a></li>";
                      } else {
                        echo "<li><img src='$thumb' alt='$name' /></li>";
                      }
										}
									}
						  ?>
                        </ul>
                    </div>
                </div>
                <h3><?php echo $sub_heading; ?></h3>  
                 <?php echo str_replace("<br>", "<br />", $description); ?>
				
				<?php
					if ( $time_frame ) {
				?>
				<p>Project time: <?php echo $time_frame;?></p>
                <?php 
				}
					if($url != null){
						?>
				<p><a href="<?php echo $url; ?>" >Click here to view site.</a> </p>
				<?php }?>
                
				<?php                 
				if ( $nextproject == $projectTotal ) {
					echo "<a href='#id-0' class='scroll_link'>Top</a>";
				}	else {
					echo "<a href='#id-$nextproject' class='scroll_link'>Next</a>";
				}
				?>
                <span class="bottom"></span>
            </div>
<?php	
	}//while
}//if
?>        
        </div>
        <div class="clear"></div>
    </div>
</body>
</html>
