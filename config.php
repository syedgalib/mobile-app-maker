<?php
// General
defined( 'MAM_VERSION' ) || define( 'MAM_VERSION', '0.0.1' );

// Paths
defined( 'MAM_BASE' ) || define( 'MAM_BASE', dirname( MAM_FILE ) );
defined( 'MAM_BASE_URL' ) || define( 'MAM_BASE_URL', plugin_dir_url( MAM_FILE ) );

defined( 'MAM_TEMPLATE_PATH' ) || define( 'MAM_TEMPLATE_PATH', MAM_BASE . '/template/' );
defined( 'MAM_VIEW_PATH' ) || define( 'MAM_VIEW_PATH', MAM_BASE . '/view/' );

defined( 'MAM_ASSETS_PATH' ) || define( 'MAM_ASSETS_PATH', MAM_BASE . '/assets/' );
defined( 'MAM_ASSETS_URL' ) || define( 'MAM_ASSETS_URL', MAM_BASE_URL . 'assets/' );

defined( 'MAM_JS_URL' ) || define( 'MAM_JS_URL', MAM_ASSETS_URL . 'js/' );
defined( 'MAM_CSS_URL' ) || define( 'MAM_CSS_URL', MAM_ASSETS_URL . 'css/' );

defined( 'MAM_SCRIPT_DEBUG' ) || define( 'MAM_SCRIPT_DEBUG', apply_filters( 'mam_script_debug', SCRIPT_DEBUG ) );