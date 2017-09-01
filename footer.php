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

		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<h1>footer</h1>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>



<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
