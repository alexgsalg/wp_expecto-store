<?php get_header(); ?>

<div class="pagecontent">
  <?php
    // get_template_part('template-parts/content', 'archive');
  ?>
  <?php 
  if(have_posts()) {
    while(have_posts()) {
      the_post();

      the_title();
      the_post_thumbnail();
      the_taxonomies();
      the_content();
    }
  }
?>

</div>


<?php get_footer(); ?>
