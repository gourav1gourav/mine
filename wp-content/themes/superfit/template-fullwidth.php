<?php
/**
 * Template Name: Full-width
 *
 *
 * @package superfit
 */


get_header(); ?>

<div class="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </div>
            <?php if(function_exists('bcn_display')){ ?>
                <div class="col-sm-6 breadcrumbs">
                    <?php bcn_display(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container post-full">
    <div class="row">
        <div class="col-md-12">
            <?php
            while ( have_posts() ) : the_post();

            get_template_part( 'contents/content', 'page' );

            endwhile; // End of the loop.
            ?> 
            <span class="clearfix"></span> 
        </div>
    </div>
</div>

<?php get_footer(); ?>