<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	
		<div id="footer-container">
			<footer id="footer">
				<div class="footer-colonna">

				 	<ul>
				 		<li><a href="chi-siamo">CHI SIAMO</a></li>
				 		<li><a href="contatti">CONTATTI</a></li>
				 		<li><a href="http://www.relationalstrategiesgrandprix.com/it/newsletter" target="_blank">NEWSLETTER</a></li>

				 	</ul>
				</div>
				<div class="footer-colonna">
					<ul>
						<li><a href="#">EDIZIONE 2016</a></li>
						<li><a href="#">EDIZIONE 2015</a></li>
						<li><a href="#">EDIZIONE 2014</a></li>
					</ul>
				</div>

				<div class="footer-colonna">
					<h3>EVENTI TVN</h3>
					<img class="inverted" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo-gp.png">
					<br/><br/>
					<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/logo-bi.png">
				</div>
			</footer>
		</div>
		<div id="banda-loghi">
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
