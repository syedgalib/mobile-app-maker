<?php

use MobileAppMaker\Module;
use MobileAppMaker\Helper\Service_Loader;

final class MobileAppMaker {

    private static $instance;

    private function __construct() {

        // Register Controllers
        Service_Loader::init_services( $this->get_controllers() );

    }

    public static function get_instance() {
 
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function get_controllers() {
        return [
            Module\Init::class
        ];
    }

}
