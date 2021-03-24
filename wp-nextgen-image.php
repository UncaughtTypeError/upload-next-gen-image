<?php

/**
 *
 * @link              https://github.com/UncaughtTypeError/nextgen-image-upload
 * @since             1.0.0
 * @package           Image_Upload_for_Next_Gen_Formats
 * @author            Nathan Shepherd
 * @copyright         2021 Nathan Shepherd
 * @license           GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Image Upload for Next-Gen Formats
 * Plugin URI:        https://github.com/UncaughtTypeError/nextgen-image-upload
 * Description:       Upload .webp, .avif, and .svg image formats. A plugin that allows you to support next-gen image formats on your Wordpress site.
 * Version:           1.0.0
 * Author:            Nathan Shepherd
 * Author URI:        https://github.com/UncaughtTypeError/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-upload-next-gen-image
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * See SemVer - https://semver.org
 */
define( 'Image_Upload_Next_Gen_Formats_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-upload-next-gen-image.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Image_Upload_Next_Gen_Formats() {

	$plugin = new Image_Upload_Next_Gen_Formats();
	$plugin->run();

}
run_Image_Upload_Next_Gen_Formats();
