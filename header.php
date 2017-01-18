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
	<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/public/img/logo.jpg" alt="">
	<button class="_JS_toggleMenu menuButton">Menu</button>
	<nav class="mainNav _JS_menuIsClosed _JS_menu">
		<span class="_JS_close menuClose">X</span>
		<div class="navItem">
			<a href="/industrial-solutions">Industrial Solutions</a>
			<div class="subnav">
				<a href="/industrial-solutions/public-displays">Public Displays</a>
				<a href="/industrial-solutions/industrial-displays">Industrial Displays</a>
				<a href="/industrial-solutions/fire-rated-displays">Fire Rated Displays</a>
				<a href="/industrial-solutions/video-wall">Video Wall</a>
				<a href="/industrial-solutions/touch-displays">Touch Displays</a>
				<a href="/industrial-solutions/custom-solutions">Custom Solutions</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/controllers">Controllers</a>
			<div class="subnav">
				<a href="/controllers/tft-controller-rgb-dvi-hdmi-sdi-video">TFT Controller RGB DVI HDMI SDI Video</a>
				<a href="/controllers/tft-controller-usb-lan-serial">TFT Controller USB LAN Serial</a>
				<a href="/controllers/industrial-mediaplayers">Industrial Mediaplayers</a>
				<a href="/controllers/remote-diagnostic">Remote Diagnostic</a>
				<a href="/controllers/dc-dc-converter">DC - DC Converter</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/products">Products</a>
			<div class="subnav">
				<a href="/products/tft-displays">TFT Displays</a>
				<a href="/products/compact-panels">Compact Panels</a>
				<a href="/products/led-converters">LED Converters</a>
				<a href="/products/touch-screens">Touch Screens</a>
				<a href="/products/chassis-solutions">Chassis Solutions</a>
				<a href="/products/power-supplies">Power Supplies</a>
				<a href="/products/bluetooth-smart-module">Bluetooth Smart Module</a>
				<a href="/products/army-raspberry-pi">ARMY Raspberry Pi</a>
				<a href="/products/passive-displays">Passive Displays</a>
				<a href="/products/single-board-computers">Single Board Computers</a>
				<a href="/products/display-kit-solutions">Display Kit Solutions</a>
				<a href="/products/applications">Applications</a>
				<a href="/products/network-accessories">Network Accessories</a>
				<a href="/products/software">Software</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/optical-bonding">Optical Bonding</a>
			<div class="subnav">
				<a href="/optical-bonding/real-vacubond-applications">Real VacuBond Applications</a>
				<a href="/optical-bonding/real-vacubond-photos">VacuBond Photos</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/customizing">Customizing</a>
			<div class="subnav">
				<a href="/customizing/customized-design-digital-signage">Customized Design Digital Signage</a>
				<a href="/customizing/engineering-presentation">Engineering Presentation</a>
				<a href="/customizing/revitalisation-substitution-service">Revitalisation / Substitution Service</a>
			</div>
		</div>
		<div class="navItem">
			<a href="/company">Company</a>
			<div class="subnav">
				<a href="/company/company-network">Company Network</a>
				<a href="/company/contact-us">Contact Us</a>
				<a href="/company/management">Management</a>
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
				<a href="/support/gaurantee">Gaurantee</a>
				<a href="/support/eol">EOL</a>
				<a href="/support/reach">REACH</a>
				<a href="/support/conflict-minerals">Conflict Minerals</a>
				<a href="/support/rohs">ROHS</a>
				<a href="/support/direct-contact">Direct Contact</a>
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