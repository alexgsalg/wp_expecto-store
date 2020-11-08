<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;600;700&family=Varela&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="wrapper">

    <!-- lOGO WITH LINK TO HOME -->
    <a href="<?php echo get_home_url() ?>" class="header__logo">
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    if ( has_custom_logo() ) {
      echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
    } else {
      echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
    }
    ?>
    </a>

    <!-- NAV MENU -->
    <?php 
      wp_nav_menu(
        array(
          'menu' => 'primary',
          'container' => '',
          'theme_location' => 'primary',
          'items_wrap' => '<ul id="navbar" class="navbar">%3$s</ul>' //injects parameters on the menu
        )
      )
    ?>
  </div>
</header>