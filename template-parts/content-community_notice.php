<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zion_church
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php zion_church_post_thumbnail(); ?>

	<div class="entry-content">

		<div class="communityPost">
			<div class="communityPost__container">
				<h2><?php the_title() ?></h2>
				<div class="aligncenter is-style-outline custom-button"><a class="wp-block-button__link has-text-color has-luminous-vivid-amber-color" href="<?php echo get_permalink(get_the_ID()); ?>"><span class="hover-animate">Read More</span><br></a></div>
			</div>
		</div>


	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
