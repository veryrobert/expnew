<?php get_header(); ?>



<?php include'menu.php'; ?>



<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_title();
      the_excerpt();
   endwhile;
endif;
?>



<?php get_footer(); ?>