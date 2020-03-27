<?php
/*
Template Name: Blog Page Template
*/
?>


<!-- Blog Page Code For homepage-blog-section -->
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h5 id="blog-header">本日の出勤</h5>
			<div class="border-bottom"></div>
		</div>

			<?php $args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,	
				'category_name' => 'Homepage-Blog-1',
				'order' => 'DESC',
			);

				$loop = new wp_Query($args);
				while($loop->have_posts()) : $loop->the_post(); 
			?>	
				<div class="col-md-3">
					<a href="<?php the_permalink(); ?>">
						<div class="blog-section">
							<div class="blog-section-image">
								<?php the_post_thumbnail();	?>
							</div><!--.border-radius-->	
							
							<div class="blog-section-content">
									<h4 class="text-center"><?php the_title(); ?></h4>
									<p class="text-center">
										<?php
											$content = substr(get_the_content(), 0, 20);
											echo $content;									
										?></p>
									<button type="button" class="btn btn-default">Read more</button>

				<!-- 				<p class="by-author">by <strong><?php the_author();?></strong></p> -->
				<!-- 				<p class="time-stamp"><?php echo get_the_date('M d, Y'); ?></p> -->
							</div>
							<?php /*echo do_shortcode("[ajax-loadmore-button]");*/ ?>

						</div>
					</a>
				</div>
			<?php endwhile;
				wp_reset_query(); ?>
	</div>	
</div>