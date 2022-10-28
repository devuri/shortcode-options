<?php
/**
 * WP Shortcode Options.
 *
 * @author            Uriel Wilson
 * @copyright         2015 - 2022 Uriel Wilson
 * @license           GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name:       WP Shortcode Options
 * Plugin URI:        https://urielwilson.com/
 * Description:       This plugin is a simple way to display WP Options using shortcode <strong>[wpoption option="blogname"]</strong>, you can reference list of options here:<a href="https://codex.wordpress.org/Option_Reference"> Option Reference </a>.
 * Version:           2.0.0
 * Requires at least: 3.0
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

// Load composer.
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// The plugin.
ShortcodeOptions\Plugin::init()->hooks();
