<?php
/**
 * Shortcode Options.
 *
 * @author            Uriel Wilson
 * @copyright         2015 - 2022 Uriel Wilson
 * @license           GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name:       Shortcode Options
 * Plugin URI:        https://urielwilson.com/
 * Description:       The Shortcode Options plugin is a simple way to display WordPress Options using shortcode <strong>[wpoption opt="blogname"]</strong>, you can reference list of options here:<a href="https://codex.wordpress.org/Option_Reference"> Option Reference </a>.
 * Version:           2.1.0
 * Requires at least: 3.4
 * Requires PHP:      7.3
 * Author:            Uriel Wilson
 * Author URI:        https://urielwilson.com
 * Text Domain:       shortcode-options
 * Domain Path:       /languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// start plugin.
if ( ! \defined( 'ABSPATH' ) ) {
    exit;
}

// Setup access to the plugin dir path.
\define( 'SCO_DIR_PATH', plugin_dir_path( __FILE__ ) );

// Load composer.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// The plugin.
ShortcodeOptions\Plugin::init()->hooks();
