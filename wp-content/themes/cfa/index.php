<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option('page_for_posts');
get_template_part("components/pages/page-header");

?>
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<?php
			echo apply_filters('the_content', get_post_field('post_content', $page_id));

			edit_post_link(__('Edit', 'cfa'), '<span class="edit-link">', '</span>', $page_id);
			?>
		</div><!-- /.col -->
		<div class="col-md-12">
			<?php
			get_template_part('archive', 'loop');
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
