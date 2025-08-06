<?php

namespace Mrakahaikal\Swytch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mrakahaikal\Swytch\Swytch
 */
class Swytch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mrakahaikal\Swytch\Swytch::class;
    }
}
