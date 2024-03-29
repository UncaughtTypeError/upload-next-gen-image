<?php

/**
 *
 * @link              https://github.com/UncaughtTypeError/upload-next-gen-image
 * @since             1.0.0
 * @package           Image_Upload_for_Next_Generation_Formats
 * @author            Nathan Shepherd
 * @copyright         2021 Nathan Shepherd
 * @license           GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Image Upload for Next-Generation Formats
 * Plugin URI:        https://github.com/UncaughtTypeError/upload-next-generation-image
 * Description:       Upload .webp, .avif, and .svg image formats. A plugin that allows you to support next generation image formats on your Wordpress site.
 * Version:           1.0.0
 * Author:            Nathan Shepherd
 * Author URI:        https://github.com/UncaughtTypeError/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-upload-next-generation-image
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
define( 'IU_NGF_VERSION', '1.0.0' );

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
