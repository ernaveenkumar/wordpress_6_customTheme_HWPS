<?php get_header(); ?>
<section class="page-wrap">
  <div class="container">

  <?php if(has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
  <?php endif;?>
    <?php the_title(); ?>
    <?php get_template_part('includes/section', 'blogcontent'); ?>
  </div>
  <?php ?>
</section>
<?php get_footer(); ?>