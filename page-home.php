<?php
/**
 * Template Name: Home
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Apollo
 */

get_header(); ?>

<section class="hero">
	<?php the_field('hero_image'); ?>
	<?php the_field('hero_text_1'); ?>
	<?php the_field('hero_text_2'); ?>
</section>

<section class="promo">
	<?php if( have_rows('promo_boxes') ): ?>

	    <?php while( have_rows('promo_boxes') ): the_row(); ?>

	 		<article class="promoBox">
	 			<?php the_sub_field('headline'); ?>
	 			<?php the_sub_field('body_copy'); ?>
	 			<?php the_sub_field('icon'); ?>
	 			<?php the_sub_field('link'); ?>
	 		</article>

	    <?php endwhile; ?>

	<?php endif; ?>

	<article class="promoBox--Large">
		<?php the_field('large_promo_box_headline'); ?>
		<?php the_field('large_promo_box_body_copy'); ?>
		<?php var_dump(the_field('large_promo_box_image')); ?>
	</article>

</section>

<style>
	section, article {
		display: block;
		margin: 20px;
	}
</style>

<?php
get_footer();