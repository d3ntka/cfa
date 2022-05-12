<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();


?>
<div class="container tpl-404">
	<div class="row justify-content-center">
		<div class="col-auto">
			<div id="post-0" class="content error404 not-found">
				<h1 class="entry-title"><?php esc_html_e( '404', 'cfa' ); ?></h1>
				<div class="entry-content">
					<h3 class="pb-5"><?php esc_html_e( 'Szukaj a znajdziesz.', 'cfa' ); ?></h3>
					<a href="<?php echo site_url(); ?>"><?php esc_html_e( 'Spróbuj tutaj', 'cfa' ); ?></a>
				</div><!-- /.entry-content -->
			</div><!-- /#post-0 -->
		</div>
	</div>
</div>
<?php
get_footer();
