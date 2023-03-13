<?php

if (!function_exists('unitConverter')) {
    /**
     * @return \App\Services\UnitConverter\UnitConverter
     */
    function unitConverter()
    {
        return new \App\Services\UnitConverter\UnitConverter;
    }
}
