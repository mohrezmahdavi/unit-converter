<?php

namespace Mohrezmahdavi\UnitConverter\Facade;

use Illuminate\Support\Facades\Facade;

class UnitConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unitConverter';
    }
}
