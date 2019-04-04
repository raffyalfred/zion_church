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

				<h2 class="heading">Church Activities</h2>

				<ul>
					<?php
						global $post;
						$args = array( 'post_type' => 'community_notice', 'posts_per_page' => 4 );
						$rand_posts = get_posts( $args );
						foreach ( $rand_posts as $post ) :
						setup_postdata( $post ); ?>
						<div class="event-box">
							<?php
								if (has_post_thumbnail() ) {

									the_post_thumbnail('medium-large');
								} else { ?>
									<img src="<?php bloginfo('template_directory');?>/images/default-image.jpg" alt="<?php the_title();?>"/>
								<?php }
							?>
							<li><h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></li>
							<span class="posts-readMore"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a></span>



						</div>

					<?php endforeach;
					wp_reset_postdata(); ?>
				</ul>

			</div>

			<div class="view-more">
				<a href="http://zion-a.web.dmitcapstone.ca/zion-church/community-notices/" class="button2">View More</a>
			</div>



			<div class="google-location">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1674.4556870445806!2d-113.52915141001647!3d53.59278462666885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a023879369234b%3A0xd14e5a965f2e3e4d!2sZion+Baptist+Church+of+Kensington!5e0!3m2!1sen!2sca!4v1550160586150" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="footer-links">
					<h2>Quick Links</h2>

					<div class="footer-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'secondary',
							'menu_class'	 => 'footer__items',
							'menu_id'        => 'footer-items'
						) ); ?>
					</div>

				</div>
			</div>


		<!-- end of footer-main -->
		</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://kofee.therayg.com/', 'zion_church' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Created by %s', 'zion_church' ), 'Koffee Labs' );
				?>
			</a>
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
