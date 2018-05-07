<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails');
/***** STYLES AND FONTS DECLARED *****/
function theme_styles() {
	wp_enqueue_style('googleFonts-Poiret-One','https://fonts.googleapis.com/css?family=Poiret+One');
	wp_enqueue_style('googleFonts-Raleway','https://fonts.googleapis.com/css?family=Raleway:200,400,600');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('slick-slide', get_template_directory_uri() . '/slick/slick.css');
	wp_enqueue_style('slick-slide-theme', get_template_directory_uri() . '/slick/slick-theme.css');
	wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function my_excerpt_length($length) {
	return 13; // Or whatever you want the length to be.
}
add_filter('excerpt_length', 'my_excerpt_length');

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

add_action( 'init', 'cptui_register_my_cpts_sundlaugar' );
function cptui_register_my_cpts_sundlaugar() {
	$labels = array(
		"name" => __( 'sundlaugar', '' ),
		"singular_name" => __( 'sundlaug', '' ),
		);

	$args = array(
		"label" => __( 'sundlaugar', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "sundlaugar", "with_front" => true ),
		"query_var" => true,

		"supports" => array( "title", "editor", "thumbnail" ),					);
	register_post_type( "sundlaugar", $args );

// End of cptui_register_my_cpts_sundlaugar()
}

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyALN6B-y54zn1ukWuodf2z9Ntwe3kl1p2M';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


?>
