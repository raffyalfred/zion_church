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
	</header><!-- .entry-header -->

	<?php zion_church_post_thumbnail(); ?>

	<div class="entry-content contentPost">
        <h2><?php the_title() ?></h2>
        <div class="event-image">
						<?php

							$image = get_field('thumbnail_image');

							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
        <p><?php the_field('program_detail') ?></p>
        <p><?php the_field('program_description') ?></p>


	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
