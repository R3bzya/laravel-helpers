<?php

namespace R3bzya\Helpers\Support;

class RoutePattern
{
    const INT = '[0-9]+';

    const NEGATIVE_INT = '-[0-9]+';

    const UUID = '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}';

    const ULID = '[0-9a-zA-Z]{26}';

    public static function or(...$patterns): string
    {
        return collect($patterns)->join('|');
    }
}