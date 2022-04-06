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
		<footer class="footer" id="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="title">
							<h2>SKONTAKTUJ SIĘ</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-7">
						<h3>
							<?php _e("Zróbmy coś inspirującego","cfa-t");?>
						</h3>
						<p>
							<?php _e("Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum consequatur alias quibusdam placeat, totam quos ad veniam quidem vitae aspernatur distinctio, aliquam assumenda voluptates eaque ducimus eos, fugiat at non?","cfa-t");?>
						</p>
					</div>
					<div class="col-lg-5">
						<div class="footer-card">
							<img src="" alt="">
							<div class="">
								<div class="footer-card__name">Kacper Czapiewski</div>
								<div class="footer-card__position">Head of Agency</div>
								<a class="btn btn-secondary footer-card__btn" href="mailto:kacper@cfa.gg">kacper@cfa.gg</a>
							</div>
						</div>
					</div>
				</div>


				<div class="row justify-content-center">
					<div class="col-auto">
						<p><?php printf( esc_html__( 'Copyright by CFA', 'cfa-t' ), date_i18n( 'Y' ) ); ?></p>
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
