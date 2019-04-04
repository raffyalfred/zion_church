<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zion_church
 */

?>

<nav id="site-navigation" class="main-navigation">
	<?php
	the_custom_logo();
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #site-navigation -->



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header postHeading">

		<div class="postHeading__container">
			
			<?php

			if ( is_singular() ) :
				the_title( '<h1 class="entry-title postHeading__title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta postHeading__postedBy">
					<?php
					zion_church_posted_on();
					//TURNED OFF: posted by to hide. Uncomment to display back on
					// zion_church_posted_by();
					?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

		</div>

	</header><!-- .entry-header -->

	<?php zion_church_post_thumbnail(); ?>

	<div class="entry-content contentPost">
		<?php

		if (has_post_thumbnail() ) {

		} else { ?>
			<img class="post-noImage" src="<?php bloginfo('template_directory');?>/images/default-image.jpg" alt="<?php the_title();?>"/>
		<?php }
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'zion_church' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zion_church' ),
			'after'  => '</div>',
		) );
		?>


	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
