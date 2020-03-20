<?php
/*
Template Name: Inner Page Template
*/
?>

<?php get_header(); ?>

<?php if(has_post_thumbnail()) : ?>
    <section class="inner-page-banner" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center / cover;">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h4><?php echo get_the_title(); ?></h4>	
                    <p><?php echo get_post_meta(get_the_ID(), 'inner_page_banner_description', TRUE); ?></p>			
                </div>
            </div>	
        </div>
    </section>
<?php endif; ?>

<section class="page-content">
    <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php the_content(); ?>
                        </div>
                        <!-- End of the loop. -->
                    </div>
                </div>
           <?php endwhile;
        endif; 
    ?>
</section>

<?php get_footer(); ?>