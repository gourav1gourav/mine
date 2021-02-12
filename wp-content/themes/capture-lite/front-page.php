<?php
/**
 *
 * @package Capture Lite
 */

get_header(); 

if (!is_home() && is_front_page()) {
	$hideslide = get_theme_mod('hide_slider', '1');
	 if($hideslide == ''){   
$capture_lite_pages = array();
for($sld=7; $sld<10; $sld++) { 
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $capture_lite_pages[] = $mod;
    }	
} 
if( !empty($capture_lite_pages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $capture_lite_pages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :	
	$sld = 7;
?>
<section id="home_slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
		<?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $capture_lite_slideno[] = $i;
          $capture_lite_slidetitle[] = get_the_title();
		  $capture_lite_slidedesc[] = get_the_excerpt();
          $capture_lite_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
        $sld++;
        endwhile;
          ?>
    </div>
        <?php
        $k = 0;
        foreach( $capture_lite_slideno as $capture_lite_sln ){ ?>
    <div id="slidecaption<?php echo esc_attr( $capture_lite_sln ); ?>" class="nivo-html-caption">
      <div class="top-bar">
        <h2><a href="<?php echo esc_url($capture_lite_slidelink[$k] ); ?>"><?php echo esc_html($capture_lite_slidetitle[$k] ); ?></a></h2>
		 <p><?php echo esc_html($capture_lite_slidedesc[$k] ); ?></p>
        <div class="clear"></div>
        <a class="slide-button" href="<?php echo esc_url($capture_lite_slidelink[$k] ); ?>">
          <?php echo esc_html(get_theme_mod('slide_text',__('Read More','capture-lite')));?>
          </a>
      </div>
    </div>
 	<?php $k++;
       wp_reset_postdata();
      } ?>
<?php endif; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php } } 
?>

 <div class="main-container"> 
    	<?php $hidebox = get_theme_mod('hide_section', '1'); ?>  
             <?php if($hidebox  == '') { ?>
	  			 <div class="home-section">
            		<div class="container">
						<?php for($j = 1; $j<5; $j++) { ?>
              				<?php if(get_theme_mod('page-setting'.$j,true) != '' ) { ?>
         								<?php if(get_theme_mod('page-setting'.$j) != '') { ?>
         								<?php $page_query = new WP_Query(array('page_id' => get_theme_mod('page-setting'.$j))); ?>
         									<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
											<div class="one_fourth">
												<div class="image-box">
												<?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
													<div class="image-box-title">
														<h2><a href="<?php the_permalink(); ?>">Fashion</a></h2>
													</div><!-- image-box-title -->
												</div><!-- image-box -->
										    </div><!-- one_fourth -->		
                							<?php endwhile; ?>
          							  <?php } }} ?>
								  </div><!-- container --><div class="clear"></div>
        					 </div><!-- home-section -->
                       <?php }?>
                                     
       <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content-page', get_post_format() );
						
                    endwhile;
                    // Previous/next post navigation.
                    the_posts_pagination();
					wp_reset_postdata();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results' );
                
                endif;
                ?>
            </div>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>
<?php get_footer(); ?>