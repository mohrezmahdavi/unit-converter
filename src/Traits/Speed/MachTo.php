<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Speed;

trait MachTo
{
    /**
     * @param int|float $mach
     * @return float
     */
    public function machToMs(int|float $mach): float
    {
        return floatval($mach) * 295.0464010624;
    }

    /**
     * @param int|float $mach
     * @return float
     */
    public function machToMph(int|float $mach): float
    {
        return floatval($mach) * 660.0000023899;
    }

    /**
     * @param int|float $mach
     * @return float
     */
    public function machToKmh(int|float $mach): float
    {
        return floatval($mach) * 1062.1670438245;
    }

    /**
     * @param int|float $mach
     * @return float
     */
    public function machToKnot(int|float $mach): float
    {
        return floatval($mach) * 573.5243217075;
    }
}
