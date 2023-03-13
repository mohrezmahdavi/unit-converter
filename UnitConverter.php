<?php

namespace Mohrezmahdavi\UnitConverter;

use Mohrezmahdavi\UnitConverter\Traits\Length\LengthTrait;
use Mohrezmahdavi\UnitConverter\Traits\Temperature\TemperatureTrait;

class UnitConverter
{
    use LengthTrait, TemperatureTrait;
}