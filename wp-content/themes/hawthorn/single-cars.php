<h1>Single Car</h1>
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
  <div class="row">
    <div class="col"><?php echo get_post_meta($post->ID, '
colour', true); ?></div>
    <div class="col"><?php echo get_post_meta($post->ID, 'registration_number', true)?></div>


    <?php the_field('colour') ?>
    <?php the_field('registration_number') ?>
  </div>
</section>
<?php get_footer(); ?>