<?php

namespace Codeception\Module;

use Codeception\Module;


class CheckDebugLog extends Module
{

    public function check()
    {
        $this->debug("Hello Dim!");
    }

}
