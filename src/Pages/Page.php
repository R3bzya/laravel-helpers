<?php

namespace R3bzya\Helpers\Pages;

use Illuminate\Support\Collection;

readonly class Page
{
    public function __construct(
        public array|Collection $items,
        public Pagination $pagination,
    ) {}
}