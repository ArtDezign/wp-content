<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
get_sidebar(); ?>


<div class='col-9'>
<!-- 	Main content		 -->
	<div class='col-9 content-area' >
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail(); ?>
				<?php the_date(); ?>
				<?php the_content(); ?>
				<?php get_the_category(); ?>
    
			<?php endwhile; else: ?>
				<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
			<?php endif; ?>

		</main>
	</div>
<!-- 	Sidebar -->
	<div class='col-3 navbar'>
		<p>this will be a menu</p>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?></div>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>