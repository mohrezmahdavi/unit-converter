<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Temperature;

trait CelsiusTo
{
    /**
     * @param int|float $celsius
     * @return float
     */
    public function celsiusToKelvin(int|float $celsius): float
    {
        return floatval($celsius) + 273.15;
    }

    /**
     * @param int|float $celsius
     * @return float
     */
    public function celsiusToFahrenheit(int|float $celsius): float
    {
        return (floatval($celsius) * (9 / 5)) + 32;
    }

    /**
     * @param int|float $celsius
     * @return float
     */
    public function celsiusToRankine(int|float $celsius): float
    {
        return (floatval($celsius) + 273.15) * (9 / 5);
    }

    /**
     * @param int|float $celsius
     * @return float
     */
    public function celsiusToDelisle(int|float $celsius): float
    {
        return (100 - floatval($celsius)) * (3 / 2);
    }

    /**
     * @param int|float $celsius
     * @return float
     */
    public function celsiusToNewton(int|float $celsius): float
    {
        return floatval($celsius) * (33 / 100);
    }
}
