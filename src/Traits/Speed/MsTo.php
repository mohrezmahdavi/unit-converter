<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Speed;

trait MsTo
{
    /**
     * @param int|float $ms
     * @return float
     */
    public function msToKmh(int|float $ms): float
    {
        return floatval($ms) * 3.6;
    }

    /**
     * @param int|float $ms
     * @return float
     */
    public function msToMph(int|float $ms): float
    {
        return floatval($ms) * 2.2369362921;
    }

    /**
     * @param int|float $ms
     * @return float
     */
    public function msToKnot(int|float $ms): float
    {
        return floatval($ms) * 1.9438444924;
    }

    /**
     * @param int|float $ms
     * @return float
     */
    public function msToMach(int|float $ms): float
    {
        return floatval($ms) * 0.0033892974;
    }
}
