<?php

namespace MobileAppMaker\Helper;

class Service_Loader {

    /**
     * Initialize Services
     * 
     * @param array $services Services
     * @return void
     */
    public static function init_services( $services = [] ) {

        foreach( $services as $service ) {

            if ( ! class_exists( $service ) ) {
                continue;
            }

            new $service();

        }
        
    }

}