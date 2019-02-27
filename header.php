<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zion_church
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
	<!-- <script text="css/javascript">
		$( document ).ready(function() {

$( ".cross" ).hide();
$( ".navigation__items ul" ).hide();
$( ".hamburger" ).click(function() {
$( ".navigation__items ul" ).slideToggle( "slow", function() {
$( ".hamburger" ).hide();
$( ".cross" ).show();
});
});

$( ".cross" ).click(function() {
$( ".navigation__items ul" ).slideToggle( "slow", function() {
$( ".cross" ).hide();
$( ".hamburger" ).show();
});
});

});
	</script> -->



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zion_church' ); ?></a>
	
	<header id="masthead" class="site-header header">
		<div class="site-branding header__nav">
			
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$zion_church_description = get_bloginfo( 'description', 'display' );
			if ( $zion_church_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $zion_church_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
			<div id="site-navigation" class="navigation main-navigation">
				<nav>
					<button class="menu-toggle navigation__button hamburger" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars fa-2x"></i><?php esc_html_e( '', 'zion_church' ); ?></button>
					<button class="menu-toggle navigation__button cross" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-times fa-2x"></i><?php esc_html_e( '', 'zion_church' ); ?></button>

					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'	 => 'navigation__items',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>

		</div><!-- .site-branding -->

		<!-- <div class="custom-header">
			<div class="custom-header__image">
			<img src="<?php // header_image(); ?>" height="<?php // echo get_custom_header()->height; ?>" width="<?php // echo get_custom_header()->width; ?>" alt="" />
			</div>
		</div> -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
