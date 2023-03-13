<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Length;

trait MillimeterTo
{
    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToCentimeter(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.1;
    }

    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToMeter(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.001;
    }

    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToKilometer(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.000001;
    }

    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToInch(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.03937;
    }

    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToFoot(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.0033;
    }

    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToYard(int|float $millimeter): float
    {
        return floatval($millimeter) * 0.0011;
    }
    
    /**
     * @param int|float $millimeter
     * @return float
     */
    public function millimeterToMile(int|float $millimeter): float
    {
        return floatval($millimeter) * (6.21 * (10 ^ -7));
    }
}