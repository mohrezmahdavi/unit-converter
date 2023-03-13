<?php

namespace Mohrez\UnitConverter\Traits\Length;

trait YardTo
{
    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToMillimeter(int|float $yard): float
    {
        return floatval($yard) * 914.4;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToCentimeter(int|float $yard): float
    {
        return floatval($yard) * 91.44;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToMeter(int|float $yard): float
    {
        return floatval($yard) * 0.9144;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToKilometer(int|float $yard): float
    {
        return floatval($yard) * 0.009144;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToInch(int|float $yard): float
    {
        return floatval($yard) * 36;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToFoot(int|float $yard): float
    {
        return floatval($yard) * 3;
    }

    /**
     * @param int|float $yard
     * @return float
     */
    public function yardToMile(int|float $yard): float
    {
        return floatval($yard) * 0.00057;
    }
}
