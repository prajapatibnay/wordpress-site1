<?php get_header(); ?>

<div class="single-blog-section">
	<div class="container lg">
		<div class="row">
			<div class="col-lg-4 col-md-5 col-sm-12 push-lg-8 push-md-7">
				<div class="blog-sidebar-section">
					<?php get_sidebar('blog-sidebar'); ?>
				</div>
			</div>
			<div class="col-lg-8 col-md-7 col-sm-12 pull-lg-4 pull-md-5">
				<div class="main-blog-content">
					<h4><?php the_title();?></h4>
					<?php the_post_thumbnail(); ?>
					<div class="below-mblog">
						<ul>
							<li class="uppercase-text"><span class="btime"><?php echo get_the_date('d M Y'); ?></span></li>
						</ul>
					</div><!--below-mblog-->
					<div class="blog-wrapper-section">
						<?php
							while ( have_posts() ) : the_post();
								the_content();
							endwhile; // End of the loop.
						?>
					</div>
				</div><!--main-blog-content-->
			</div>
			
		</div>
	</div>
</div>


<?php
get_footer();
