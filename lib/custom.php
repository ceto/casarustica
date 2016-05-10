<?php
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS',true);
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
		'rewrite' => array('slug' => 'paraszthazak'),
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
						array('name' => 'Tervasztalon', 'value' => '0'),
						array('name' => 'Költözhető', 'value' => '1'),
						array('name' => 'Engedélyeztetve', 'value' => '2'),
						array('name' => 'Félkész', 'value' => '3'),
						array('name' => 'Rreferencia ház', 'value' => '4'),
						array('name' => 'Eladó', 'value' => '5'),
						array('name' => 'Gazdáját várja', 'value' => '6'),

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
				'name' => __('Fotógaléria'),
				'desc' => __('Elsősorba WP galéria szúrható be.'),
				'id' => $prefix . 'gallery',
				'type' => 'wysiwyg'
			),
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

		<?php previous_post_link( '<div class="previous">%link</div>', '<i class="icon-double-angle-left"></i> '._x( '', 'Previous post link', 'ligeti' ) . '%title' ); ?>
		<?php next_post_link( '<div class="next">%link</div>', '%title' . _x( '', 'Next post link', 'ligeti' ).' <i class="icon-double-angle-right"></i>'  ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="previous"><?php next_posts_link( __( '<i class="icon-double-angle-left"></i> Older posts', 'ligeti' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="next"><?php previous_posts_link( __( 'Newer posts <i class="icon-double-angle-right"></i>', 'ligeti' ) ); ?></div>
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
			return 'Referencia ház';
			break;
		case '5':
			return 'Eladó';
			break;

		case '6':
			return 'Gazdáját várja';
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


function langed_id($id,$type='page'){
  if(function_exists('icl_object_id')) {
    return icl_object_id($id,$type,true);
  } else {
    return $id;
  }
}



/****** Custom Gallery View for VCDS *****/
remove_shortcode( 'gallery' );
add_shortcode('gallery', 'hu_gallery_shortcode');
/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @staticvar int $instance
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 *     @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 *     @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 *     @type int          $id         Post ID.
 *     @type string       $itemtag    HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 *     @type string       $icontag    HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 *     @type string       $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 *     @type int          $columns    Number of columns of images to display. Default 3.
 *     @type string|array $size       Size of the images to display. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 *     @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 *     @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 *     @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 *     @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
function hu_gallery_shortcode( $attr ) {
  $post = get_post();
  static $instance = 0;
  $instance++;
  if ( ! empty( $attr['ids'] ) ) {
    // 'ids' is explicitly ordered, unless you specify otherwise.
    if ( empty( $attr['orderby'] ) ) {
      $attr['orderby'] = 'post__in';
    }
    $attr['include'] = $attr['ids'];
  }
  /**
   * Filter the default gallery shortcode output.
   *
   * If the filtered output isn't empty, it will be used instead of generating
   * the default gallery template.
   *
   * @since 2.5.0
   * @since 4.2.0 The `$instance` parameter was added.
   *
   * @see gallery_shortcode()
   *
   * @param string $output   The gallery output. Default empty.
   * @param array  $attr     Attributes of the gallery shortcode.
   * @param int    $instance Unique numeric ID of this gallery shortcode instance.
   */
  $output = apply_filters( 'post_gallery', '', $attr, $instance );
  if ( $output != '' ) {
    return $output;
  }
  $html5 = current_theme_supports( 'html5', 'gallery' );
  $atts = shortcode_atts( array(
    'order'      => 'ASC',
    'orderby'    => 'menu_order ID',
    'id'         => $post ? $post->ID : 0,
    'itemtag'    => $html5 ? 'figure'     : 'dl',
    'icontag'    => $html5 ? 'div'        : 'dt',
    'captiontag' => $html5 ? 'figcaption' : 'dd',
    'columns'    => 5,
    'size'       => 'medium11',
    'include'    => '',
    'exclude'    => '',
    'link'       => 'file'
  ), $attr, 'gallery' );
  $id = intval( $atts['id'] );
  if ( ! empty( $atts['include'] ) ) {
    $_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
    $attachments = array();
    foreach ( $_attachments as $key => $val ) {
      $attachments[$val->ID] = $_attachments[$key];
    }
  } elseif ( ! empty( $atts['exclude'] ) ) {
    $attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  } else {
    $attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
  }
  if ( empty( $attachments ) ) {
    return '';
  }
  if ( is_feed() ) {
    $output = "\n";
    foreach ( $attachments as $att_id => $attachment ) {
      $output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
    }
    return $output;
  }
  $itemtag = tag_escape( $atts['itemtag'] );
  $captiontag = tag_escape( $atts['captiontag'] );
  $icontag = tag_escape( $atts['icontag'] );
  $valid_tags = wp_kses_allowed_html( 'post' );
  if ( ! isset( $valid_tags[ $itemtag ] ) ) {
    $itemtag = 'dl';
  }
  if ( ! isset( $valid_tags[ $captiontag ] ) ) {
    $captiontag = 'dd';
  }
  if ( ! isset( $valid_tags[ $icontag ] ) ) {
    $icontag = 'dt';
  }
  $columns = intval( $atts['columns'] );
  $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
  $float = is_rtl() ? 'right' : 'left';
  $selector = "gallery-{$instance}";
  $gallery_style = '';
  /**
   * Filter whether to print default gallery styles.
   *
   * @since 3.1.0
   *
   * @param bool $print Whether to print default gallery styles.
   *                    Defaults to false if the theme supports HTML5 galleries.
   *                    Otherwise, defaults to true.
   */
  if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
    $gallery_style = "
    <style type='text/css'>
      #{$selector} {
        margin: auto;
      }
      #{$selector} .gallery-item {
        float: {$float};
        margin-top: 10px;
        text-align: center;
        width: {$itemwidth}%;
      }
      #{$selector} img {
        border: 2px solid #cfcfcf;
      }
      #{$selector} .gallery-caption {
        margin-left: 0;
      }
      /* see gallery_shortcode() in wp-includes/media.php */
    </style>\n\t\t";
  }
  $size_class = sanitize_html_class( $atts['size'] );
  $gallery_div = "<ul id='$selector' class='gallery galleryid-{$id} gallery-grid-{$columns} gallery-thumbsize-{$size_class}'>";
  /**
   * Filter the default gallery shortcode CSS styles.
   *
   * @since 2.5.0
   *
   * @param string $gallery_style Default CSS styles and opening HTML div container
   *                              for the gallery shortcode output.
   */
  $output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );
  $i = 0;
  foreach ( $attachments as $id => $attachment ) {
    $attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
    if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
      $image_output = wp_get_attachment_link( $id, $atts['size'], false, false, false, $attr );
    } elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
      $image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
    } else {
      $image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
    }
    $image_meta  = wp_get_attachment_metadata( $id );
    $orientation = '';
    if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
      $orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
    }
    $output .= "<li><{$itemtag} class='gallery__item'>";
    $output .= "
      <{$icontag} class='gallery-icon {$orientation}'>
        $image_output
      </{$icontag}>";
    if ( $captiontag && trim($attachment->post_excerpt) ) {
      $output .= "
        <{$captiontag} class='wp-caption-text gallery-caption' id='$selector-$id'>
        " . wptexturize($attachment->post_excerpt) . "
        </{$captiontag}>";
    }
    $output .= "</{$itemtag}></li>";
    if ( ! $html5 && $columns > 0 && ++$i % $columns == 0 ) {
      $output .= '<br style="clear: both" />';
    }
  }
  if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
    $output .= "
      <br style='clear: both' />";
  }
  $output .= "
    </ul>\n";
  return $output;
}