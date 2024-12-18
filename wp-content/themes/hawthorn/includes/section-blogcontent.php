<?php if(have_posts()): while(have_posts()): the_post(); ?>
  
<p><?php echo get_the_date(); ?></p>
<?php the_content(); ?>


  <?php

    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo "Posted by: ".$fname." ".$lname;
  ?>

  <?php 
    $tags = get_the_tags();
    if($tags):
          foreach($tags  as $tag): ?>
           <a href="<?php get_tag_link($tag->term_id); ?>"><?php echo $tag->name ?></a>
          <?php endforeach; ?>
   <?php endif; ?>


<?php endwhile; else: endif;?>