<?php
/**
 * This file is part of the WP Shortcode Options WordPress PLugin.
 *
 * (c) Uriel Wilson <uriel@urielwilson.com>
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
     * Start here.
     */
    public function __construct()
	{
	}

	/**
	 * Add Shortcode [wpoption opt="myoption"]
	 */
	public function hooks()
	{
		add_shortcode( 'wpoption', [$this, 'wpoption_shortcode'] );
	}

	/**
	 * Create Shortcode output.
	 *
	 * @param  array $atts
	 * @return
	 */
	public function wpoption_shortcode( $atts )
	{
	   	$atts = shortcode_atts(
	   		array(
	   			'opt' => 'blogname',
	   		),
	   		$atts
	   	);

	   	$output = get_option( $atts['opt'] );

		return $output;
	}

}
