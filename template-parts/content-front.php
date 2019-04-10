<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zion_church
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
		<!-- <div class="custom-header">
			<div class="custom-header__image">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
		</div> -->

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php zion_church_post_thumbnail(); ?>

	<div class="entry-content ccontent pagecustom">
        <a href="http://zion-a.web.dmitcapstone.ca/zion-church/about"><div class="wp-block-cover has-background-dim has-parallax ccontent_section" style="background-image:url(http://zion-a.web.dmitcapstone.ca/zion-church/wp-content/uploads/2019/03/about-hero-lg-1024x682.jpg)"><h3 class="wp-block-cover-text">ABOUT<br></h3></div></a>

        <a href="http://zion-a.web.dmitcapstone.ca/zion-church/programs"><div class="wp-block-cover has-background-dim has-parallax" style="background-image:url(http://zion-a.web.dmitcapstone.ca/zion-church/wp-content/uploads/2019/03/programs-hero-lg.jpg)"><h3 class="wp-block-cover-text">PROGRAMS<br></h3></div></a>

        <a href="http://zion-a.web.dmitcapstone.ca/zion-church/sermons"><div class="wp-block-cover has-background-dim has-parallax" style="background-image:url(http://zion-a.web.dmitcapstone.ca/zion-church/wp-content/uploads/2019/03/sermons-hero-lg.jpg)"><h3 class="wp-block-cover-text">SERMON</h3></div></a>

        <a href="http://zion-a.web.dmitcapstone.ca/zion-church/contact-us"><div class="wp-block-cover has-background-dim has-parallax" style="background-image:url(http://zion-a.web.dmitcapstone.ca/zion-church/wp-content/uploads/2019/03/contact-hero-lg.jpg)"><h3 class="wp-block-cover-text">CONTACT US</h3></div></a>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'zion_church' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<!-- danne -->
