<?php
  $args = array(
    'post_type' => 'schoolcalendar',
    'posts_per_page' => '6'
  );
  $query = new WP_Query($args);
?>

<section class="sec_calender container mt-sm-2 mt-md-4">
    <h1 class="text-center mt-2 mt-md-4">Calendar</h1>
      <div class="row">
        <article class=" col">
          <div class="list-group">
            <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
              <?php  $date = get_post_meta(get_the_ID(), 'schoolcalendar_datefrom', true); ?>
              <?php $datec = date_create($date); ?>         
                  <a href="<?= the_permalink(get_the_ID()); ?>" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= the_title(); ?></h5>
                      <small><?= date_format($datec, 'd/m/Y'); ?></small>
                    </div>
                    <p class="mb-1"><?= the_excerpt(); ?></p>
                    <small>And some small print.</small>
                  </a>  
            <?php endwhile; else: endif;?>
          </div>
        </article>
      </div>
</section>