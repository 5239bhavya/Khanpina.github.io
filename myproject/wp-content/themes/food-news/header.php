<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <header>
 *
 * @package Food News
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( 'https://gmpg.org/xfn/11' ); ?>">
	<?php if( is_singular() && pings_open( get_queried_object() ) ) { ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'food-news' ); ?></a>

<?php $menu_sticky = get_theme_mod( 'wp_newspaper_header_sticky_menu_option', true ); ?>

<?php
	// Default values for 'wp_newspaper_social_media' theme mod.
	$defaults = "";
	$social_media = get_theme_mod( 'wp_newspaper_social_media', $defaults );
?>



<?php
	set_query_var( 'menu_sticky', $menu_sticky );
	set_query_var( 'social_media', $social_media );

	
	get_template_part( 'template-parts/template', 'header' );
	
?>


<?php if ( class_exists( 'Breadcrumb_Trail' ) && ! is_home() && ! is_front_page() ) : ?>               
	<div class="breadcrumbs">
		<div class="container"><?php breadcrumb_trail(); ?></div>
	</div>
<?php endif; ?>