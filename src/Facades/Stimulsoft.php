<?php

namespace Space\Stimulsoft\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Space\Stimulsoft\Stimulsoft
 */
class Stimulsoft extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Space\Stimulsoft\Stimulsoft::class;
    }
}
