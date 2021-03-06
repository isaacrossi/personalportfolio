<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package personalportfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'personalportfolio' ); ?></a>

	<header id="masthead" class="header  container">

		<a href="/"><img src="<?php bloginfo('template_url');?>/assets/isaac-rossi.svg" class="header__logo"></a>
		
		<nav class="header__nav">
			<a href="#about" class="header__about">About</a>
			<a href="#work" class="header__work">Work</a>
			<a href="#blog" class="header__blog">Blog</a>
		</nav>

	</header>

