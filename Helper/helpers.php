<?php

if (!function_exists('unitConverter')) {
    /**
     * @return \Mohrezmahdavi\UnitConverter\UnitConverter
     */
    function unitConverter()
    {
        return new \Mohrezmahdavi\UnitConverter\UnitConverter;
    }
}
