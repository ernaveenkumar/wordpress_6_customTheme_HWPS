<h1>This is content section</h1>
<?php if( have_posts() ):while( have_posts() ): the_post(); ?>
<?php the_content()?>
<?php endwhile; else: endif; ?>