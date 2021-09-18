<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package creator
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		body {
			color: <?php echo get_theme_mod( 'creator_body_text_color', '#939393' ); ?>;
		}
		#masthead {
			background-color: <?php echo get_theme_mod( 'creator_header_bg_color', '#161616' ); ?>;
			border-color: <?php echo get_theme_mod( 'creator_header_border_color', '#161616') ?>
		}
		#primary-menu {
			background-color: <?php echo get_theme_mod( 'creator_nav_bg_color', '#161616' ); ?>;
		}
		#primary-menu li a {
			color: <?php echo get_theme_mod( 'creator_nav_text_color', '#b5b5b5' ); ?>;
		}
		#primary-menu .current-menu-item{
			background-color: <?php echo get_theme_mod( 'creator_nav_current_menu_item_color', '#1c1c1c' ); ?>;
		}
		h2.entry-title a{
			color: <?php echo get_theme_mod( 'creator_post_title_color', '#919191' ); ?>;
		}
		div.entry-meta{
			color: <?php echo get_theme_mod( 'creator_post_metadata_text_color', '#494949' ); ?>;
		}
		div.entry-meta a{
			color: <?php echo get_theme_mod( 'creator_post_metadata_link_color', '#969696' ); ?>;
		}
		.pagination, .pagination a {
			color: <?php echo get_theme_mod( 'creator_pagination_text_color', '#969696' ); ?>;
		}
		.pagination .current {
			background-color: <?php echo get_theme_mod( 'creator_pagination_current_item_bg_color', '#40726d' ) ?>;
			color: <?php echo get_theme_mod( 'creator_pagination_current_item_text_color', '#c6c6c6' ); ?>;
		}
		a {
			color: <?php echo get_theme_mod( 'creator_pagination_current_item_bg_color', '#40726d' ); ?>;
		}
		.site-footer {
			background-color: <?php echo get_theme_mod( 'creator_footer_bg_color', '#1b1b1b' ) ?>;
			color: <?php echo get_theme_mod( 'creator_footer_text_color', '#5e5e5e' ); ?>;
		}
		.site-info a {
			color: <?php echo get_theme_mod( 'creator_footer_link_color', '#40726d' ); ?>;
		}
		input[type="search"] {
			background-color: <?php echo get_theme_mod( 'search_form_field_color', '#262626' ) ?>;
			color: <?php echo get_theme_mod( 'search_form_field_text_color', '#666' ) ?>;
			border-color: <?php echo get_theme_mod( 'search_form_field_border_color', '#444442' ) ?>;
		}
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'creator' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			get_search_form();
			if ( ! has_custom_logo() && is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			elseif ( ! has_custom_logo() ) :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$creator_description = get_bloginfo( 'description', 'display' );
			if ( $creator_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $creator_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
