<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zion_church
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		
		<?php 
				$args = array( 'post_type' => 'weekly_events', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				
			<div class="entry-content">
					<?php the_field('program_name'); ?>
					<?php the_field('date'); ?>  	
					<?php the_field('time'); ?> 
					<?php the_field('description'); ?> 
					<?php 

						$image = get_field('image');

						if( !empty($image) ): ?>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						<?php endif; ?>
						
			</div>
				
			<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
