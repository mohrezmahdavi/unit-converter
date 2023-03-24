<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Speed;

trait KmhTo
{
    /**
     * @param int|float $kmh
     * @return float
     */
    public function kmhToMs(int|float $kmh): float
    {
        return floatval($kmh) * 0.27777778;
    }

    /**
     * @param int|float $kmh
     * @return float
     */
    public function kmhToMph(int|float $kmh): float
    {
        return floatval($kmh) * 0.6213711922;
    }

    /**
     * @param int|float $kmh
     * @return float
     */
    public function kmhToKnot(int|float $kmh): float
    {
        return floatval($kmh) * 0.5399568034;
    }

    /**
     * @param int|float $kmh
     * @return float
     */
    public function kmhToMach(int|float $kmh): float
    {
        return floatval($kmh) * 0.0009414715;
    }
}
