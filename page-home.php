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
	<img src="<?php echo wp_get_attachment_image_src( get_field('hero_image') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_field('hero_image') ); ?>" alt="">

	<?php the_field('hero_text_1'); ?>
	<?php the_field('hero_text_2'); ?>
</section>

<section class="promo">
	<?php if( have_rows('promo_boxes') ): ?>

	    <?php while( have_rows('promo_boxes') ): the_row(); ?>

	 		<article class="promoBox">
	 			<a href="<?php the_sub_field('link'); ?>">
		 			<?php the_sub_field('headline'); ?>
		 			<?php the_sub_field('body_copy'); ?>
		 			<img src="<?php echo wp_get_attachment_image_src( get_sub_field('icon') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_sub_field('icon') ); ?>" alt="">
		 		</a>
	 		</article>

	    <?php endwhile; ?>

	<?php endif; ?>

	<article class="promoBox--Large">
		<?php the_field('large_promo_box_headline'); ?>
		<?php the_field('large_promo_box_body_copy'); ?>
		<img src="<?php echo wp_get_attachment_image_src( get_field('large_promo_box_image') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_field('large_promo_box_image') ); ?>" alt="">
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