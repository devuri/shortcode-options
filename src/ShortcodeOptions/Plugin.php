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

use ShortcodeOptions\Traits\Singleton;

class Plugin
{
    use Singleton;

    /**
     * Add Shortcode [wpoption opt="myoption"].
     */
    public function hooks(): void
    {
        add_shortcode( 'wpoption', [ $this, 'wpoption_shortcode' ] );

        /**
         * Loading the plugin translations.
         */
        add_action( 'init', [ Lang::class, 'i18n' ] );
    }

    /**
     * Create Shortcode output.
     *
     * @param array $atts
     *
     * @return
     */
    public function wpoption_shortcode( $atts )
    {
        $atts = shortcode_atts(
            [
                'opt' => 'blogname',
            ],
            $atts
        );

        ob_start();

        echo esc_html( get_option( $atts['opt'] ) );

        return ob_get_clean();
    }
}
