<?php
/*
Template Name: Archives
*/
/*
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

<div class='col-9' id='woodgrain'>

	
	<section id="primary" class="content-area">
			
		<h1>Hot Topics</h1>
			
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
			<div class="row">
				<div class="col-12">
					<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h5><?php the_date(); ?></h5>
				</div>
				<div class="col-3">
					<?php the_post_thumbnail(); ?>
					
				</div>
				<div class="col-9">
					<?php the_excerpt(); ?>
						<?php get_the_category(); ?>
						<?php $tags = get_tags( array('orderby' => 'count', 'order' => 'DESC') ); ?>
				</div>
					<?php endwhile; ?>
					<!-- end of the loop -->
		
					<!-- pagination here -->
		
					<?php wp_reset_postdata(); ?>
		
				
					<?php else: ?>
						<?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
					<?php endif; ?>
			</div>

		</main>
	</div>
	
	<div class='col-3 navbar'>
		<div class='archiveSidebar'>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php foreach ( (array) $tags as $tag ) {
				echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ') </a></li>'; } ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	
	</section>
</div>

<!--

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

-->

<?php get_footer(); ?>