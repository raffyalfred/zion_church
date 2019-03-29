<?php /* Template Name: Events Template */

get_header();?>

<?php
	$args = array( 'post_type' => 'events', 'posts_per_page' => 10 );
	$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <!-- content -->
        <div class="event-post">
			<div class="event-post__container">
				<div class="event-content">
					<h2><?php the_title(); ?></h2>
					<div class="event-dateTime">
						<p class="date"><span>Date:</span> <?php the_field('date'); the_field('date_text'); ?></p>
						<p class="time"><span>Time of Event:</span> <?php the_field('time'); the_field('time_text'); ?></p>
					</div>
                    <div class="event-description">
                        <p><?php the_field('description'); ?></p>
                    </div>
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
<?php get_footer(); ?>
