<?php

use Illuminate\Support\Facades\Lang;

if (! function_exists('enum_label')) {
    /**
     * Retrieves the label for the given enum instance.
     */
    function enum_label(UnitEnum $enum, array $replace = [], string|null $locale = null, bool $fallback = true): string
    {
        $key = 'enums.' . get_class($enum) . '.' . $enum->name;

        return Lang::has($key) ? Lang::get($key, $replace, $locale, $fallback) : $enum->name;
    }
}
