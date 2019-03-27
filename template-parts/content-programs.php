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
