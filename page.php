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
		<p class="secondary heroText" style="background-image: url('<?php echo wp_get_attachment_image_src( get_field("page_hero_image"), "full" )[0] ?>')"><?php the_field('page_hero_text'); ?></p>
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
			    	<?php
			    		if (get_permalink() == get_sub_field('sidebar_link') || get_permalink($post->post_parent) == get_sub_field('sidebar_link')) {
			    			$hidden = '';
			    		} else {
			    			$hidden = 'hidden-sub-links';
			    		}
			    	?>

			 		<li class="<?php echo $hidden; ?>">
			 			<a class="sidebar-link" href="<?php the_sub_field('sidebar_link'); ?>">
			 				<?php the_sub_field('sidebar_text'); ?>
			 			</a>
			 			<ul>
			 			<?php while( have_rows('sub_links') ): the_row(); ?>
			 				<li class="sidebar-sub-link">
			 					<a class="sidebar-link" href="<?php the_sub_field('sublink_url'); ?>">
			 						<?php the_sub_field('sublink_text'); ?>
			 					</a>
			 				</li>
			 			<?php endwhile; ?>
			 			</ul>
			 		</li>

			    <?php endwhile; ?>
		    </ul>
		</aside>

		<?php endif; ?>
	</main>

<?php
get_footer();
