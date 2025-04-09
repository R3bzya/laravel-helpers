<?php

namespace R3bzya\Helpers\Pages\Builder;

use R3bzya\Helpers\Pages\Page;
use Illuminate\Http\Request;
use RuntimeException;
use Spatie\QueryBuilder\QueryBuilder;

class PageFactory
{
    public static function fromQuery(QueryBuilder $query, Request $request): Page
    {
        return static::make(__FUNCTION__, $query, $request);
    }

    protected static function make(string $factory, QueryBuilder $builder, Request $request): Page
    {
        $abstract = match ($factory) {
            'fromQuery' => new OffsetPage($builder, $request),
            default => throw new RuntimeException('Undefined factory name: ' . $factory),
        };

        return $abstract->build();
    }
}