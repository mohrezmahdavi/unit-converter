<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Length;

trait MeterTo
{
    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToMillimeter(int|float $meters): float
    {
        return floatval($meters) * 1000;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToCentimeter(int|float $meters): float
    {
        return floatval($meters) * 100;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToKilometer(int|float $meters): float
    {
        return floatval($meters) * 0.001;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToInch(int|float $meters): float
    {
        return floatval($meters) * 39.37;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToFeet(int|float $meters): float
    {
        return floatval($meters) * 3.28084;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToYard(int|float $meters): float
    {
        return floatval($meters) * 1.1;
    }

    /**
     * @param int|float $meters
     * @return float
     */
    public function meterToMile(int|float $meters): float
    {
        return floatval($meters) * 0.000621;
    }
}
