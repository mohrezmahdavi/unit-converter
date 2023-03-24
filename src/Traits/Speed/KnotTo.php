<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Speed;

trait KnotTo
{
    /**
     * @param int|float $knot
     * @return float
     */
    public function knotToMs(int|float $knot): float
    {
        return floatval($knot) * 0.5144444445;
    }

    /**
     * @param int|float $knot
     * @return float
     */
    public function knotToMph(int|float $knot): float
    {
        return floatval($knot) * 1.1507794481;
    }

    /**
     * @param int|float $knot
     * @return float
     */
    public function knotToKmh(int|float $knot): float
    {
        return floatval($knot) * 1.852;
    }

    /**
     * @param int|float $knot
     * @return float
     */
    public function knotToMach(int|float $knot): float
    {
        return floatval($knot) * 0.0017436052;
    }
}
