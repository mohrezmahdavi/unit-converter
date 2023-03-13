<?php

namespace Mohrez\UnitConverter\Traits\Length;

trait FootTo
{
    /**
     * @param int|float $foot
     * @return float
     */
    public function footToMillimeter(int|float $foot): float
    {
        return floatval($foot) * 304.8;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToCentimeter(int|float $foot): float
    {
        return floatval($foot) * 30.48;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToMeter(int|float $foot): float
    {
        return floatval($foot) * 0.3048;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToKilometer(int|float $foot): float
    {
        return floatval($foot) * 0.0003048;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToInch(int|float $foot): float
    {
        return floatval($foot) * 12;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToYard(int|float $foot): float
    {
        return floatval($foot) * 0.33;
    }

    /**
     * @param int|float $foot
     * @return float
     */
    public function footToMile(int|float $foot): float
    {
        return floatval($foot) * 0.00019;
    }
}
