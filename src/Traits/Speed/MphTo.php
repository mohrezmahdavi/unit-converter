<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Speed;

trait MphTo
{
    /**
     * @param int|float $mph
     * @return float
     */
    public function mphToMs(int|float $mph): float
    {
        return floatval($mph) * 0.44704;
    }

    /**
     * @param int|float $mph
     * @return float
     */
    public function mphToKnot(int|float $mph): float
    {
        return floatval($mph) * 0.8689762419;
    }

    /**
     * @param int|float $mph
     * @return float
     */
    public function mphToKmh(int|float $mph): float
    {
        return floatval($mph) * 1.60934;
    }

    /**
     * @param int|float $mph
     * @return float
     */
    public function mphToMach(int|float $mph): float
    {
        return floatval($mph) * 0.0015151515;
    }
}
