<?php 
  $args = array(
    'post_type' => 'hawthornevents',
    'posts_per_page' => '6'
  );
  $query = new WP_Query($args);
?>

<?php $i = 2; ?>

  <section class="newsandevents_calendar bg-light container bg-gradient 
  mt-sm-2 mt-md-4">
  <h1 class="text-center mt-4 fw-bold mt-sm-2 mt-md-4">News and events</h1>
    <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
     
      <!-- <?php  if($i % 2 == 0):  ?> -->
      <div class="row gap-3-md">
      <!-- <?php endif; ?> -->
          <article class="col-sm-12">
              <!-- <img
              src="annual function invitation card with kids on a brazer.PNG"
              alt=""
              class="img-thumbnail rounded-start"
              width="150px"
              height="150px"
              /> -->
              <div class="p-2">
                <h5><?= the_title(); ?></h5>
                <p class="lh-base">
                  <?= the_excerpt(); ?>
                  <a class="btn btn-primary" href="<?= the_permalink($query->the_post()) ?>">Read more</a>
                </p>
              </div>
          </article>
      <!-- <?php $i++; if($i%2 == 0): ?> -->
      </div> 
      <!-- <?php endif; ?>     -->
    <?php endwhile; else: endif; ?>
  </section>