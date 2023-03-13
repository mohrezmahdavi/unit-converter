<?php

namespace Mohrez\UnitConverter\Traits\Temperature;

trait KelvinTo
{
    /**
     * @param int|float $kelvin
     * @return float
     */
    public function kelvinToCelsius(int|float $kelvin): float
    {
        return floatval($kelvin) - 273.15;
    }

    /**
     * @param int|float $kelvin
     * @return float
     */
    public function kelvinToFahrenheit(int|float $kelvin): float
    {
        return (floatval($kelvin) * (9 / 5)) - 459.67;
    }

    /**
     * @param int|float $kelvin
     * @return float
     */
    public function kelvinToRankine(int|float $kelvin): float
    {
        return floatval($kelvin) * (9 / 5);
    }

    /**
     * @param int|float $kelvin
     * @return float
     */
    public function kelvinToDelisle(int|float $kelvin): float
    {
        return (373.15 - floatval($kelvin)) * (3 / 2);
    }

    /**
     * @param int|float $kelvin
     * @return float
     */
    public function kelvinToNewton(int|float $kelvin): float
    {
        return (floatval($kelvin) - 273.15) * (33 / 100);
    }
}
