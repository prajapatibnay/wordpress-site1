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

<section class="intro-rogerio padding-tb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>岐阜駅徒歩5分圏内にNEW OPEN<span>完全予約制・完全個室のメンズエステサロン</span></p>
				<p>お客様一人ひとりに愛情を込めた<span>至福のマッサージをご提供します。</span></p>
				<p>落ち着いた完全個室のプライベート空間で<span>あなたに合ったセラピストと二人きり、</span><span>貴方だけの秘密の贅沢をご堪能ください。</span></p>
			</div>
		</div>
	</div>
</section>

<section class="homepage-blog-section padding-tb">
	<?php 
		get_template_part('InnerTemplate/blogPageTemplate');
	?>
</section>

	
<?php get_footer(); ?>
