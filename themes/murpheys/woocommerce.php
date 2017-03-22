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

// Warner hopes this works please!

get_header(); ?>
<?php get_sidebar(); ?>
		<div class="col-9" id="single">
			<h1>What up buddy!</h1>
		<h1><?php echo get_the_title(); ?></h1>
		
			<?php woocommerce_content(); ?>

	</div><!-- #primary -->
	</div>

<?php get_footer();
