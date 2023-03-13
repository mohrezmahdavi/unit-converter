<?php

namespace Mohrezmahdavi\UnitConverter\Traits\Length;

trait KilometerTo
{
    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToMillimeter(int|float $kilometer): float
    {
        return floatval($kilometer) * 1000000;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToCentimeter(int|float $kilometer): float
    {
        return floatval($kilometer) * 100000;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToMeter(int|float $kilometer): float
    {
        return floatval($kilometer) * 1000;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToInch(int|float $kilometer): float
    {
        return floatval($kilometer) * 39370.1;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToFoot(int|float $kilometer): float
    {
        return floatval($kilometer) * 3280.84;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToYard(int|float $kilometer): float
    {
        return floatval($kilometer) * 1093.61;
    }

    /**
     * @param int|float $kilometer
     * @return float
     */
    public function kilometerToMile(int|float $kilometer): float
    {
        return floatval($kilometer) * 0.6214;
    }
}
