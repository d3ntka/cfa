<?php

/**
 * The Template for displaying all single posts.
 */

get_header();

if (have_posts()) :
	while (have_posts()) :
		the_post();

		get_template_part('content', 'single');

	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ($count_posts->publish > '1') :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>
	<hr class="mt-5">
	<div class="post-navigation">
		<?php
		if ($prev_post) {
			$prev_title = get_the_title($prev_post->ID);
		?>
			<div class="pr-3 me-auto">
				<a class="previous-post btn btn-gradient d-flex align-items-center" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" title="<?php echo esc_attr($prev_title); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
					</svg>
					<span class=""><?php echo wp_kses_post($prev_title); ?></span>
				</a>
			</div>
		<?php
		}
		if ($next_post) {
			$next_title = get_the_title($next_post->ID);
		?>
			<div class="pl-3 ms-auto">
				<a class="next-post btn btn-gradient d-flex align-items-center" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" title="<?php echo esc_attr($next_title); ?>">
					<span class=""><?php echo wp_kses_post($next_title); ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
					</svg>
				</a>
			</div>
		<?php
		}
		?>
	</div><!-- /.post-navigation -->
<?php
endif;

get_footer();
