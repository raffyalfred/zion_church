<?php /* Template Name: Programs Template */
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		
		<?php 
				$args = array( 'post_type' => 'programs', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<div class="pagecustomwidth">
				<div class="event-program">
                    <div>
						<?php 
							$image = get_field('thumbnail_image');

							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>	
                    </div>
					<div class="event-program__info">
						<div>
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('program_detail'); ?></p>
						</div>
						<div class="wp-block-button aligncenter is-style-outline custom-button"><a class="wp-block-button__link has-text-color has-luminous-vivid-amber-color" href="<?php echo get_permalink(get_the_ID()); ?>"><span class="hover-animate">View Details</span><br></a></div>
					</div>
				</div>
			</div>
				
			<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?> 