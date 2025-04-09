<?php

namespace R3bzya\Helpers\Resources;

class EmptyResource extends JsonResource
{
    public function __construct()
    {
        parent::__construct(resource: null);
    }
}