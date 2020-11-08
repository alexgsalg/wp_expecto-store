<?php 
get_header(); 
?>

<main class="pagecontent">

<section class="hero">
  <h1 class="hero__title">Vitrine Expecto Store!</h1>
  <p class="hero__text">Produtos geek para sua coleção.</p>
  <p class="hero__text">Nossas vendas são finalizadas pelo Whatsapp!</p>
</section>

<section>
<div class="wrapper features">
  <div class="feature-box">
    <h3 class="feature__title">Produtos licenciados do mundo dos bruxos!</h3>
  </div>
  <div class="feature-box">
    <h3 class="feature__title">Colecionáveis Harry Potter e figure actions</h3>
  </div>
</div>
</section>

<section>
<div class="wrapper specs">

  <div class="specbox">
    <svg class="specbox__icon" width="57" height="54" viewBox="0 0 57 54" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M21.0476 52C22.3626 52 23.4286 50.934 23.4286 49.6191C23.4286 48.3041 22.3626 47.2381 21.0476 47.2381C19.7326 47.2381 18.6667 48.3041 18.6667 49.6191C18.6667 50.934 19.7326 52 21.0476 52Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M47.2381 52C48.5531 52 49.6191 50.934 49.6191 49.6191C49.6191 48.3041 48.5531 47.2381 47.2381 47.2381C45.9231 47.2381 44.8571 48.3041 44.8571 49.6191C44.8571 50.934 45.9231 52 47.2381 52Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M2 2H11.5238L17.9048 33.881C18.1225 34.9771 18.7188 35.9618 19.5894 36.6626C20.46 37.3634 21.5493 37.7357 22.6667 37.7143H45.8095C46.9269 37.7357 48.0162 37.3634 48.8868 36.6626C49.7574 35.9618 50.3537 34.9771 50.5714 33.881L54.381 13.9048H13.9048" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <div class="specbox__desc">
      <p class="specbox__title">Compra via Whatsapp</p>
      <p>Escolha seu produto e entre em contato.</p>
    </div>
  </div>

  <div class="specbox">
    <svg class="specbox__icon" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M47 27V52H7V27" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M52 14.5H2V27H52V14.5Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M27 52V14.5" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M27 14.5H15.75C14.0924 14.5 12.5027 13.8415 11.3306 12.6694C10.1585 11.4973 9.5 9.9076 9.5 8.25C9.5 6.5924 10.1585 5.00269 11.3306 3.83058C12.5027 2.65848 14.0924 2 15.75 2C24.5 2 27 14.5 27 14.5Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M27 14.5H38.25C39.9076 14.5 41.4973 13.8415 42.6694 12.6694C43.8415 11.4973 44.5 9.9076 44.5 8.25C44.5 6.5924 43.8415 5.00269 42.6694 3.83058C41.4973 2.65848 39.9076 2 38.25 2C29.5 2 27 14.5 27 14.5Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <div class="specbox__desc">
      <p class="specbox__title">Entrega para todo Brasil</p>
      <p>Calcule o frete conosco e enviaremos rapidamente.</p>
    </div>
  </div>

  <div class="specbox">
    <svg class="specbox__icon" width="73" height="54" viewBox="0 0 73 54" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M64.5 2H8.25C4.79822 2 2 4.79822 2 8.25V45.75C2 49.2018 4.79822 52 8.25 52H64.5C67.9518 52 70.75 49.2018 70.75 45.75V8.25C70.75 4.79822 67.9518 2 64.5 2Z" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M2 20.75H70.75" stroke="#666666" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <div class="specbox__desc">
      <p class="specbox__title">Facilidade de pagamento</p>
      <p>Escolha a melhor forma de pagamento para você</p>
    </div>
  </div>

</div>
</section>
    
<section>
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
            <?php the_post_thumbnail('thumbnail'); ?>
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
  <a href="" class="button--red">venha nos visitar</a>
</section>

</main>


<?php 
get_footer(); 
?>
