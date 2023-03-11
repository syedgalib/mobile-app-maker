<?php

namespace MobileAppMaker\Module\Core\Asset;

use MobileAppMaker\Helper\Service_Loader;

class Init {

    public function __construct() {
        // load_services
        Service_Loader::init_services( $this->get_services() );
    }

    public function get_services() {
        return [
            Public_Asset::class,
            Admin_Asset::class,
        ];
    }

}