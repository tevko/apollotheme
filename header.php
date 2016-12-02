<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Apollo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/public/css/main.min.css">
</head>

<header class="Page-header scaffold">
	<img class="logo" src="http://placehold.it/175x100" alt="">
	<button class="_JS_toggleMenu menuButton">Menu</button>
	<nav class="mainNav _JS_menuIsClosed _JS_menu">
		<span class="_JS_close menuClose">X</span>
		<a href="#">Industrial Solutions</a>
		<a href="#">Controllers</a>
		<a href="#">Products</a>
		<a href="#">Optical Bonding</a>
		<a href="#">Customizing</a>
		<a href="#">Company</a>
		<a href="#">Support</a>
		<div class="mainNav-search">
			<form role="search" method="get" class="search-form" action="/">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" value="" name="s">
				</label>
				<input type="submit" class="search-submit" value="Search">
			</form>
		</div>
	</nav>
</header>

<script>
	(function() {
		var menu = document.querySelector('._JS_menu');
		document.querySelector('._JS_toggleMenu').addEventListener('click', function() {
			requestAnimationFrame(function() {
				menu.classList.contains('_JS_menuIsClosed') ? menu.classList.remove('_JS_menuIsClosed') : menu.classList.add('_JS_menuIsClosed');
			});
		});

		document.querySelector('._JS_close').addEventListener('click', function() {
			requestAnimationFrame(function() {
				menu.classList.add('_JS_menuIsClosed');
			});
		});
	})();
</script>