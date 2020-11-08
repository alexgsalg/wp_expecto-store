<?php get_header(); ?>

<?php 
get_header(); 
?>

<div class="pagecontent">

  <?php 
    if(have_posts()) {
      while(have_posts()) {

        the_post();
        get_template_part('template-parts/content', 'products');
      }
    }
  ?>

</div>

<?php 
get_footer(); 
?>


<?php get_footer(); ?>