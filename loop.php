
<?php while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php the_author(); ?>
<?php the_content(); ?>
<?php the_excerpt(); ?>
<?php endwhile; // end of the loop. ?>
