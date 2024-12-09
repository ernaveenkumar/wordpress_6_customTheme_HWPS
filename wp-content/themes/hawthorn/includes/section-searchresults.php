<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="card mb-4">
  
  <?php if(has_post_thumbnail()):?>
    <img class="card-img-top" src="<?php  the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail" >
  <?php endif;?>
    <div class="card-body">
      <h3 class="cart-title"><?php the_title(); ?> </h3>
        <div class="card-text">
        <p><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
    </div>
  </div>

<?php endwhile; else:?>
  <p>There are no results for <?php echo get_search_query(); ?> </p>
<?php endif; ?>

