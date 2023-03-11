<?php

namespace MobileAppMaker\Module\Core\Workshop;

use MobileAppMaker\Helper\Service_Loader;

class Init {

    public function __construct() {
        // load_services
        Service_Loader::init_services( $this->get_services() );
    }

    public function get_services() {
        return [
            Upload_Android_App::class,
        ];
    }

}