<?php

namespace Codeception\Module;

use Codeception\Module;

class WPLoad extends Module {

    public function load_WP(){

        $pls_check = " Please check module configuration.";

        if( !isset( $this->config['path'] ) ){
            $this->fail( "Config variable 'path' missing." . $pls_check );
        }

        if( !file_exists($this->config['path']) ){
            $this->fail( "File wp-load.php not found." . $pls_check );
        }

        include_once $this->config['path'];
    }

}
