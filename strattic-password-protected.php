<?php
/*
Plugin Name: Strattic - Password Protected Content
Plugin URI: https://www.strattic.com
Description: Adds support for password protected pages to static sites on Strattic
Version: 1.0.0
Contributors: zgordon
Author: Zac Gordon
Author URI: https://strattic.com
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: stratticpasswordprotected
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/enqueue-scripts.php');
// include( plugin_dir_path( __FILE__ ) . 'includes/settings-fields.php');
// include( plugin_dir_path( __FILE__ ) . 'includes/menus.php');
// include( plugin_dir_path( __FILE__ ) . 'includes/rest-api.php');



?>