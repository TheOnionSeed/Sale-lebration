<?php 
/**
 * The 404 Page for Optimizer
 *
 * Displays when a certain page is not found section and everything
 *
 * @package Optimizer
 * 
 * @since Optimizer 1.0
 */
global $optimizer;?>

<?php get_header(); ?>

<div class="fofo_wrap layer_wrapper">

    
    	<!--404 Page Title-->
            <div class="page_tt">
                <div class="center">
                    <div class="fourofour">
                        <label><a>404</a></label>
                     </div>
                        <h2 class="postitle"><?php _e('Page Not Found', 'optimizer'); ?></h2>
                    </div>
                </div> 

		<!--404 Description-->                   
            <div id="content">
                <div class="center">
                    <div class="single_wrap no_sidebar">
                        <div class="single_post">
							<div id="content_wrap" class="error_page">
                          </div>
                      </div>
                   
                
                
                        </div>
                </div>

</div><!--layer_wrapper class END-->
<?php get_footer(); ?>