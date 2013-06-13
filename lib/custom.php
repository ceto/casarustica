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

add_filter( 'cmb_meta_boxes', 'house_metaboxes0' );
function house_metaboxes0( $meta_boxes ) {
	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox0',
		'title' => __('Általános adatok'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
            array(
				'name' => __('Frappáns alcíme'),
				'desc' => __('pl.: Felújított és kibővített eredetileg háromosztatú parasztház.'),
				'id' => $prefix . 'subtitle',
				'type' => 'textarea_small'
			),
			array(
				'name' => __('A ház leírás rövid kivonata'),
				'desc' => __('Frappáns 4-5 mondatos leírás, ez jelenik meg a kiemelt helyen'),
				'id' => $prefix . 'excerpt',
				'type' => 'wysiwyg'
			),

            array(
                    'name' => __('Készültségi szint'),
                    'id'   => $prefix . 'readiness',
                    'type' => 'radio_inline',
                    'options' => array(
						array('name' => 'Költözhető', 'value' => '1'),
						array('name' => 'Tervasztalon', 'value' => '0'),
						array('name' => 'Engedélyeztetve', 'value' => '2'),
						array('name' => 'Félkész', 'value' => '3'),
						array('name' => 'Kiszemelve', 'value' => '4'),
						
							
					)
            ),
			


			


		)	
	);

	return $meta_boxes;
}



add_filter( 'cmb_meta_boxes', 'house_metaboxes' );
function house_metaboxes( $meta_boxes ) {
	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox',
		'title' => __('Ház részletek'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			

			array(
				'name' => __('Szerkezet'),
				'desc' => __('A szerkezet leírása megjelölése'),
				'id' => $prefix . 'szerkezet',
				'type' => 'text_medium'
			),
			array(
				'name' => __('Födém'),
				'desc' => __('A födém leírása megjelölése'),
				'id' => $prefix . 'fodem',
				'type' => 'text_medium'
			),
			array(
				'name' => __('Padlóburkolat'),
				'desc' => __('A padlóburkolatleírása megjelölése'),
				'id' => $prefix . 'padloburkolat',
				'type' => 'text_medium'
			),

			
			array(
				'name' => __('Közmű'),
				'desc' => __('A közművesítés leírása'),
				'id' => $prefix . 'kozmu',
				'type' => 'text_medium'
			),
			array(
				'name' => __('Fűtés'),
				'desc' => __('A fűtés leírása'),
				'id' => $prefix . 'futes',
				'type' => 'text_medium'
			),


			array(
				'name' => __('Lakótér alapterülete'),
				'desc' => __('A ház lakóterülete számmal megadva (négyzetméter)'),
				'id' => $prefix . 'lakoter',
				'type' => 'text_small'
			),
			array(
				'name' => __('Szobák, helyiségek'),
				'desc' => __('Szobák, helyisegek száma, típusa és méretének leírása. Konyha, háló, fürdő stb ...'),
				'id' => $prefix . 'szobak',
				'type' => 'wysiwyg'
			),
			array(
				'name' => __('Egyéb információ'),
				'desc' => __('Egyéb a házhoz kapcsolódó információ'),
				'id' => $prefix . 'egyebhaz',
				'type' => 'wysiwyg'
			),

			


		)	
	);

	return $meta_boxes;
}


add_filter( 'cmb_meta_boxes', 'house_metaboxes3' );

function house_metaboxes3( $meta_boxes ) {
	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox3',
		'title' => __('Kiegészítő épületrészek'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			
			array(
				'name' => __('Terasz és tornác'),
				'desc' => __('Terasz és tornác leírása'),
				'id' => $prefix . 'terasz',
				'type' => 'wysiwyg'
			),


			array(
				'name' => __('Kiegészítő épületrészek'),
				'desc' => __('Fatároló, kerti wc, pajta stb ...'),
				'id' => $prefix . 'kiegeszito',
				'type' => 'wysiwyg'
			),
			array(
				'name' => __('Pince'),
				'desc' => __('Mekkora a pince'),
				'id' => $prefix . 'pince',
				'type' => 'text_small'
			),

			array(
				'name' => __('Emésztő'),
				'desc' => __('Emésztő leírása'),
				'id' => $prefix . 'emeszto',
				'type' => 'text_medium'
			),
			array(
				'name' => __('Egyéb információ'),
				'desc' => __('Egyéb a kiegésző épületekhez kapcsolódó információ'),
				'id' => $prefix . 'egyebkiegeszito',
				'type' => 'wysiwyg'
			),


		)
		);
	return $meta_boxes;
}


add_filter( 'cmb_meta_boxes', 'house_metaboxes2' );

function house_metaboxes2( $meta_boxes ) {
	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox2',
		'title' => __('Telek részletek'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('Helyszín'),
				'desc' => __('A helyszín, cím megjelölése'),
				'id' => $prefix . 'helyszin',
				'type' => 'text_medium'
			),

			array(
				'name' => __('Telek mérete'),
				'desc' => __('A telek métere számmal megadva (négyzetméter)'),
				'id' => $prefix . 'telekmeret',
				'type' => 'text_small'
			),
			array(
				'name' => __('Beépíthetőség'),
				'desc' => __('A beépíthetőség százalékban megadva'),
				'id' => $prefix . 'beepitesi',
				'type' => 'text_small'
			),
			array(
				'name' => __('Egyéb információ'),
				'desc' => __('Egyéb a telekhez kapcsolódó információ'),
				'id' => $prefix . 'egyebtelek',
				'type' => 'wysiwyg'
			),




		)
		);
	return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'house_metaboxes4' );

function house_metaboxes4( $meta_boxes ) {
	
	$fullg=gallery_list();
	$gallopt=array();
	$gallopt[]=array('name' => 'Nincs csatolt galéria', 'value' => 0);
	foreach ($fullg as $key => $value) {
		$gallopt[]=array('name' => $value, 'value' => $key);
	}


	$prefix = '_house_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'house_metabox4',
		'title' => __('Fotók'),
		'pages' => array('house'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Alaprajz I.',
				'desc' => 'Upload an image or enter an URL.',
				'id' => $prefix . 'alaprajz1',
				'type' => 'file',
				'save_id' => true, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'name' => 'Alaprajz II.',
				'desc' => 'Upload an image or enter an URL.',
				'id' => $prefix . 'alaprajz2',
				'type' => 'file',
				'save_id' => true, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),

			array(
                    'name' => __('Fotó/3D galéria csatolása'),
                    'id'   => $prefix . 'fotogallery',
                    'type' => 'select',
                    'options' => $gallopt,
			),

			array(
                    'name' => __('Ilyen volt galéria csatolása'),
                    'id'   => $prefix . 'fotoilyenvolt',
                    'type' => 'select',
                    'options' => $gallopt,
			),

			array(
				'name' => __('GPS kordináta Észak'),
				'id' => $prefix . 'gpsnorth',
				'type' => 'text_small'
			),
			array(
				'name' => __('GPS kordináta Dél'),
				'id' => $prefix . 'gpssouth',
				'type' => 'text_small'
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
		'supports' => array('title', 'thumbnail')
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



if ( ! function_exists( 'roots_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since Ligeti 1.0
 */
function roots_content_nav( $nav_id ) {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';

	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?> clearfix">
	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'ligeti' ) . '</span> %title' ); ?>
		<?php next_post_link( '<div class="next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'ligeti' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'ligeti' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'ligeti' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // roots_content_nav

function gallery_list () {
	global $nggdb;
	$galleries = $nggdb->find_all_galleries('gid', 'DESC');
	//print_r($galleries);
	$lista=array();
	foreach ($galleries as $key => $value) {
		$lista[$value->gid]=$value->title;
	}
	return $lista;
}


function readiness($value) {
	switch ($value) {
		case '0':
			return 'Tervasztalon';
			break;
		case '1':
			return 'Költözhető';
			break;
		case '2':
			return 'Engedélyeztetve';
			break;
		case '3':
			return 'Félkész';
			break;
		case '4':
			return 'Kiszemelve';
			break;
		case '5':
			return 'Eladó';
			break;
		
		default:
			return 'Gazdáját várja';
			break;
	}
}


function current_type_nav_class($css_class, $item) {
  $post_type = get_query_var('post_type');
  if ($post_type=='house') {
      $current_value = "active"; 
      $css_class = array_filter($css_class, function ($element) use ($current_value) { return ($element != $current_value); } );
      if ($item->ID==27) {       
       array_push($css_class, 'active');
  	 }
  }

  return $css_class;
}
add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
