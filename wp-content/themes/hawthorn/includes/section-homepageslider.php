<?php
  $args = array(
    'post_type' => 'homepagesliders',
    //'posts_per_page' => '5'
  );

  $query = new WP_Query($args);
  $count_posts = wp_count_posts( 'homepagesliders' );
  $imgcounter =  $query->found_posts;
  $imgcp = 1; 
  $imgslidercp = 1;

?>

<section class="container mt-sm-2 mt-md-4">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <?php while($imgcp <= $imgcounter): ?>
      <?php if($imgcp == 1): ?>       
        <?php $class = "active"?>
      <?php endif;?>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?=$imgcp?>" class="<?= $class ?>" aria-current="true" aria-label="Slide<?= $imgcp ?>"></button>
    <?php  $imgcp++; endwhile; ?>
  </div>
  <div class="carousel-inner">
    
      
      <?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
       
        <?php $featured_img =  get_the_post_thumbnail_url(get_the_ID(),'full')?>
          <?php if($featured_img):?>
            <div class="carousel-item<?php echo ($imgslidercp <= 1) ? " active":""; ?>" data-bs-interval="10000">   
              <img src="<?= $featured_img ?>" alt="<?= the_title(); ?>" width="100%" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
                <h5><?= the_title(); ?></h5>
                <p><?= the_excerpt(); ?></p>
              </div>
            </div>
          <?php  endif;?>
      <?php $imgslidercp++; endwhile; else: endif;?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</section>