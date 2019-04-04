<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zion_church
 */
get_header();

$image = get_field('thumbnail_image')['url'];
$file_form = get_field('youth_release_form')['url'];
$date = get_field('program_date');
$time = get_field('program_time');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="program">
			<?php while ( have_posts() ) :the_post();?>
				<div class="program__img">
					<?php 
					if( !empty($image) ): ?>
						<img src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>

				<div class="program__datetime">
					<p class="heading-secondary"><?php the_field('program_name'); ?></p>
					<?php
					if( !empty($date) ): ?>
					<p class="program__date">Date: <?php echo the_field('program_date'); ?></p>
					<?php endif; ?>
					<?php
					if( !empty($time) ): ?>
					<p class="program__time">Time: <?php the_field('program_time'); ?></p>
					<?php endif; ?>
					<?php
					if( !empty($file_form) ): ?>
					<p class="program__files">Form: <a href="<?php echo $file_form; ?>" class="program__files-download">Download</a> </p>
					<?php endif; ?>
				</div>

				<div class="program__content">
					<p class="program__content-description">Description:<br><?php the_field('program_description'); ?></p>
				</div>
			<?php endwhile; // End of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();





