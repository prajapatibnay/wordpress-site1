<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer>
	<section class="first-footer-contents padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ( is_active_sidebar( 'first-footer-widget-area'  )){
						dynamic_sidebar( 'first-footer-widget-area' );
					} ?>
				</div>
			</div>
		</div>
	</section>

	<section class="second-footer-contents padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ( is_active_sidebar( 'second-footer-widget-area'  )){
						dynamic_sidebar( 'second-footer-widget-area' );
					} ?>
				</div>
			</div>
		</div>
	</section>

	<section class="third-footer-contents padding-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ( is_active_sidebar( 'third-footer-widget-area'  )){
						dynamic_sidebar( 'third-footer-widget-area' );
					} ?>
				</div>
			</div>
		</div>
	</section>
	
	<section class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>&copy; <?php the_date('Y') ?> Men's Esthetic ROGERIO</p>
				</div>
			</div>
		</div>
	</section>
</footer>

<?php wp_footer(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
