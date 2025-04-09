<?php

namespace R3bzya\Helpers\Pages\Builder;

use R3bzya\Helpers\Pages\Page;
use R3bzya\Helpers\Pages\Pagination;

class OffsetPage extends AbstractPage
{
    public function build(): Page
    {
        $totalCount = $this->builder->count();

        $items = $this->builder
            ->offset($offset = $this->getOffset())
            ->limit($limit = $this->getLimit())
            ->get();

        return new Page(
            $items,
            new Pagination(
                $totalCount,
                $limit,
                $offset,
            )
        );
    }
}