<?php /* Template Name: Programs Template */
get_header();?>

	<?php 
				$args = array( 'post_type' => 'programs', 'posts_per_page' => 10 );
				$the_query = new WP_Query( $args ); 
		?>

        <?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <!-- content -->
                <p><?php the_field('program_name'); ?></p>
                <a href="<?php echo get_permalink(get_the_ID()); ?>"><?php the_field('program_name'); ?>
                </a>

            <?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
<?php get_footer(); ?> 