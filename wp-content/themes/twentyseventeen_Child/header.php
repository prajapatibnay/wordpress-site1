<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		
	<title>Rogerio<?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>
	
<body>
	<section class="header-luxliss">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="header-logo">
						<!-- <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/luxliss-logo.png"></a> -->
						<?php
						 if ( function_exists( 'the_custom_logo' ) ) { ?>
								<a href="/"></a><?php the_custom_logo(); ?></a>
								
								<?php }
						?>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="header-contact">
						<a href="tel:080-9607-1151"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/header_tel.png"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="main-menu-bar">
		<div class="container-fluid">
			<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?> 
		</div>
	</section>