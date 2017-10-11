<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 $LANG = qtranxf_getLanguage();

?>


		<div id="footer-container">
			<footer id="footer">

				<div class="footer-colonna">
					<div class="footer-menu  float-center">
						<h3>TVN MEDIA GROUP</h3>
					 	<ul>
					 		<li>
								<a href="chi-siamo">
								<?php if ($LANG == 'en') {
									echo "ABOUT US";
								} else { echo "CHI SIAMO"; } ?>
								</a>
							</li>
							<li>
								<a href="contatti">
								<?php if ($LANG == 'en') {
									echo "CONTACTS";
								} else { echo "CONTATTI"; } ?>
								</a>
							</li>

					 		<!--li><a href="http://www.relationalstrategiesgrandprix.com/it/newsletter" target="_blank">NEWSLETTER</a></li-->

					 	</ul>
					</div>
				</div>

				<div class="footer-colonna">
					<div class="footer-menu  float-center">
						<h3>
              <?php if ($LANG == 'en') {
								echo "ARCHIVE";
							} else { echo "ARCHIVIO"; } ?>
            </h3>
						<ul>
							<li><a target="_blank" href="http://www.relationalstrategiesgrandprix.com/archivio/category/edizione-2016/">WINNERS 2016</a></li>
							<li><a target="_blank" href="http://www.relationalstrategiesgrandprix.com/archivio/category/edizione-2015/">WINNERS 2015</a></li>
							<li><a target="_blank" href="http://www.relationalstrategiesgrandprix.com/archivio/category/edizione-2014/">WINNERS 2014</a></li>
						</ul>
					</div>
				</div>

				<div class="footer-colonna">
					<div class="footer-menu float-center">
						<h3>
							<?php if ($LANG == 'en') {
								echo "OTHER TVN EVENTS";
							} else { echo "ALTRI EVENTI TVN"; } ?>
						</h3>
						<a href="http://www.grandprixadvertisingstrategies.com/" target="_blank">
							<img class="inverted" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo-gp.png" />
						</a>
						&#160;&#160;&#160;
						<a href="http://www.brandidentitygrandprix.com/it/" target="_blank">
							<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo-bi.png" />
						</a>
					</div>
				</div>

			</footer>
		</div>
		<div id="banda-loghi-tvn">
			<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/banda-loghi.png">
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
