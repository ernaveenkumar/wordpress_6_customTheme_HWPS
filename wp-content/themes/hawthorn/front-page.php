<?php get_header(); ?>

<section class="page-wrap">


  <!-- feature slider -->
  <?php get_template_part('includes/section','homepageslider'); ?>
  <!-- Principal welcome message -->
  <?php get_template_part('includes/section','welcomemessage'); ?>
   <!-- Video -->
  <?php get_template_part('includes/section','homepagevideo');?>
  <!-- news and events -->
  <?php get_template_part('includes/section','homepagenewsandevents'); ?>
  <!-- calendar -->
  <?php get_template_part('includes/section', 'homepagecalander'); ?>
<!--    
  <div class="container">
    <h3><?php the_title() ?></h3>
    
    <?php get_template_part('includes/section', 'content');?>

    <?php get_search_form(); ?>
  </div> -->

</section>
  <!-- footer -->
  <?php get_footer() ?>