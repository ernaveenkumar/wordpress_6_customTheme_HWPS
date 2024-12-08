<?php get_header(); ?>
<section class="page-wrap">
  <div class="container">
    <?php the_title(); ?>
    <?php get_template_part('includes/section', 'blogcontent'); ?>
  </div>
</section>
<?php get_footer(); ?>