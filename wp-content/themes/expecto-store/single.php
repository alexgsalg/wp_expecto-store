<?php 
get_header(); 
?>

<div class="pagecontent">

  <?php 
    if(have_posts()) {
      while(have_posts()) {

        the_post();
        get_template_part('template-parts/content', 'article');//respectivamente 'onde está o partial', 'tipo de partial' //usado quando tem tipos diferentes de post
        // the_content(); //usado para posts comuns

      }
    }
  ?>

</div>


<?php 
get_footer(); 
?>
