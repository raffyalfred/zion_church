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

			<h2 class="footer__heading">Upcoming events</h2>

			<ul>
				<?php
					global $post;
					$args = array( 'posts_per_page' => 3, 'category' => 3, 'orderby' => 'date' );
					$rand_posts = get_posts( $args );
					foreach ( $rand_posts as $post ) : 
					setup_postdata( $post ); ?>

					<div class="event-box">
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					</div>
					
				<?php endforeach; 
				wp_reset_postdata(); ?>
			</ul>

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
