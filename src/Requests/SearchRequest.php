<?php

namespace R3bzya\Helpers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            config('query-builder.parameters.sort') => ['sometimes', 'string'],
            config('query-builder.parameters.append') => ['sometimes', 'string'],
            config('query-builder.parameters.filter') => ['sometimes', 'array'],
            config('query-builder.parameters.filter') . '*' => ['required', 'string'],
            config('query-builder.parameters.include') => ['sometimes', 'array'],
            config('query-builder.parameters.include') . '.*' => ['required', 'string'],
            config('query-builder.parameters.fields') => ['sometimes', 'array'],
            config('query-builder.parameters.fields') . '*' => ['required', 'string'],
            'pagination.limit' => ['sometimes', 'required', 'integer', 'min:-1'],
            'pagination.offset' => ['sometimes', 'required', 'integer', 'min:0'],
        ];
    }
}