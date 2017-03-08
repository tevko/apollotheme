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
	<a href="/"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/public/img/logo.jpg" alt=""></a>
	<button class="_JS_toggleMenu menuButton">Menu</button>
	<nav class="mainNav _JS_menuIsClosed _JS_menu">
		<span class="_JS_close menuClose">X</span>
		<div class="navItem">
			<a href="/flat-panel-displays">Flat Panel Displays</a>
			<div class="subnav">
				<a href="/flat-panel-displays/tft-display-modules">TFT Display Modules</a>
				<a href="/flat-panel-displays/kit-solutions">Kit Solutions</a>
				<a href="/flat-panel-displays/compact-panels">Compact Panels</a>
				<a href="/flat-panel-displays/industrial-monitors">Industrial Monitors</a>
				<a href="/flat-panel-displays/custom-solutions">Custom Solutions</a>
				<a href="/flat-panel-displays/passive-displays">Passive Displays</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/touch-screens">Touch Screens</a>
			<div class="subnav">
				<a href="/touch-screens/touch-screens">Touch Screens</a>
				<a href="/touch-screens/touch-displays">Touch Displays</a>
				<a href="/touch-screens/your-design">Your Design</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/tft-controllers">TFT Controllers</a>
			<div class="subnav">
				<a href="/tft-controllers/tft-controller-rgb-dvi-hdmi-sdi-video">TFT Controller RGB DVI HDMI SDI Video</a>
				<a href="/tft-controllers/tft-controller-usb-lan-serial">TFT Controller USB LAN Serial</a>
				<a href="/tft-controllers/industrial-mediaplayers">Industrial Mediaplayers</a>
				<a href="/tft-controllers/remote-diagnostic">Remote Diagnostic</a>
				<a href="/tft-controllers/interface">Interface</a>
				<a href="/tft-controllers/dc-dc-converter">DC-DC Converter</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/optical-bonding">Optical Bonding</a>
		</div>
		<div class="navItem">
			<a href="/accessories">Accessories</a>
			<div class="subnav">
				<a href="/accessories/led-converters">LED Converters</a>
				<a href="/accessories/power-supplies">Power Supplies</a>
				<a href="/accessories/bluetooth-smart-module">Bluetooth Smart Module</a>
				<a href="/accessories/single-board-computers">Single Board Computers</a>
				<a href="/accessories/arm-raspberry-pi">Arm Raspberry Pi</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/company">Company</a>
			<div class="subnav">
				<a href="/company/company-network">Company Network</a>
				<a href="/company/contact-us">Contact Us</a>
				<a href="/company/corporate-philosophy">Corporate Philosophy</a>
				<a href="/company/green-company">Green Company</a>
				<a href="/company/linecard">Linecard</a>
				<a href="/company/iso-certificate">ISO-Certificate</a>
				<a href="/company/news">News</a>
				<a href="<?php the_field('mailing_list_link', 'option'); ?>">Join Our Newsletter</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/support">Support</a>
			<div class="subnav">
				<a href="/support/downloads">Downloads</a>
				<a href="/support/technical-support">Technical Support</a>
				<a href="/support/repair-and-return-rma">Repair & Return (RMA)</a>
				<a href="/support/guarantee">Guarantee</a>
				<a href="/support/eol">EOL</a>
				<a href="/support/reach">REACH</a>
				<a href="/support/conflict-minerals">Conflict Minerals</a>
				<a href="/support/rohs">ROHS</a>
			</div>
		</div>
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
