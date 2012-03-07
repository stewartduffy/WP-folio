<div class="content_box" id="header">
  <span class="top">
  </span>
    <?php 
      if(is_home()){
        ?>
        <div class="right sub_nav">
          <h2 class="selected">Work</h2>
        </div>
        <?php
      } else {
        ?>
        <div class="right sub_nav">
          <h2 class="selected"><?php the_title() ?></h2>
        </div>
        <?php
      }
    ?>
  <span class="bottom">
  </span>
</div>