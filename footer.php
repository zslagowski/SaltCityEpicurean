<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GEMM_Framework
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-7 sce-footer-left text-center">
						<?php dynamic_sidebar( 'left_footer_sidebar' ); ?>
					</div>
					<div class="col-md-5 sce-footer-right">
						<?php dynamic_sidebar( 'right_footer_sidebar' ); ?>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
