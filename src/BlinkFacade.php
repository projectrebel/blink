<?php

namespace ProjectRebel\Blink;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ProjectRebel\Blink\Blink
 */
class BlinkFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blink';
    }
}
