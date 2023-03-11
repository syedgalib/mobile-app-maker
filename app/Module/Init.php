<?php

namespace MobileAppMaker\Module;

use MobileAppMaker\Helper\Service_Loader;

class Init {

    public function __construct() {
        // load_services
        Service_Loader::init_services( $this->get_services() );
    }

    public function get_services() {
        return [
            Core\Init::class,
        ];
    }

}