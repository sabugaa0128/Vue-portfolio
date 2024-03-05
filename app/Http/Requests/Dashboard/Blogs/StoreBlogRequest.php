<?php

namespace App\Http\Requests\Dashboard\Blogs;

use Illuminate\Validation\Rule;
use App\Domain\Blog\Models\Blog;
use App\Domain\Blog\Models\Series;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('store', Blog::class);
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                Rule::unique(Blog::class, 'title'),
            ],
            'series_id' => [
                'nullable',
                'int',
                Rule::exists(Series::class, 'id')
            ],
            'slug' => [
                'nullable',
                'string',
                Rule::unique(Blog::class, 'slug'),
            ],
            'tags' => [
                'array',
                'exclude',
            ],
            'meta_title' => [
                'nullable',
                'required_if:is_draft,false',
                'string',
            ],
            'meta_description' => [
                'nullable',
                'required_if:is_draft,false',
                'string',
            ],
            'meta_tags' => [
                'nullable',
                'required_if:is_draft,false',
                'string',
            ],
            'content' => [
                'required_if:is_draft,false',
                'string',
            ],
            'is_draft' => [
                'required',
                'boolean'
            ]
        ];
    }
}
