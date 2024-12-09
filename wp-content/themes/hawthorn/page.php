<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">
    
  <?php if(is_active_sidebar('page-sidebar')): ?>
    <?php dynamic_sidebar('page-sidebar'); ?>
  <?php endif; ?>

    <?php get_template_part('includes/section', 'content');?>
  </div>
</section>

<?php get_footer() ?>