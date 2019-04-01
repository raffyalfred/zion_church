<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tst
 */

get_header();
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

	<div class="communityNotice">
        <h2><?php the_title() ?></h2>
		<div class="communityNotice__wrap">
			<div class="communityNotice__content">
				<p><?php the_field('add_new_notice'); ?> </p>
			</div>
			<div class="communityNotice__image">
				<?php
					$image = get_field('image');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div><!-- communityNotice -->

</article><!-- #post-<?php the_ID(); ?> -->

<?php
the_post_navigation();
 ?>

<?php
get_sidebar();
get_footer();
