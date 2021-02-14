<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       /
 * @since      1.0.0
 *
 * @package    Nextgen_Image_Upload
 * @subpackage Nextgen_Image_Upload/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nextgen_Image_Upload
 * @subpackage Nextgen_Image_Upload/admin
 * @author     Nathan Shepherd <nathan.shepherd8@gmail.com>
 */
class Nextgen_Image_Upload_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    string    $plugin_name   	The name of this plugin.
	 * @param    string    $version			The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Note:
	 *
	 * An instance of this class should be passed to the run() function
	 * defined in Nextgen_Image_Upload_Loader as all of the hooks are defined
	 * in that particular class.
	 *
	 * The Nextgen_Image_Upload_Loader will then create the relationship
	 * between the defined hooks and the functions defined in this
	 * class.
	 */

	/**
	 * Allow extension validation of additional MIME types
	 * 
	 * @since    		1.0.0
	 * @param array     $types      MIME types
	 * @param string    $file       (Required) Full path to the file.
	 * @param string    $filename   (Required) The name of the file (may differ from $file due to $file being in a tmp directory).
	 * @param string    $mimes      (Optional) Array of mime types keyed by their file extension regex. Default value: null
	 * @return array    Values for the extension, mime type, and corrected filename.
	 */
	public function enable_types( $types, $file, $filename, $mimes ) {

		$type = null;

		switch ($filename) {
			case ( false !== strpos( $filename, '.svg' ) ):
				$type = 'svg';
				break;
			case ( false !== strpos( $filename, '.webp' ) ):
				$type = 'webp';
				break;
			case ( false !== strpos( $filename, '.avif' ) ):
				$type = 'avif';
				break;
			default:
				$type = null;
		}

		if ($type) {
			$types['ext'] = $type;
			$types['type'] = 'image/'.$type;
		}

		return $types;
	}

	/**
	 * Extend Wordpress MIME type support
	 * 
	 * @since    		1.0.0
	 * @param array     $mime_types    Currently allowed types
	 * @return array    Added types
	 */
	public function allowed_mime_types( $mime_types ) {

		$added_mime_types = array(
			'svg'   => 'image/svg+xml', // SVG Images
			'webp'  => 'image/webp',    // WebP Images
			'avif'  => 'image/avif',    // AVIF Images
		);

		return array_merge( $mime_types, $added_mime_types );
	}

}
