<a href="<?php the_permalink() ?>" class="product">
  <div class="product__imgbox">
    <?php the_post_thumbnail('medium'); ?>
  </div>
  <p class="product__title"><?php the_title(); ?></p>
  <p class="product__price">R$ 00,00</p>
</a>