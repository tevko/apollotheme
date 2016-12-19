<?php
/**
 * Template Name: Product
 *
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
		<?php if ( get_field('show_downloads_link') || get_field('show_request_product_link') ): ?>
			<div class="product-options">
				<?php if ( get_field('show_request_product_link') ): ?>
					<a href="#">Request Product</a>
				<?php endif; ?>
				<?php if ( get_field('show_downloads_link') ): ?>
					<h3>Downloads</h3> <span class="_JS_toggle">+</span>
					<div class="_JS_downloads">
						<?php while( have_rows('downloads') ): the_row(); ?>
							<a href="<?php the_sub_field('file_url'); ?>">
								<?php the_sub_field('file_name'); ?>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
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
			 			<?php while( have_rows('sub_links') ): the_row(); ?>
			 				<li class="sidebar-sub-link">
			 					<a class="sidebar-link" href="<?php the_sub_field('sublink_url'); ?>">
			 						<?php the_sub_field('sublink_text'); ?>
			 					</a>
			 				</li>
			 			<?php endwhile; ?>
			 		</li>

			    <?php endwhile; ?>
		    </ul>
		</aside>

		<?php endif; ?>
	</main>

<?php
get_footer();
