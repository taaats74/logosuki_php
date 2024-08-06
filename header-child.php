<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <title>
    <?php
      if(is_single()):
        wp_title('|', true, 'right');
      elseif(is_page()):
        wp_title('|', true, 'right');
      elseif(is_archive()):
        wp_title('|', true, 'right');
      endif;
        bloginfo('name');
    ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="wrapper pc">
        <h1 class="logo">
          <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logosuki">
          </a>
        </h1>
        <nav>
          <ul>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#about">about</a>
            </li>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#works">works</a>
            </li>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#service">service</a>
            </li>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#media">media</a>
            </li>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#partner">partner</a>
            </li>
            <li>
              <a href="<?php echo home_url( '/' ); ?>#contact">contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="sp-logo sp">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      </div>
    </div>
  </header>

  <div class="sp-wrapper sp">
    <ul class="menu-icon">
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <nav class="sp-menu">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      </div>
      <ul>
        <li>
          <a href="<?php echo home_url( '/' ); ?>"> <span></span> TOP <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#about"> <span></span> ABOUT <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#works"> <span></span> WORKS <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#service"> <span></span> SERVICE <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#media"> <span></span> MEDIA <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#partner"> <span></span> PARTNER <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="<?php echo home_url( '/' ); ?>#contact" target="_blank" rel="noopener noreferrer">CONTACT</a>
        </li>
      </ul>
    </nav>
  </div>
