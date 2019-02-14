<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zion_church
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer site-footer">

		<div class="footer__main">

			<!-- hidden until medium breakpoint -->
			<div class="events">
				<h2 class="heading">Upcoming events</h2>
				<ul>
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'category' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
						$rand_posts = get_posts( $args );
						foreach ( $rand_posts as $post ) : 
						setup_postdata( $post ); ?>
	
						<div class="event-box">
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php the_post_thumbnail('thumbnail'); ?>
							<span class="event-box-excerpt"><?php the_excerpt(); ?></span>
							<a class="read-more" href="<?php echo get_permalink(); ?>"> Read More...</a>
						</div>
	
					<?php endforeach; 
					wp_reset_postdata(); ?>
				</ul>
				<div class="footer__view-more">
					<a href="#" class="view-more-button">View More</a>
				</div>
			</div>
			
			<div class="google-location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1674.4556870445806!2d-113.52915141001647!3d53.59278462666885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023879369234b%3A0xd14e5a965f2e3e4d!2sZion+Baptist+Church+of+Kensington!5e0!3m2!1sen!2sca!4v1550160586150" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div>
					<h2>Quick Links</h2>
					<ul class="quick-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Programs</a></li>
						<li><a href="#">Sermons</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Give</a></li>
					</ul>
				</div>
			</div>


		<!-- end of footer-main -->
		</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'zion_church' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'zion_church' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Created By: %1$s by %2$s.', 'zion_church' ), 'KofeeLabs', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
