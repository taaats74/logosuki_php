<?php
  /*
  Template Name: Top Page
  Template Post Type: page
  */
?>

<?php get_header(); ?>

  <?php
    if(have_posts()):
    while(have_posts()): the_post();
  ?>
  <?php the_content(); ?>
  <?php
    endwhile;
  endif;
  ?>

<?php get_footer(); ?>


<!-- <h1>sample code</h1> -->
