<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">
      <?php get_template_part('includes/section','archive'); ?>
      <?php previous_posts_link(); ?>
      <?php next_posts_link(); ?>
  </div>
</section>

<?php get_footer(); ?>

<!-- https://www.youtube.com/watch?v=WbGlhhRLEbA&list=PLgFB6lmeXFOpHnNmQ4fdIYA5X_9XhjJ9d&index=6 -->