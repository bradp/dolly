<?php
/**
 * Plugin Name: Dolly
 * Description: No more Hello Dolly
 * Version:     1.0.0
 * Author:      Brad Parbs
 * Author URI:  https://bradparbs.com/
 * License:     GPLv2
 * Text Domain: draft
 * Domain Path: /lang/
 *
 * @package dolly
 */

require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

add_action( 'plugins_loaded', function () {
	deactivate_plugins( 'hello-dolly/hello.php' );
} );
