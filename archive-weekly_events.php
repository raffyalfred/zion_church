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
	hellow world
	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
				$args = array( 'post_type' => 'weekly_events', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args );
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


			<div class="event-post">
				<div class="event-post__container">
					<div class="event-content">
						<h2><?php the_title(); ?></h2>
						<div class="event-dateTime">
							<p class="date"><span>Date:</span> <?php the_field('date'); the_field('date_text'); ?></p>
							<p class="time"><span>Time of Event:</span> <?php the_field('time'); the_field('time_text'); ?></p>
						</div>
						<p class="event-description"><?php the_field('description'); ?> </p>
					</div>
					<div class="event-image">
						<?php

							$image = get_field('image');

							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
