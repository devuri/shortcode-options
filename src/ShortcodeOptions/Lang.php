<?php
/**
 * This file is part of the Shortcode Options WordPress PLugin.
 *
 * (c) Uriel Wilson <hello@urielwilson.com>
 *
 * Please see the LICENSE file that was distributed with this source code
 * for full copyright and license information.
 */

namespace ShortcodeOptions;

class Lang
{
    /**
     * Load the plugin text domain for translation.
     *
     * @since    14.5.0
     * @see https://developer.wordpress.org/reference/functions/load_plugin_textdomain/
     */
    public static function i18n(): void
    {
        load_plugin_textdomain(
            'shortcode-options',
            false,
            SCO_DIR_PATH . '/languages/'
        );
    }
}
