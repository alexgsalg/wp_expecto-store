<?php 
get_header(); 
?>

<main class="pagecontent">

<section class="hero" style="
        background-image: linear-gradient(to right, #19439fc9, rgba(50, 104, 220, 0.747)),
        url('<?php the_field('bg_hero') ?>')"
>
<?php 
  $hero = get_field('hero');
  ?>
  <h1 class="hero__title"><?php echo $hero['titulo_pagina'] ?></h1>
  <p class="hero__text"><?php echo $hero['subtitulo'] ?></p>
</section>

<section class="first features">
<div class="wrapper">
  <?php 
  $featureL = get_field('featured_left');
  $featureR = get_field('featured_right');
  ?>

  <div class="feature" style="background-image: linear-gradient(to right, #333333c7, #333333c7),
      url('<?php echo $featureL['bg_left'] ?>')">
    <h3 class="feature__title"><?php echo $featureL['text_left'] ?></h3>
  </div>

  <div class="feature" style="background-image: linear-gradient(to right, #bd1b1bc7, #bd1b1bc7),
      url('<?php echo $featureR['bg_right'] ?>')">
    <h3 class="feature__title"><?php echo $featureR['text_right'] ?></h3>
  </div>

</div>
</section>

<section class="specs">
<div class="wrapper">
  <?php 
  $specs_1 = get_field('specs_1');
  $specs_2 = get_field('specs_2');
  $specs_3 = get_field('specs_3');
  ?>

  <div class="specbox">
    <img src="<?php echo $specs_1['icon_1'] ?>" alt="<?php echo $specs_1['specs_title_1'] ?>">
    <div class="specbox__desc">
      <p class="specbox__title"><?php echo $specs_1['specs_title_1'] ?></p>
      <p><?php echo $specs_1['specs_desc_1'] ?></p>
    </div>
  </div>

  <div class="specbox">
    <img src="<?php echo $specs_2['icon_2'] ?>" alt="<?php echo $specs_2['specs_title_2'] ?>">
    <div class="specbox__desc">
      <p class="specbox__title"><?php echo $specs_2['specs_title_2'] ?></p>
      <p><?php echo $specs_2['specs_desc_2'] ?></p>
    </div>
  </div>

  <div class="specbox">
    <img src="<?php echo $specs_3['icon_3'] ?>" alt="<?php echo $specs_3['specs_title_3'] ?>">
    <div class="specbox__desc">
      <p class="specbox__title"><?php echo $specs_3['specs_title_3'] ?></p>
      <p><?php echo $specs_3['specs_desc_3'] ?></p>
    </div>
  </div>

</div>
</section>

<section class="shop">
  <div class="wrapper">

    <h2>Nossos produtos</h2>
    <div class="product-grid">

    <?php 
      $homeNewProducts = new WP_Query(array(
        'posts_per_page' => '8',
        'post_type'       => 'post',
        'order'           => 'ASC',
      ));
      while($homeNewProducts->have_posts()) {
        $homeNewProducts->the_post();
        
        get_template_part('template-parts/content', 'products');
      }
      wp_reset_postdata();
    ?>
    
    </div>
    <div class="wrapper--center mtop-4">
      <a href="<?php echo site_url('/produtos') ?>" class="button">Já escolheu</a>
    </div>

  </div>
</section>

<section class="cta">
<?php 
  $ctaContent = get_field('cta_content');
  $btnUrl = $ctaContent['cta_link'];
  ?>
  <h2 class="cta__title"><?php echo $ctaContent['cta_title']; ?></h2>
  <p class="cta__text"><?php echo $ctaContent['cta_subtitle']; ?></p>
  <a href="<?php echo site_url($btnUrl) ?>" class="button--red mtop-4">Venha nos visitar</a>
</section>

</main>

<?php 
get_footer(); 
?>
