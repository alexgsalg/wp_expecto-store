<?php 
get_header(); 
?>

<div class="pagecontent">

  <?php 
    if(have_posts()) {
      while(have_posts()) {

        the_post();
        get_template_part('pages/page', 'contact');
      }
    }
  ?>

</div>


<?php 
get_footer(); 
?>
