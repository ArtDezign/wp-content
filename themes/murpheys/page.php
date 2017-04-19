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

get_header(); ?>
<?php get_sidebar(); ?>
		<div class="col-9 content-area" id="single">
			
			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				?><h1><?php echo get_the_title(); ?></h1>
				<?php do_action( 'woocommerce_before_main_content' );  ?>
				<div class="page">
				<img src="<?php the_post_thumbnail_url('small'); ?>" class="image_post" />
				
				<?php
				
				
					echo get_the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
			</div>
	</div><!-- #primary -->
	</div>

<?php get_footer();
