<?php

namespace R3bzya\Helpers\Resources;

use BackedEnum;
use Illuminate\Http\Request;

/**
 * @mixin BackedEnum
 */
class BackendEnumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => enum_label($this->resource),
            'value' => $this->value,
        ];
    }
}
