<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Length;

trait MileTo
{
    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToMillimeter(int|float $mile): float
    {
        return floatval($mile) * 1609344;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToCentimeter(int|float $mile): float
    {
        return floatval($mile) * 160934.4;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToMeter(int|float $mile): float
    {
        return floatval($mile) * 1609.344;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToKilometer(int|float $mile): float
    {
        return floatval($mile) * 1.609344;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToInch(int|float $mile): float
    {
        return floatval($mile) * 63360;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToFoot(int|float $mile): float
    {
        return floatval($mile) * 5280;
    }

    /**
     * @param int|float $mile
     * @return float
     */
    public function mileToYard(int|float $mile): float
    {
        return floatval($mile) * 1760;
    }
}
