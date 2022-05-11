			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_single() || is_archive()) :
			?>
				</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
			endif;
			?>
			</main><!-- /#main -->
			<footer class="footer" id="contact">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="title title-line title-line--footer">
								<div class=""></div>
								<h2><?php _e("SKONTAKTUJ SIĘ", "cfa-t"); ?></h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center align-items-center">
						<div class="col-11 col-md-8 col-lg-5 pb-5 pb-lg-0 footer__txt">
							<h3>
								<?php _e("Przekonani? W takim razie czekamy na waszą wiadomość!", "cfa-t"); ?>
							</h3>
							<p>
								<?php _e("Podrzućcie swój brief lub opiszcie dokładnie czego od nas oczekujecie, a na pewno stworzymy razem coś wyjątkowego!", "cfa-t"); ?>
							</p>
						</div>
						<div class="col-auto offset-lg-1 pt-5 pt-lg-0">
							<div class="footer-card">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/build/img/aharo.webp" alt="">
								<div class="footer-card__cont">
									<div class="footer-card__meta">
										<div class="footer-card__name">Kacper Czapiewski</div>
										<div class="footer-card__position">Head of Agency</div>
									</div>
									<div>
										<a class="btn btn-secondary footer-card__btn" href="mailto:kacper@cfa.gg">
											<svg id="Group_327" data-name="Group 327" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25.407" height="16.279" viewBox="0 0 25.407 16.279">
												<g id="Group_326" data-name="Group 326">
													<rect id="Rectangle_113" data-name="Rectangle 113" width="23.407" height="14.279" rx="1.547" transform="translate(1 1)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
													<path id="Path_5932" data-name="Path 5932" d="M19.761,5.537,12.7,9.906,5.65,5.537" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
													<line id="Line_10" data-name="Line 10" x1="4.2" y1="2.6" transform="translate(15.557 8.142)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
													<line id="Line_11" data-name="Line 11" x1="4.21" y2="2.6" transform="translate(5.646 8.142)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
												</g>
											</svg>
											<span>kacper@cfa.gg</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row justify-content-center">
						<div class="col-auto">
							<p class="copyright"><?php printf(esc_html__('Copyright by CFA', 'cfa-t')); ?> 2022</p>
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