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
	<img src="<?php echo wp_get_attachment_image_src( get_field('hero_image') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_field('hero_image') ); ?>" sizes="100vw">

	<div class="heroText">
		<p class="primary"><?php the_field('hero_text_1'); ?></p>
		<p class="secondary"><?php the_field('hero_text_2'); ?></p>
	</div>

</section>

<section class="promo scaffold">
	<?php if( have_rows('promo_boxes') ): ?>

	    <?php while( have_rows('promo_boxes') ): the_row(); ?>

	 		<article class="promoBox">
	 			<a href="<?php the_sub_field('link'); ?>">
		 			<h3><?php the_sub_field('headline'); ?></h3>
		 			<h4><?php the_sub_field('sub-headline'); ?></h4>
		 			<p><?php the_sub_field('body_copy'); ?></p>
		 			<img src="<?php echo wp_get_attachment_image_src( get_sub_field('icon') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_sub_field('icon') ); ?>" alt="">
		 		</a>
	 		</article>

	    <?php endwhile; ?>

	<?php endif; ?>

	<article class="promoBox--Large scaffold">
		<p class="headline">
			<?php the_field('large_promo_box_headline'); ?>
			<img src="<?php echo wp_get_attachment_image_src( get_field('large_promo_box_image') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_field('large_promo_box_image') ); ?>" sizes="(max-width: 1000px) 100vh, 600px">
		</p>
		<?php the_field('large_promo_box_body_copy'); ?>
	</article>

</section>

<?php
get_footer();