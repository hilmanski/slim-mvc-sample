<?php
/*
 * Other Controller that using Container
 * should extends this BaseController
 */

namespace App\Controllers;

use Interop\Container\ContainerInterface;

class BaseController
{
    protected $c;

    public function __construct(ContainerInterface $container)
    {
        $this->c = $container;
    }
}
