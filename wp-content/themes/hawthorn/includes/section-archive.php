<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="card mb-4">
    <div class="card-body">
      <h3 class="cart-title"><?php the_title(); ?> </h3>
        <div class="card-text">
        <p><?php the_excerpt(); ?></p>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
    </div>
  </div>

<?php endwhile; endif; ?>

