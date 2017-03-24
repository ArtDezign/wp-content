<?php
/*
Template Name: Events
*/
/**
	
	
 * The template for displaying event pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Murpheys
 * @since 2017 0.1
 */
 
get_header();
get_sidebar(); ?>

<div class='col-9' id='woodgrain'>
	
	<section id="primary" class="content-area">
			
		<h1>Events</h1>
			
	<div class='col-9'>
		<main id="main" class="site-main" role="main">
			
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_date(); ?>
				<?php the_content(); ?>
				<?php get_the_category(); ?>
    
			<?php endwhile; else: ?>
				<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>
			
			
	
			

		</main>
	</div>
	
	</section>
	
</div>

<?php get_footer(); ?>