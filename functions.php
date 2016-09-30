<?php
/***** STYLES AND FONTS DECLARED *****/
function theme_styles() {
	wp_enqueue_style('googleFonts-Josefin-Slab','http://fonts.googleapis.com/css?family=Josefin+Slab:400,700');
	wp_enqueue_style('googleFonts-Alegreya-Sans','http://fonts.googleapis.com/css?family=Alegreya+Sans:300,500,300italic,500italic');

	wp_enqueue_style('googleFonts-Poiret-One','http://fonts.googleapis.com/css?family=Poiret+One');
	wp_enqueue_style('googleFonts-Raleway','http://fonts.googleapis.com/css?family=Raleway:200,400,600');

	wp_enqueue_style('normalize-theme-style', get_template_directory_uri(). '/css/normalize.css');
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
?>
