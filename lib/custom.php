<?php
/**
 * Custom functions
 */

/************** HOUSES *************/
add_action( 'init', 'create_house_type' );
function create_house_type() {
	register_post_type( 'house',
		array(
			'labels' => array(
				'name' => __( 'Houses' ),
				'singular_name' => __( 'house' ),
				'add_new_item'  => __( 'Add New House' ),
				'edit_item'		=> __( 'Edit House' ),
				'all_items'		=> __( 'All Houses' ) 
				
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'houses'),
		'supports' => array('title', 'editor', 'thumbnail')
		)
	);
}

add_filter( 'cmb_meta_boxes', 'house_metaboxes' );
function house_metaboxes( $meta_boxes ) {
	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox',
		'title' => __('House details'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
                    'name' => __('Status'),
                    'id'   => $prefix . 'status',
                    'type' => 'radio_inline',
                    'options' => array(
						array('name' => 'Free', 'value' => '1'),
						array('name' => 'Sold', 'value' => '0'),
						array('name' => 'Reserved', 'value' => '2')
					)
            ),
            array(
                    'name' => __('Készültségi szint'),
                    'id'   => $prefix . 'readiness',
                    'type' => 'radio_inline',
                    'options' => array(
						array('name' => 'Kulcsrakész', 'value' => '1'),
						array('name' => 'Tervasztalon', 'value' => '0'),
						array('name' => 'Engedélyeztetve', 'value' => '2'),
						array('name' => 'Félkész', 'value' => '3'),
						array('name' => 'Kiszemelve', 'value' => '4'),
						
							
					)
            ),
			
			array(
				'name' => __('Telek mérete'),
				'desc' => __('A telek métere számmal megadva (négyzetméter)'),
				'id' => $prefix . 'telekmeret',
				'type' => 'text_small'
			),

			array(
				'name' => __('Ház alapterülete'),
				'desc' => __('A ház alapterülete számmal megadva (négyzetméter)'),
				'id' => $prefix . 'alapterulet',
				'type' => 'text_small'
			),
			array(
				'name' => __('Extrák'),
				'desc' => __('A ház specialitása'),
				'id' => $prefix . 'extra',
				'type' => 'wysiwyg'
			),
		)	
	);

	return $meta_boxes;
}

/************** SLIDER *************/

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