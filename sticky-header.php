<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that also follow
 * WordPress coding standards and PHP best practices.
 *
 * @package   Sticky_Header
 * @author    ThematoSoup <contact@thematosoup.com>
 * @license   GPL-2.0+
 * @link      http://thematosoup.com
 * @copyright 2013 ThematoSoup
 *
 * @wordpress-plugin
 * Plugin Name: Sticky Header
 * Plugin URI:  http://thematosoup.com
 * Description: Adds sticky header to your WordPress website
 * Version:     1.0.0
 * Author:      ThematoSoup
 * Author URI:  http://thematosoup.com
 * Text Domain: sticky-header
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-sticky-header.php' );
require_once( plugin_dir_path( __FILE__ ) . 'sticky-header-settings.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'Sticky_Header', 'activate' ) );

add_action( 'plugins_loaded', array( 'Sticky_Header', 'get_instance' ) );