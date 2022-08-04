<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ZED_VERSION', '1.0.1' );
define( 'ZED_DIR', trailingslashit( get_stylesheet_directory()) . 'zed/' );
define( 'ZED_URI', trailingslashit( esc_url( get_stylesheet_directory_uri() ) ) . 'zed/' );

define( 'ZED_DEBUG', WP_DEBUG );


require_once ZED_DIR . 'inc/modules/settings.php';
require_once ZED_DIR . 'inc/modules/option-free/option-free.php';
require_once ZED_DIR . 'inc/modules/debug-monitor/debug-monitor.php';

