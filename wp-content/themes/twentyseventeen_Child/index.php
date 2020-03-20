<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="homepage-banner">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="visual-area">
					<?php wptutsplus_home_page_banner(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="homepage-blog-section">
	<?php 
		get_template_part('InnerTemplate/blogPageTemplate');
	?>
</section>

	
<?php get_footer(); ?>
