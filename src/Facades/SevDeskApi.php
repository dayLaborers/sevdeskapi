<?php

namespace Daylaborers\Sevdeskapi\Facades;

use Illuminate\Support\Facades\Facade;

class SevDeskApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sevdeskapi';
    }
}
