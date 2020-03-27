<?php get_header(); ?>

<div class="single-blog-section padding-tb">
	<div class="container">
		<div class="row">
				<div class="col-md-6">
					<div class="single-page-image">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>

				<div class="col-md-6">
					<div class="page-content">
						<div class="single-page-contents">
							<h4><?php the_title();?></h4>
						</div>

						<div class="blog-wrapper-section">
							<?php
								while ( have_posts() ) : the_post();
									the_content();
								endwhile; // End of the loop.
							?>
						</div>
					</div>
					<!-- <div class="below-mblog">
						<ul>
							<li class="uppercase-text"><span class="btime"><?php echo get_the_date('d M Y'); ?></span></li>
						</ul>
					</div>below-mblog -->
				</div>
			</div>	
		</div>
	</div>
</div>


<?php
get_footer();
