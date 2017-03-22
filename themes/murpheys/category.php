<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php 
	if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_excerpt();?>
         <a href="<?php the_permalink(); ?>" /><?php the_title() ?></a>
<?php
         the_post_thumbnail();
   endwhile;
endif;?>
<?php get_footer(); ?>