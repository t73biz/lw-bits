<?php

namespace T73biz\LwBits\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \T73biz\LwBits\LwBits
 */
class LwBits extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \T73biz\LwBits\LwBits::class;
    }
}
