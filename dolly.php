<?php
/**
 * Plugin Name:       Dolly
 * Description:       No more Hello Dolly.
 * Version:           1.0.1
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Brad Parbs
 * Author URI:        https://bradparbs.com/
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       dolly
 *
 * @package dolly
 */

namespace Dolly;

defined( 'ABSPATH' ) || exit;

add_action( 'admin_init', __NAMESPACE__ . '\\deactivate_hello_dolly' );

/**
 * Deactivate Hello Dolly, whether it's the copy bundled with core or installed from WordPress.org.
 */
function deactivate_hello_dolly() {
	$plugins = array_filter(
		[ 'hello.php', 'hello-dolly/hello.php' ],
		'is_plugin_active'
	);

	if ( $plugins ) {
		deactivate_plugins( $plugins );
	}
}
