<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage iisgroup
 *  * Template Name: آخرین مطالب
 */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 8,
	'paged' => $paged
);
$the_query = new WP_Query($args);
get_header();
?>
<div class="bg-image pt-5 pb-5" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.jpg);">
	<div class="container p-0 ps-lg-4 pe-lg-4 ps-md-0 pe-md-0 ps-lg-5 pe-xl-5 pt-3">
		<div class="ps-xl-5 pe-xl-5">
			<section>
				<div class="bg-white p-4 pt-5">
					<div class="text-center">
						<h5 class="text-center font-bold"><?php _e('Blog', 'iisgroup') ?>
						</h5>
					</div>
					<div class="row populated mt-5 justify-content-center row-cols-1 row-cols-lg-3">
						<?php if ($the_query->have_posts()) { ?>
							<?php
							// Start the Loop.
							while ($the_query->have_posts()) :
								$the_query->the_post();
								get_template_part('template-parts/blog/blog', 'item');

							// End the loop.
							endwhile;
							?>

							<div class="pagination">
								<?php
								echo paginate_links(array(
									'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
									'total'        => $the_query->max_num_pages,
									'current'      => max(1, get_query_var('paged')),
									'format'       => '?paged=%#%',
									'show_all'     => false,
									'type'         => 'plain',
									'end_size'     => 2,
									'mid_size'     => 1,
									'prev_next'    => true,
									'prev_text'    => sprintf('<i></i> %1$s', __('next', 'iisgroup')),
									'next_text'    => sprintf('%1$s <i></i>', __('prev', 'iisgroup')),
									'add_args'     => false,
									'add_fragment' => '',
								));
								?>
							</div>
							<?php wp_reset_query(); ?>
						<?php
						} else {
							get_template_part('template-parts/content/content', 'none');
						}
						?>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<?php
get_footer();