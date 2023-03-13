<?php

namespace Mohrez\UnitConverter\Traits\Length;

trait CentimeterTo
{
    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToMillimeter(int|float $centimeter): float
    {
        return floatval($centimeter) * 10;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToMeter(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.01;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToKilometer(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.00001;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToInch(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.3937;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToFoot(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.033;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToYard(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.011;
    }

    /**
     * @param int|float $centimeter
     * @return float
     */
    public function centimeterToMile(int|float $centimeter): float
    {
        return floatval($centimeter) * 0.00000621;
    }
}
