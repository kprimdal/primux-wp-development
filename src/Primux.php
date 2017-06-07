<?php
namespace Primux;

use Primux\Whoops\Whoops;

class Primux {


    /**
     * Primux constructor.
     */
    public function __construct()
    {
        $whoops = new Whoops();
        $whoops->run();
    }
}