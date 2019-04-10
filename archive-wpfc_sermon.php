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
		<main id="main" class="site-main sermonContainer">

			<?php if(have_posts()): ?>

				<?php while(have_posts()): ?>
					<?php  
						the_post();
						the_content();
					?>
				<?php endwhile; ?>

				<?php else: ?>
					<div class="sermon">
						<div class="sermon__container">
							<div class="sermon__heading">
								<h2>We are currently in the process of transferring our sermons to our new site.</h2>
								<p class="subtext">Check back soon!</p>
							</div>
							
							<div class="sermon__imageContainer">
								<img src="<?php bloginfo('template_directory');?>/images/default-image.jpg" alt="<?php the_title();?>"/>
							</div>
						</div>
					</div>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_sidebar();
get_footer();
