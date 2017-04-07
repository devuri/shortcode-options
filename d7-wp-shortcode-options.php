<?php
/**
*---------------------------------------------------------------------------------
*	@package  WP Shortcode Options  by DeVision7.com
*	@copyright  Copyright (c) 2017
*---------------------------------------------------------------------------------
*
*	Plugin Name: WP Shortcode Options
*	Plugin URI: http://alpha.devision7.com/wordpress-plugins/
* GitHub Plugin URI: devuri/wp-shortcode-options
*	Description: This plugin is a simple way to display WP Options using shortcode <strong>[wpoption option="blogname"]</strong>, you can reference list of options here:<a href="https://codex.wordpress.org/Option_Reference"> Option Reference </a>.
*	Version: 1.2.0
*	Author: DeVision7.com
*	Author URI: http://devision7.com
*	Contributors: DeVision7.com
*	License: GPLv2 or later
*	License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*	Text Domain: wp-shortcode-options
*	Domain Path: /languages
*	Usage: .
*	Tags:
*
*
*	Requires PHP: 5.2+
*	Tested up to PHP: 7.0
*
*	Copyright 2017 DeVision7.com	(email : uriel.zipteq@gmail.com)
*	License: GNU General Public License
*	GPLv2 Full license details in license.txt
*---------------------------------------------------------------------------------------------------------------------------------------------------------
*
*	WP Shortcode Options  is built using the Dv7 Plugin QuickStarter @ http://wp.deVision7.com/, (C) 2015- 2017 DeVision7.
*
*	WP Shortcode Options  , like WordPress, is licensed under the GPL.
*	Use it to make something cool, have fun, and share.
*
*	WP Shortcode Options   is free software; you can redistribute it and/or
*	modify it under the terms of the GNU General Public License
*	as published by the Free Software Foundation; either version 2
*	of the License, or (at your option) any later version.
*
*	This program is distributed in the hope that it will be useful,
*	but WITHOUT ANY WARRANTY; without even the implied warranty of
*	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*	GNU General Public License for more details.
*
*	You should have received a copy of the GNU General Public License
*	along with WP Shortcode Options . If not, see http://www.gnu.org/licenses/
*---------------------------------------------------------------------------------------------------
*/


	// * DIRECT ACCESS DENIED *
	if ( ! defined( "WPINC" ) ) {
		die;
	}


	//plugin directory CONSTANT
	define("D7WPO_DIR", dirname(__FILE__));

	//PLUGIN URL
	define("D7WPO_URL", plugins_url( "/",__FILE__ ));


    /*
    *--------------------------------------------------------------------------
    * Start Plugin Code Here
    *--------------------------------------------------------------------------
    *
    * Ok .
    *
    */


		/**
		* Add Shortcode [wpoption option="myoption"]
		***/
		function wpoption_shortcode( $atts ) {

			// Attributes
			$atts = shortcode_atts(
				array(
					'option' => 'blogname',
				),
				$atts
			);

		       $output_wp_options = get_option( $atts['option'] );
		       return $output_wp_options;

		}
		add_shortcode( 'wpoption', 'wpoption_shortcode' );
