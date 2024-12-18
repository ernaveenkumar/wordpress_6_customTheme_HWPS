<?php 
  $args = array(
    'post_type' => 'welcomemessages',
    'posts_per_page' => '1'
  );

  $query = new WP_Query($args);
  //print('<pre>');
  //var_dump($query);
?>


<div class="container">
<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
      <section class="row mt-sm-2 mt-md-4 bg-body-secondary">
        <!-- -sm-12 col-md-6 p-4 -->
        <article class="col-sm-12">
            <h1 class="text-center mt-sm-2 mt-md-4"> <?php the_title(); ?></h1>
            <p class="mt-4 lh-bse"> 
            <?php the_content(); ?>
            </p>
        </article>
        <!-- -sm-12 col-md-6 mt-sm-12 mt-md-4 p-4 -->
        <article class="col-sm-12">
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>  
          <!-- <?php the_post_thumbnail('large'); ?> -->
          <?php if($featured_img_url): ?>
          <img src="<?= $featured_img_url ?>" alt="" width="100%" class="img-thumbnail">
          <?php endif;?>
        </article>
      </section>
      <?php endwhile; else: endif;?>
      <?php wp_reset_query(); ?>
</div>