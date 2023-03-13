<?php

namespace Mohrez\UnitConverter;

use Mohrez\UnitConverter\Traits\Length\LengthTrait;
use Mohrez\UnitConverter\Traits\Temperature\TemperatureTrait;

class UnitConverter
{
    use LengthTrait, TemperatureTrait;
}