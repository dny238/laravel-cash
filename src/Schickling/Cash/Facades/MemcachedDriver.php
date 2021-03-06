<?php namespace Schickling\Cash\Facades;

use Illuminate\Support\Facades\Facade;

class MemcachedDriver extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'memcachedDriver'; }

}
