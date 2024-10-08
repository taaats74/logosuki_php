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
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logosuki">
          </a>
        </h1>
        <nav>
          <ul>
            <li>
              <a href="#about">about</a>
            </li>
            <li>
              <a href="#works">works</a>
            </li>
            <li>
              <a href="#service">service</a>
            </li>
            <li>
              <a href="#media">media</a>
            </li>
            <li>
              <a href="#partner">partner</a>
            </li>
            <li>
              <a href="#contact">contact</a>
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
          <a href="#"> <span></span> TOP <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#about"> <span></span> ABOUT <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#works"> <span></span> WORKS <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#service"> <span></span> SERVICE <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#media"> <span></span> MEDIA <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#partner"> <span></span> PARTNER <i class="fa-solid fa-chevron-right"></i></a>
        </li>
        <li>
          <a href="#contact" target="_blank" rel="noopener noreferrer">CONTACT</a>
        </li>
      </ul>
    </nav>
  </div>
