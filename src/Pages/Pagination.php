<?php

namespace R3bzya\Helpers\Pages;

readonly class Pagination
{
    public function __construct(
        public int $total,
        public int|null $limit = null,
        public int $offset = 0,
    ) {}
}