<?Php
/**
 * Theme Function
 * url: "https://www.youtube.com/playlist?list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h"
 * @package Advanced WordPress Developer
 */

function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	/* wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true ); */
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );