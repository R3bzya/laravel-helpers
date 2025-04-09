<?php

namespace R3bzya\Helpers\Pages\Builder;

use R3bzya\Helpers\Pages\Page;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

abstract class AbstractPage
{
    public function __construct(
        protected readonly QueryBuilder $builder,
        protected readonly Request $request,
    ) {}

    abstract public function build(): Page;

    protected function getLimit(): int
    {
        return $this->request->has('pagination.limit')
            ? min($this->request->input('pagination.limit'), config('pagination.limit_max', 100))
            : config('pagination.limit_default', 15);
    }

    protected function getOffset(): int
    {
        return $this->request->has('pagination.offset')
            ? max(0, $this->request->input('pagination.offset', 0))
            : 0;
    }
}