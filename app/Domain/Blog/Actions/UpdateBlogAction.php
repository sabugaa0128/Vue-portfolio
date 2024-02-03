<?php

namespace App\Domain\Blog\Actions;

use Illuminate\Support\Str;
use App\Domain\Blog\Models\Blog;
use App\Http\Requests\Dashboard\Blogs\UpdateBlogRequest;

class UpdateBlogAction
{
    public function __invoke(Blog $blog, UpdateBlogRequest $updateBlogRequest): Blog
    {
        $updateBlogRequest['slug'] = Str::slug($updateBlogRequest->input('slug'));

        $tags = collect($updateBlogRequest->input('tags'))->pluck('id');

        $blog->update([
            ...$updateBlogRequest->validated(),
        ]);

        $blog->tags()->sync($tags);

        return $blog;
    }
}
