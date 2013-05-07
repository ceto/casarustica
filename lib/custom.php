<?php
/**
 * Custom functions
 */



add_action( 'init', 'create_slide_type' );

function create_slide_type() {
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slider' ),
				'singular_name' => __( 'slide' ),
				'add_new_item'  => __( 'Add New Slide' ),
				'edit_item'		=> __( 'Edit Slide' ),
				'all_items'		=> __( 'All Slides' ) 
				
			),
		'public' => true,
		'has_archive' => false,
		'exclude_from_search' => true,
		'rewrite' => array('slug' => 'slides'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);
}

add_filter( 'cmb_meta_boxes', 'slide_metaboxes' );
function slide_metaboxes( $meta_boxes ) {
	$prefix = '_slide_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'slide_metabox',
		'title' => __('Slide details'),
		'pages' => array('slide'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			
			array(
				'name' => __('Button text'),
				'desc' => __('Text of the button'),
				'id' => $prefix . 'btext',
				'type' => 'text_medium'
			),

			array(
				'name' => __('Url'),
				'desc' => __('Click url'),
				'id' => $prefix . 'url',
				'type' => 'text_medium'
			),
		)	
	);

	return $meta_boxes;
}


add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'cmb/init.php';

}