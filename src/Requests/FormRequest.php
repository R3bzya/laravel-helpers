<?php

namespace R3bzya\Helpers\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Support\Carbon;

class FormRequest extends BaseFormRequest
{
    public function carbon(string $field): Carbon|null
    {
        return $this->filled($field) ? Carbon::parse($this->input($field)) : null;
    }
}