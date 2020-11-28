<?php get_header(); ?>

<div class="pagecontent">

<section>
  <div class="wrapper">
  <?php 
    if(have_posts()) {
      while(have_posts()) {
        the_post();
        ?>
        // get_template_part('template-parts/content', 'products');
        <?php
      }
    }
    ?>
  </div>
</section>

</div>


<?php get_footer(); ?>