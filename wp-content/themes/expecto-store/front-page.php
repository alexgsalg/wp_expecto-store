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
        $args  = array(
          'posts_per_page'  => 6,
          'post_type'       => 'post',
          'order'           => 'ASC',
        );

        $posts = get_posts($args);
        foreach ($posts as $post) :
        ?>
        <a href="<?php the_permalink() ?>" class="product">
            <?php the_post_thumbnail('medium'); ?>
            <p class="product__title"><?php the_title(); ?></p>
            <p class="product__price">R$ 00,00</p>
          </a>
        <?php endforeach; ?>
    </div>
    <a href="" class="button">Já escolheu</a>

  </div>
</section>

<section class="cta">
  <h2 class="cta__title">Eventos que participamos!</h2>
  <p class="cta__text">Estamos presentes em grandes eventos do mundo geek</p>
  <a href="#" class="button--red">Venha nos visitar</a>
</section>

</main>


<?php 
get_footer(); 
?>
