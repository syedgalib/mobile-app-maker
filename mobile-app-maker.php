<?php

/**
 * Mobile App Maker
 *
 * @package           MobileAppMaker
 * @author            Syed Galib
 * @copyright         2023 Syed Galib
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Mobile App Maker
 * Plugin URI:        https://github.com/syedgalib/mobile-app-maker
 * Description:       A simple mobile app maker plugin.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Syed Galib
 * Author URI:        https://github.com/syedgalib
 * Text Domain:       mobile-app-maker
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/syedgalib/mobile-app-maker
 */

defined( 'ABSPATH' ) || exit();
define( 'MAM_FILE', __FILE__ );

include 'vendor/autoload.php';
include 'config.php';
include 'app.php';

if ( ! function_exists( 'MobileAppMaker' ) ) {
    function MobileAppMaker() {
        return MobileAppMaker::get_instance();
    }
}

MobileAppMaker();