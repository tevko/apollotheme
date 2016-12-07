<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Apollo
 */

get_header(); ?>
	<!-- page hero -->
	<section class="hero hero-generalPage">
		<img src="<?php echo wp_get_attachment_image_src( get_field('page_hero_image') )[0]; ?>" srcset="<?php echo wp_get_attachment_image_srcset( get_field('page_hero_image') ); ?>" alt="">

		<p class="secondary"><?php the_field('page_hero_text'); ?></p>
	</section>
	<!-- main page content -->
	<main class="scaffold group">
		<div class="Page-content">
			<?php while ( have_posts() ) : the_post(); ?>

	            <?php the_content(); ?>

	        <?php endwhile; ?>
        </div>
		<!-- custom sidebar -->
		<?php if( have_rows('sidebar') ): ?>
		<aside class="Page-sidebar">
			<ul>
			    <?php while( have_rows('sidebar') ): the_row(); ?>

			 		<li>
			 			<a class="sidebar-link" href="<?php the_sub_field('sidebar_link'); ?>">
			 				<?php the_sub_field('sidebar_text'); ?>
			 			</a>
			 		</li>

			    <?php endwhile; ?>
		    </ul>
		</aside>

		<?php endif; ?>
	</main>

<?php
get_footer();
