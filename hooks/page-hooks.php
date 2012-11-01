<?php
/**
 * FIXME: Post Hooks
 *
 * FIXME: Displays Drag and Drop Elements
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

/** 
 * Checks for all elements added in the page section order drag and drop.
 * Calls do_action for each active elements.
**/ 
function cyberchimps_page_section_order_action() {
	global $post;
	
	// Checking for password protection.
	if( ! post_password_required() ) {
		$page_section_order = get_post_meta($post->ID, 'cyberchimps_page_section_order' , true);
		
		// set page default if nothing is selected
		$page_section_order = ( $page_section_order == '' ) ? array( 'page_section' ) : $page_section_order;
		$slider_size = get_post_meta( $post->ID, 'cyberchimps_slider_size', true );
		if ( is_array($page_section_order) ) {
			foreach ( $page_section_order as $func) {
			
				// checks if slider is selected at half size, if it is it removes it so we can display it above page content
				$func = ( $func == 'page_slider' && $slider_size == 'half' ) ? '' : $func;
				do_action($func);
			}
		}
	}
	else {
		// Get the form to submit password
		echo get_the_password_form();
	}	
}
add_action('cyberchimps_page_content', 'cyberchimps_page_section_order_action');

function cyberchimps_page(){ ?>
<div id="container" <?php cyberchimps_filter_container_class(); ?>>
	
	<?php do_action( 'cyberchimps_before_content_container'); ?>
	
	<div id="content" <?php cyberchimps_filter_content_class(); ?>>
		
		<?php do_action( 'cyberchimps_before_content'); ?>
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>

		<?php endwhile; // end of the loop. ?>
	
		<?php do_action( 'cyberchimps_after_content'); ?>
		
	</div><!-- #content -->
	
	<?php do_action( 'cyberchimps_after_content_container'); ?>
		
</div><!-- #container .row-fluid-->
<?php }
add_action( 'page_section', 'cyberchimps_page' );