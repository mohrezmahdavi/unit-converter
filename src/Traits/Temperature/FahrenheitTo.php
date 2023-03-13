<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Temperature;

trait FahrenheitTo
{
    /**
     * @param int|float $fahrenheit
     * @return float
     */
    public function fahrenheitToCelsius(int|float $fahrenheit): float
    {
        return (floatval($fahrenheit) - 32) * (5 / 9);
    }

    /**
     * @param int|float $fahrenheit
     * @return float
     */
    public function fahrenheitToKelvin(int|float $fahrenheit): float
    {
        return (floatval($fahrenheit) + 459.67) * (5 / 9);
    }

    /**
     * @param int|float $fahrenheit
     * @return float
     */
    public function fahrenheitToRankine(int|float $fahrenheit): float
    {
        return floatval($fahrenheit) + 459.67;
    }

    /**
     * @param int|float $fahrenheit
     * @return float
     */
    public function fahrenheitToDelisle(int|float $fahrenheit): float
    {
        return (212 - floatval($fahrenheit)) * (5 / 6);
    }

    /**
     * @param int|float $fahrenheit
     * @return float
     */
    public function fahrenheitToNewton(int|float $fahrenheit): float
    {
        return (floatval($fahrenheit) - 32) * (11 / 60);
    }
}
