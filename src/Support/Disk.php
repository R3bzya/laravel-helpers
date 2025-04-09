<?php

namespace R3bzya\Helpers\Support;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Disk
{
    public static function makeSubDirs(string|null $name = null): string
    {
        $subDirsLength = config('laravel-helpers.disk.sub_dirs_length', 2);

        $dirs = Str::random($subDirsLength) . DIRECTORY_SEPARATOR . Str::random($subDirsLength);

        if (empty($name)) {
            return $dirs;
        }

        return $dirs . DIRECTORY_SEPARATOR . ltrim($name, '/');
    }

    public static function makeDateTimeSubDirs(Carbon $carbon, string|null $name = null): string
    {
        $dateTimePath = $carbon->toDateString()
            . DIRECTORY_SEPARATOR
            . $carbon->format('H')
            . DIRECTORY_SEPARATOR
            . $carbon->format('i');

        return $dateTimePath . DIRECTORY_SEPARATOR . static::makeSubDirs($name);
    }
}