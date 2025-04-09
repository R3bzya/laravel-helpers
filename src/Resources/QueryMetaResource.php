<?php

namespace R3bzya\Helpers\Resources;

use Illuminate\Http\Request;
use R3bzya\Helpers\Concerns\HasMeta;

class QueryMetaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $resourceUsesHasMeta = in_array(HasMeta::class, class_uses($this->resource));

        return [
            'allowed_filters' => $this->getAllowedAttributes($resourceUsesHasMeta, 'getAllowedFilters'),
            'allowed_sorts' => $this->getAllowedAttributes($resourceUsesHasMeta, 'getAllowedFilters'),
            'allowed_includes' => $this->getAllowedAttributes($resourceUsesHasMeta, 'getAllowedFilters'),
        ];
    }

    protected function getAllowedAttributes(bool $condition, string $method)
    {
        return $this->when($condition, fn() => $this->resource->{$method}(), []);
    }
}