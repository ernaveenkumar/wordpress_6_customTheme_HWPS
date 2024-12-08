<?php get_header(); ?>



<section class="page-wrap">
  <div class="container">
    <h3><?php the_title() ?></h3>
    
    <?php get_template_part('includes/section', 'content');?>
  </div>
</section>
  
  <?php get_footer() ?>