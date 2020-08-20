<?php

namespace codicastudio\Share;

use Illuminate\Support\Facades\Facade;

class ShareFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['share'];
    }
}