<?php

namespace R3bzya\Helpers\Concerns;

use Illuminate\Support\Collection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\AllowedSort;

trait HasMeta
{
    public function getAllowedFilters(): Collection
    {
        return collect($this->allowedFilters ?? [])
            ->map(function (AllowedFilter $value) {
                return $value->getName();
            })
            ->values();
    }

    public function getAllowedSorts(): Collection
    {
        return collect($this->allowedSorts ?? [])
            ->map(function (AllowedSort $value) {
                return $value->getName();
            })
            ->values();
    }

    public function getAllowedIncludes(): Collection
    {
        return collect($this->allowedIncludes ?? [])
            ->map(function (AllowedInclude $value) {
                return $value->getName();
            })
            ->values();
    }
}