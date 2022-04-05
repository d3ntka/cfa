			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="title">
							<h2>SKONTAKTUJ SIĘ</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p><?php printf( esc_html__( 'Copyright by', 'cfa' ), date_i18n( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
					</div>


				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
