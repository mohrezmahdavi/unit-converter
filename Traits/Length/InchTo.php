<?php

namespace Mohrez\UnitConverter\Traits\Length;

trait InchTo
{
    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToMillimeter(int|float $inch): float
    {
        return floatval($inch) * 25.4;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToCentimeter(int|float $inch): float
    {
        return floatval($inch) * 2.54;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToMeter(int|float $inch): float
    {
        return floatval($inch) * 0.0254;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToKilometer(int|float $inch): float
    {
        return floatval($inch) * 0.0000254;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToFoot(int|float $inch): float
    {
        return floatval($inch) * 0.0833;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToYard(int|float $inch): float
    {
        return floatval($inch) * 0.0278;
    }

    /**
     * @param int|float $inch
     * @return float
     */
    public function inchToMile(int|float $inch): float
    {
        return floatval($inch) * 0.0000158;
    }
}
