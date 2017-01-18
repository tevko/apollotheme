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
		<p class="secondary heroText" style="background-image: url('<?php echo wp_get_attachment_image_src( get_field("page_hero_image"), "full" )[0] ?>')"><?php the_field('page_hero_text'); ?></p>
	</section>
	<!-- main page content -->
	<main class="scaffold group">
		<?php if ( get_field('show_downloads_link') || get_field('show_request_product_link') ): ?>
			<div class="product-options">
				<?php if ( get_field('show_request_product_link') ): ?>
					<a href="#">Request Product</a>
				<?php endif; ?>
				<?php if ( get_field('show_downloads_link') ): ?>
					<h3>Downloads</h3>
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
			    	<?php
			    		if (get_permalink() == get_sub_field('sidebar_link') || get_permalink($post->post_parent) == get_sub_field('sidebar_link')) {
			    			$hidden = '';
			    		} else {
			    			$hidden = 'hidden';
			    		}
			    	?>

			 		<li>
			 			<a class="sidebar-link" href="<?php the_sub_field('sidebar_link'); ?>">
			 				<?php the_sub_field('sidebar_text'); ?>
			 			</a>
			 			<?php while( have_rows('sub_links') ): the_row(); ?>
			 				<li class="sidebar-sub-link <?php echo $hidden; ?>">
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
