<?php
/*
Plugin Name: Jigsaw Planet
Plugin URI:  https://wordpress.org/plugins/jigsaw-planet/
Description: Embed puzzles from JigsawPlanet.com into your WordPress site
Version:     1.0
Author:      Rami Yushuvaev
Author URI:  http://GenerateWP.com/
Text Domain: jigsaw-planet
Domain Path: /languages
*/



/*
 * Prevent direct access to the file
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/*
 * Jigsaw Planet oEmbed
 */
function jigsaw_planet_oembed_provider() {

	wp_oembed_add_provider( 'http://jigsawplanet.com/*', 'https://www.jigsawplanet.com/api/oembed/game/' );
	wp_oembed_add_provider( 'https://jigsawplanet.com/*', 'https://www.jigsawplanet.com/api/oembed/game/' );
	wp_oembed_add_provider( 'http://www.jigsawplanet.com/*', 'https://www.jigsawplanet.com/api/oembed/game/' );
	wp_oembed_add_provider( 'https://www.jigsawplanet.com/*', 'https://www.jigsawplanet.com/api/oembed/game/' );
	//wp_oembed_add_provider( '#https?://(www\.)?jigsawplanet.com/.*#i', 'https://www.jigsawplanet.com/api/oembed/game/', true );

}
add_action( 'init', 'jigsaw_planet_oembed_provider' );



/*
 * Jigsaw Planet Embed Handler
 *
function jigsaw_planet_embed_handler( $matches, $attr, $url, $rawattr ) {

	$embed = sprintf(
		'<iframe src="https://www.jigsawplanet.com/?rc=play&amp;view=iframe&amp;pid=%1$s" style="width:100%; height:600px" frameborder="0" allowfullscreen></iframe>'
		esc_attr( $matches[1] )
	);

	return apply_filters( 'embed_jigsaw_planet', $embed, $matches, $attr, $url, $rawattr );

}
function jigsaw_planet_embed() {

	wp_embed_register_handler(
		'jigsaw_planet',
		'#//www.jigsawplanet.com/(.*)#i',
		'jigsaw_planet_embed_handler'
	);

}
add_action( 'init', 'jigsaw_planet_embed' );
*/