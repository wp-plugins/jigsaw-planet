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
