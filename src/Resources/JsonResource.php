<?php

namespace R3bzya\Helpers\Resources;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource as BaseJsonResource;
use R3bzya\Helpers\Pages\Page;

class JsonResource extends BaseJsonResource
{
    public static function page(Page $page): AnonymousResourceCollection
    {
        return static::collection($page->items)
            ->additional(['meta' => ['pagination' => $page->pagination]]);
    }
}