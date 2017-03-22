<?php
/*
Template Name: Archives
*/
/**
	
HEY EVERYONE (HI WARNER) I'M TRYING AGAIN
	
	
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Murpheys
 * @since 2017 0.1
 */

get_header();
get_sidebar(); ?>


<div class='col-9'>

	
	<section id="primary" class="content-area">
			
			<h1>Archive</h1>
			
	<div class='col-9'>
		<main id="main" class="site-main" role="main">
			
			<?php 
			// the query
			$args = array(
				"post_type" => 'post'
			);
			$the_query = new WP_Query( $args ); ?>
					
			<?php if ( $the_query->have_posts() ) : ?>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_date(); ?>
				<?php the_content(); ?>
				<?php get_the_category(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>

    
			<?php else: ?>
				<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>

		</main>
	</div>
		<div class='col-3 navbar'>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?></div>
			<?php endif; ?>

		</div>
	</div>
	
	</section>
</div>

<?php get_footer(); ?>