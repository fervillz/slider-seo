<?php
/**
 * Plugin Name:  Slider SEO
 * Plugin URI:   https://wordpress.org/plugins/slider-seo
 * Description:  Create SEO friendly slider and boost your website's traffic in no time.
 * Version:      1.0.1
 * Author:       Fernando Villamor Jr
 * Author URI:   http://fernandovillamorjr.com/
 * Author Email: fervillz@gmail.com
 * Text Domain:  slider-seo
 * Domain Path:  /lang
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package   slider-seo
 * @author    fernando villamor<fervillz@gmail.com>
 * @license   GPL-2.0+
 * @link      http://fernandovillamorjr.com
 * @copyright 2016 Fernando Villamor
 *
 */
 
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
 
/**
 * Includes the core plugin class for executing the plugin.
 */
require_once( plugin_dir_path( __FILE__ ) . 'admin/slider-seo-admin.php' );
 
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */

function run_slider_SEO_admin() {
 
    $plugin = new Slider_SEO_Admin();
    $plugin->run();
 
}
run_slider_SEO_admin();