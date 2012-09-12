<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
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

function cyberchimps_add_core_headings( $headings_list ) {
	
	$headings_list = array();
	
	$headings_list[] = array(
		'id' => 'cyberchimps_welcome_heading',
		'title' => __('Welcome', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_design_heading',
		'title' => __('Design', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_header_heading',
		'title' => __('Header', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_blog_heading',
		'title' => __('Blog', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_templates_heading',
		'title' => __('Templates', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_footer_heading',
		'title' => __('Footer', 'cyberchimps'),
	);
	
	$headings_list[] = array(
		'id' => 'cyberchimps_import_export_heading',
		'title' => __('Import/Export', 'cyberchimps'),
	);
	
	return $headings_list;
}
add_filter('cyberchimps_heading_list', 'cyberchimps_add_core_headings');

/**************************************************************************************/	
/*************************** SUBSECTIONS **********************************************/
/**************************************************************************************/
function cyberchimps_add_core_sections( $sections_list ) {
	
	$sections_list = array();
	
/*************************** WELCOME **************************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_welcome_section',
		'label' => apply_filters( 'cyberchimps_welcome_heading', 'CyberChimps.com' ),
		'heading' => 'cyberchimps_welcome_heading'
	);
	
/**************************** DESIGN **************************************************/
	
	$sections_list[] = array(
		'id' => 'cyberchimps_custom_layout_section',
		'label' => __('Layout Options', 'cyberchimps'),
		'heading' => 'cyberchimps_design_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_custom_background_section',
		'label' => __('Background Options', 'cyberchimps'),
		'heading' => 'cyberchimps_design_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_custom_colors_section',
		'label' => __('Custom Colors', 'cyberchimps'),
		'heading' => 'cyberchimps_design_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_typography_section',
		'label' => __('Typography', 'cyberchimps'),
		'heading' => 'cyberchimps_design_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_custom_css_section',
		'label' => __('Custom CSS', 'cyberchimps'),
		'heading' => 'cyberchimps_design_heading'
	);
	
/**************************** HEADER **************************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_header_drag_drop_section',
		'label' => __('Header Drag/Drop', 'cyberchimps'),
		'heading' => 'cyberchimps_header_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_header_options_section',
		'label' => __('Header Options', 'cyberchimps'),
		'heading' => 'cyberchimps_header_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_header_social_section',
		'label' => __('Social', 'cyberchimps'),
		'heading' => 'cyberchimps_header_heading'
	);
	
/***************************** BLOG **************************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_blog_drag_and_drop_section',
		'label' => __('Drag & Drop', 'cyberchimps'),
		'heading' => 'cyberchimps_blog_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_blog_options_section',
		'label' => __('Blog Options', 'cyberchimps'),
		'heading' => 'cyberchimps_blog_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_blog_slider_section',
		'label' => __('Blog Slider', 'cyberchimps'),
		'heading' => 'cyberchimps_blog_heading'
	);
	
/*************************** TEMPLATE ************************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_single_post_section',
		'label' => __('Single Post', 'cyberchimps'),
		'heading' => 'cyberchimps_templates_heading'
	);
		
	$sections_list[] = array(
		'id' => 'cyberchimps_archive_section',
		'label' => __('Archive', 'cyberchimps'),
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_search_section',
		'label' => __('Search', 'cyberchimps'),
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$sections_list[] = array(
		'id' => 'cyberchimps_error_section',
		'label' => __('404', 'cyberchimps'),
		'heading' => 'cyberchimps_templates_heading'
	);
	
/**************************** FOOTER **************************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_footer_section',
		'label' => __('Footer Options', 'cyberchimps'),
		'heading' => 'cyberchimps_footer_heading'
	);
	
/*************************** IMPORT/EXPORT ********************************************/

	$sections_list[] = array(
		'id' => 'cyberchimps_import_export_section',
		'label' => __('Import / Export', 'cyberchimps'),
		'heading' => 'cyberchimps_import_export_heading'
	);

	return $sections_list;
}
add_filter('cyberchimps_section_list', 'cyberchimps_add_core_sections');

/**************************************************************************************/	
/**************************** FIELDS **************************************************/
/**************************************************************************************/

function cyberchimps_add_core_fields( $fields_list ) {
	
/*************************** LISTS AND DEFAULTS *********************************************/
	
	// post byline 
	$pbe_defaults = array(
		'author' => 1,
		'categories' => 1,
		'date' => 1,
		'comments' => 1,
		'share' => 1,
		'tags' => 1
	);
	$pbe_array = array (
		'author' => __('Author', 'cyberchimps'),
		'categories' => __('Categories', 'cyberchimps'),
		'date' => __('Date', 'cyberchimps'),
		'comments' => __('Comments', 'cyberchimps'),
		'share' => __('Share', 'cyberchimps'),
		'tags' => __('Tags', 'cyberchimps')
	);
	
	
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories['cyberchimps_all'] = 'All';
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}
	
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/core/lib/images/';
	
	$fields_list = array();
	
	// Typography Defaults
	$typography_defaults = array(
		'size' => '14px',
		'face' => 'arial',
		'style' => 'normal',
		'color' => '#333333' );
		
/*************************** WELCOME **************************************************/
	
	$fields_list[] = array(
		'name' => apply_filters( 'cyberchimps_welcome_sub_heading', __('Welcome Info', 'cyberchimps') ),
		'id' => 'welcome_info_display',
		'type' => 'welcome',
		'desc' => 'Description',
		'section' => 'cyberchimps_welcome_section',
		'heading' => 'cyberchimps_welcome_heading');
		
/*************************** DESIGN ***************************************************/
	
/* LAYOUT OPTIONS */
	$fields_list[] = array(
		'name' => __('Responsive Design', 'cyberchimps'),
		'id' => 'responsive_design',
		'type' => 'toggle',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);
		
	$fields_list[] = array(
		'name' => __('Responsive Videos', 'cyberchimps'),
		'id' => 'responsive_videos',
		'type' => 'toggle',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);
		
	$fields_list[] = array(
		'name' => __('Max Width', 'cyberchimps'),
		'id' => 'max_width',
		'std' => 1020,
		'desc' => __('enter the width of your site in pixels', 'cyberchimps'),
		'type' => 'text',
		'section' => 'cyberchimps_custom_layout_section',
		'heading' => 'cyberchimps_design_heading'
	);
		
/* BACKGROUND */

	$fields_list[] = array(
		'name' => __('Select a background', 'cyberchimps'),
		'id' => 'select_background',
		'std' => 'noise',
		'type' => 'images',
		'options' => array(
			'noise' => $imagepath . 'backgrounds/thumbs/noise.png',
			'blue' => $imagepath . 'backgrounds/thumbs/blue.png',
			'dark' => $imagepath . 'backgrounds/thumbs/dark.png',
			'metal' => $imagepath . 'backgrounds/thumbs/metal.png',
			'space' => $imagepath . 'backgrounds/thumbs/space.png',
			'wood' => $imagepath . 'backgrounds/thumbs/wood.png'
		),
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);

	$fields_list[] = array(
		'name' => __('Use a custom background', 'cyberchimps'),
		'id' => 'custom_background',
		'type' => 'toggle',
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Background Image', 'cyberchimps'),
		'desc' => __('Enter URL or upload file', 'cyberchimps'),
		'id' => 'custom_background_image',
		'type' => 'upload',
		'std' => '',
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Image position', 'cyberchimps'),
		'id' => 'background_image_position',
		'type' => 'radio',
		'options' => array(
			'Left' => 'top left',
			'Center' => 'top center',
			'Right' => 'top right'
		),
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Image repeat', 'cyberchimps'),
		'id' => 'background_image_repeat',
		'type' => 'radio',
		'options' => array(
			'Tile' => 'repeat',
			'Tile horizontally' => 'repeat-x',
			'Tile vertically' => 'repeat-y',
			'No tile' => 'no-repeat'
		),
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Image attachment', 'cyberchimps'),
		'id' => 'background_image_attachment',
		'type' => 'radio',
		'options' => array(
			'Scroll' => 'scroll',
			'Fixed' => 'fixed'
		),
		'section' => 'cyberchimps_custom_background_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
/* CUSTOM COLORS */
	$fields_list[] = array(
		'id' => 'skin_color',
		'name' => __('Select a Skin Color', 'cyberchimps'),
		'type' => 'select',
		'std' => 'blue',
		'options' => array(
			'default' => __('Default', 'cyberchimps'),
			'blue' => __('Blue', 'cyberchimps'),
			'green' => __('Green', 'cyberchimps'),
		),
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading',
	);
	
	$fields_list[] = array(
		'name' => __('Background Color', 'cyberchimps'),
		'desc' => __('Select background color', 'cyberchimps'),
		'id' => 'background_colorpicker',
		'std' => '',
		'type' => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading' );
	
	$fields_list[] = array(
		'name' => __('Text Color', 'cyberchimps'),
		'desc' => __('Select text color', 'cyberchimps'),
		'id' => 'text_colorpicker',
		'std' => '',
		'type' => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading' );
		
	$fields_list[] = array(
		'name' => __('Link Color', 'cyberchimps'),
		'desc' => __('Select link color', 'cyberchimps'),
		'id' => 'link_colorpicker',
		'std' => '',
		'type' => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading' );
		
	$fields_list[] = array(
		'name' => __('Link Hover Color', 'cyberchimps'),
		'desc' => __('Select link hover color', 'cyberchimps'),
		'id' => 'link_hover_colorpicker',
		'std' => '',
		'type' => 'color',
		'section' => 'cyberchimps_custom_colors_section',
		'heading' => 'cyberchimps_design_heading' );
		
/* Typography Options */
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);
	
/* Typography Section */
	$fields_list[] = array(
		'id' => 'typography_options',
		'name' => __('Typography Options', 'cyberchimps'),
		'type' => 'typography',
		'std' => $typography_defaults,
		'options' => $typography_options,
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
	/* FIXME: We are dropping typekit support?
	$fields_list[] = array(
		'id' => 'typekit_code',
		'name' => __('Typkit Code', 'cyberchimps'),
		'type' => 'textarea',
		'std' => '',
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);*/
	
	$fields_list[] = array(
		'name' => __('Demo Text', 'cyberchimps'),
		'id' => 'font_demo_text',
		'type' => 'info',
		'desc' => 'The quick CyberChimp jumps over the lazy dog',
		'section' => 'cyberchimps_typography_section',
		'heading' => 'cyberchimps_design_heading'
	);	
	
/* CUSTOM CSS */
		$fields_list[] = array(
		'name' => __('Custom CSS', 'cyberchimps'),
		'id' => 'custom_css',
		'std' => '',
		'type' => 'textarea',
		'section' => 'cyberchimps_custom_css_section',
		'heading' => 'cyberchimps_design_heading'
	);
	
/*************************** HEADER ***************************************************/
	
	$fields_list[] = array(
		'id' => 'header_section_order',
		'name' => __('Header Drag/Drop', 'cyberchimps'),
		'callback' => 'cyberchimps_drag_drop_field',
		'std' => array(
			'cyberchimps_header_content' => 'Logo + Icons',
		),
		'type' => 'section_order',
		'options' => array(
			'cyberchimps_header_content' => 'Logo + Icons',
			'cyberchimps_sitename_contact' => 'Logo + Contact',
			'cyberchimps_sitename_register' => 'Logo + Login',
			'cyberchimps_logo_Description' => 'Logo + Description',
			'cyberchimps_description_icons' => 'Description + Icons',
			'cyberchimps_banner' => 'Banner',
			
		),
		'section' => 'cyberchimps_header_drag_drop_section',
		'heading' => 'cyberchimps_header_heading'
	);

/* HEADER OPTIONS */

	$fields_list[] = array(
		'name' => __('Custom Logo', 'cyberchimps'),
		'id' => 'custom_logo_display',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Logo Image', 'cyberchimps'),
		'desc' => __('Enter URL or upload file', 'cyberchimps'),
		'id' => 'custom_logo custom_logo_display_toggle',
		'type' => 'upload',
		'std' => get_template_directory_uri() . '/core/lib/images/cyberchimpslogo.png',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Custom Favicon', 'cyberchimps'),
		'id' => 'custom_favicon_display',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);
		
	$fields_list[] = array(
		'name' => __('Favicon URL', 'cyberchimps'),
		'desc' => __('Enter URL or upload file', 'cyberchimps'),
		'id' => 'favicon_uploader custom_favicon_display_toggle',
		'type' => 'upload',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Custom Apple touch icon', 'cyberchimps'),
		'id' => 'custom_apple_display',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading'
	);
		
	$fields_list[] = array(
		'name' => __('Apple Touch URL', 'cyberchimps'),
		'desc' => __('Enter URL or upload file', 'cyberchimps'),
		'id' => 'apple_touch_uploader custom_apple_display_toggle',
		'type' => 'upload',
		'section' => 'cyberchimps_header_options_section',
		'heading' => 'cyberchimps_header_heading');
		
/* SOCIAL */

	$fields_list[] = array(
		'name' => __('Choose your icon style', 'cyberchimps'),
		'id' => 'theme_backgrounds',
		'std' => 'default',
		'type' => 'images',
		'options' => array(
			'default' => $imagepath . 'social/thumbs/icons-default.png',
			'classic' => $imagepath . 'social/thumbs/icons-classic.png',
			'round' => $imagepath . 'social/thumbs/icons-round.png'),
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Twitter', 'cyberchimps'),
		'id' => 'social_twitter',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('Twitter URL', 'cyberchimps'),
		'id' => 'twitter_url social_twitter_toggle',
		'std' => 'http://www.twitter.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Facebook', 'cyberchimps'),
		'id' => 'social_facebook',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('Facebook URL', 'cyberchimps'),
		'id' => 'facebook_url social_facebook_toggle',
		'std' => 'http://www.facebook.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Google+', 'cyberchimps'),
		'id' => 'social_google',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('Google+ URL', 'cyberchimps'),
		'id' => 'google_url social_google_toggle',
		'std' => 'http://www.google.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Flickr', 'cyberchimps'),
		'id' => 'social_flickr',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('Flickr URL', 'cyberchimps'),
		'id' => 'flickr_url social_flickr_toggle',
		'std' => 'http://www.flickr.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Pinterest', 'cyberchimps'),
		'id' => 'social_pinterest',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('Pinterest URL', 'cyberchimps'),
		'id' => 'pinterest_url social_pinterest_toggle',
		'std' => 'http://www.pinterest.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('LinkedIn', 'cyberchimps'),
		'id' => 'social_linkedin',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('LinkedIn URL', 'cyberchimps'),
		'id' => 'linkedin_url social_linkedin_toggle',
		'std' => 'http://www.linkedin.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('YouTube', 'cyberchimps'),
		'id' => 'social_youtube',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('YouTube URL', 'cyberchimps'),
		'id' => 'youtube_url social_youtube_toggle',
		'std' => 'http://www.youtube.com/',
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
	
	$fields_list[] = array(
		'name' => __('RSS', 'cyberchimps'),
		'id' => 'social_rss',
		'type' => 'toggle',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading');
		
	$fields_list[] = array(
		'name' => __('RSS URL', 'cyberchimps'),
		'id' => 'rss_url social_rss_toggle',
		'std' => get_bloginfo_rss( 'rss_url' ),
		'type' => 'text',
		'section' => 'cyberchimps_header_social_section',
		'heading' => 'cyberchimps_header_heading'
	);
		
/*************************** BLOG ***************************************************/
	
	$fields_list[] = array(
		'id' => 'blog_section_order',
		'name' => __('Drag & Drop Blog Elements', 'cyberchimps'),
		'callback' => 'cyberchimps_drag_drop_field',
		'std' => array(
			"blog_post_page" => "Post Page",
		),
		'type' => 'section_order',
		'options' => array(
			"blog_post_page" => "Post Page",
			"cyberchimps_slider" => "Slider",
			"callout_section" => "Callout Section",
			"twitter_bar" => "Twitter Bar",
			"carousel" => "Carousel",
			"portfolio" => "Portfolio",
			"product" => "Product",
			"boxes" => "Boxes"
		),
		'section' => 'cyberchimps_blog_drag_and_drop_section',
		'heading' => 'cyberchimps_blog_heading'
	);
	
/* BLOG OPTIONS */
	
	$fields_list[] = array(
		'name' => __('Sidebar Options', 'cyberchimps'),
		'id' => 'sidebar_images',
		'std' => 'right_sidebar',
		'type' => 'images',
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png',
		),
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Formats Icons', 'cyberchimps'),
		'id' => 'post_format_icons',
		'type' => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading');
	
	$fields_list[] = array(
		'name' => __('Post Excerpts', 'cyberchimps'),
		'id' => 'post_excerpts',
		'type' => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading');
		
	$fields_list[] = array(
		'name' => __('Featured Images', 'cyberchimps'),
		'id' => 'post_featured_images',
		'type' => 'toggle',
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading');
	
	$fields_list[] = array(
		'name' => __('Post Byline Elements', 'cyberchimps'),
		'id' => 'post_byline_elements',
		'std' => $pbe_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $pbe_array,
		'section' => 'cyberchimps_blog_options_section',
		'heading' => 'cyberchimps_blog_heading');
		
/* BLOG SLIDER */
	
	$fields_list[] = array(
		'name' => __('Slider Size', 'cyberchimps'),
		'id' => 'blog_slider_size',
		'type' => 'select',
		'std' => 'full',
		'options' => array(
			'full' => __('Full', 'cyberchimps'),
			'half' => __('Half', 'cyberchimps'),
		),
		'section' => 'cyberchimps_blog_slider_section',
		'heading' => 'cyberchimps_blog_heading',
	);
	
	$fields_list[] = array(
		'name' => __('Slider Type', 'cyberchimps'),
		'id' => 'blog_slider_type',
		'type' => 'select',
		'std' => 'posts',
		'options' => array(
			'posts' => __('Posts', 'cyberchimps'),
			'custom' => __('Custom', 'cyberchimps'),
		),
		'section' => 'cyberchimps_blog_slider_section',
		'heading' => 'cyberchimps_blog_heading',
	);
	
	$fields_list[] = array(
		'name' => __('Post Categories', 'cyberchimps'),
		'id' => 'blog_slider_post_cats',
		'type' => 'select',
		'std' => 'cyberchimps_all',
		'options' => $options_categories,
		'section' => 'cyberchimps_blog_slider_section',
		'heading' => 'cyberchimps_blog_heading',
	);
	
	$fields_list[] = array(
		'name' => __('Number of Featured Blog Posts', 'cyberchimps'),
		'id' => 'blog_no_featured_posts',
		'std' => '',
		'type' => 'text',
		'section' => 'cyberchimps_blog_slider_section',
		'heading' => 'cyberchimps_blog_heading',
	);
	
/*************************** TEMPLATES ***************************************************/
	
/* SINGLE POSTS */
	$fields_list[] = array(
		'name' => __('Sidebar Options', 'cyberchimps'),
		'desc' => __('Images for layout.', 'cyberchimps'),
		'id' => 'single_post_sidebar_options',
		'std' => 'right_sidebar',
		'type' => 'images',
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png',
		),
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Breadcrumbs', 'cyberchimps'),
		'id' => 'single_post_breadcrumbs',
		'type' => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Featured Images', 'cyberchimps'),
		'id' => 'single_post_featured_images',
		'type' => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Format Icons', 'cyberchimps'),
		'id' => 'single_post_format_icons',
		'type' => 'toggle',
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Byline Elements', 'cyberchimps'),
		'id' => 'single_post_byline_elements',
		'std' => $pbe_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $pbe_array,
		'section' => 'cyberchimps_single_post_section',
		'heading' => 'cyberchimps_templates_heading'
		);

/* ARCHIVE */
	$fields_list[] = array(
		'name' => __('Sidebar Options', 'cyberchimps'),
		'desc' => __('Images for layout.', 'cyberchimps'),
		'id' => 'archive_sidebar_options',
		'std' => 'right_sidebar',
		'type' => 'images',
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png',
		),
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Breadcrumbs', 'cyberchimps'),
		'id' => 'archive_breadcrumbs',
		'type' => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Featured Images', 'cyberchimps'),
		'id' => 'archive_featured_images',
		'type' => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Format Icons', 'cyberchimps'),
		'id' => 'archive_format_icons',
		'type' => 'toggle',
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Byline Elements', 'cyberchimps'),
		'id' => 'archive_post_byline_elements',
		'std' => $pbe_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $pbe_array,
		'section' => 'cyberchimps_archive_section',
		'heading' => 'cyberchimps_templates_heading'
		);
	
/* SEARCH */
	$fields_list[] = array(
		'name' => __('Sidebar Options', 'cyberchimps'),
		'desc' => __('Images for layout.', 'cyberchimps'),
		'id' => 'search_sidebar_options',
		'std' => 'right_sidebar',
		'type' => 'images',
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png',
		),
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Post Excerpts', 'cyberchimps'),
		'id' => 'search_post_excerpts',
		'type' => 'toggle',
		'section' => 'cyberchimps_search_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
/* 404 */
	$fields_list[] = array(
		'name' => __('Sidebar Options', 'cyberchimps'),
		'desc' => __('Images for layout.', 'cyberchimps'),
		'id' => 'error_sidebar_options',
		'std' => 'full_width',
		'type' => 'images',
		'options' => array(
			'full_width' => $imagepath . '1col.png',
			'right_sidebar' => $imagepath . '2cr.png',
			'left_sidebar' => $imagepath . '2cl.png',
		),
		'section' => 'cyberchimps_error_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Custom 404 Content', 'cyberchimps'),
		'id' => 'error_custom_content',
		'std' => '',
		'type' => 'textarea',
		'section' => 'cyberchimps_error_section',
		'heading' => 'cyberchimps_templates_heading'
	);
	
/*************************** FOOTER ***************************************************/
	
	$fields_list[] = array(
		'name' => __('Show Footer Section', 'cyberchimps'),
		'id' => 'footer_show_toggle',
		'std' => 1,
		'type' => 'toggle',
		'section' => 'cyberchimps_footer_section',
		'heading' => 'cyberchimps_footer_heading'
	);
	
	$fields_list[] = array(
		'id' => 'footer_copyright_text',
		'name' => __('Footer Copyright Text', 'cyberchimps'),
		'std' => '&copy; ' . get_bloginfo('name'),
		'type' => 'text',
		'section' => 'cyberchimps_footer_section',
		'heading' => 'cyberchimps_footer_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Cyberchimps Link', 'cyberchimps'),
		'id' => 'footer_cyberchimps_link',
		'std' => 1,
		'type' => 'toggle',
		'section' => 'cyberchimps_footer_section',
		'heading' => 'cyberchimps_footer_heading'
	);
	
/*************************** IMPORT/EXPORT ***********************************************/
	
	$fields_list[] = array(
		'name' => __('Export Settings', 'cyberchimps'),
		'id' => 'export_textarea',
		'std' => '',
		'type' => 'textarea',
		'section' => 'cyberchimps_import_export_section',
		'heading' => 'cyberchimps_import_export_heading'
	);
	
	$fields_list[] = array(
		'name' => __('Import Settings', 'cyberchimps'),
		'id' => 'import_textarea',
		'std' => '',
		'type' => 'textarea',
		'section' => 'cyberchimps_import_export_section',
		'heading' => 'cyberchimps_import_export_heading'
	);
	
	return $fields_list;
}
add_filter('cyberchimps_field_list', 'cyberchimps_add_core_fields');