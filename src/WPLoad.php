<?php
namespace Codeception\Module;

use Codeception\Module;

class WPLoad extends Module {

    public function load_WP( $how_much='full' ){

        if( $how_much == 'minimal' ){
            define('SHORTINIT', true);
        }

        include $this->config['path'];
    }

}
