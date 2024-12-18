<?php  
  $args = array(
    'post_type' => 'hawthornvideos',
    'posts_per_page' => '1'
  );

  $query = new WP_Query($args);
?>

<?php if($query->have_posts()):while($query->have_posts()): $query->the_post(); ?>
  <!-- <?php $video_url = get_post_meta(get_the_id(), 'url')[0]; ?> -->
  <?php $video_url = get_post_meta(get_the_id(), 'hawthornvideo_youtubeurl')[0]; ?>

  <section class="container mt-sm-2 mt-md-4">
          <div class="row">
            <div class="col-sm-12 text-center">
            <h1><?= the_title(); ?></h1>
            <?= the_content();?>
            <?php
              $ex = explode('/', $video_url);
              $sz = sizeof($ex);
            ?>
            <?php if($sz):?>
            <iframe src="https://www.youtube.com/embed/<?= $ex[$sz-1] ?>" style="height:500px;width:700px;" title="Iframe Example" class="img-fluid"></iframe>
            <?php endif; ?>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium')?>
              <?php if($featured_img_url): ?>
                <img src="<?= $featured_img_url ?>" alt="<?= the_content();?>" width="100%" class="img-fluid img-thumbnail">
              <?php endif;?>
            </div>
          </div>
  </section>
<?php endwhile; else: endif;?>

