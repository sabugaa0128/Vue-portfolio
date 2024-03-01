<?php

namespace App\Domain\Blog\Actions;

use Illuminate\Support\Str;
use App\Domain\Blog\Models\Blog;
use App\Support\Cache\CacheKeys;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Dashboard\Blogs\UpdateBlogRequest;

class UpdateBlogAction
{
    public function __invoke(Blog $blog, UpdateBlogRequest $updateBlogRequest): Blog
    {
        if ($updateBlogRequest->has('slug')) {
            $slug = Str::slug($updateBlogRequest->input('slug'));
        } else {
            $slug = Str::slug($updateBlogRequest->input('title'));
        }

        $blog->update([
            ...$updateBlogRequest->validated(),
            'slug' => $slug,
            'published_at' => null
        ]);

        if ($updateBlogRequest->input('tags')) {
            $tags = collect($updateBlogRequest->input('tags'))->pluck('id');

            $blog->tags()->sync($tags);
        }

        $blog = app(CleanBlogContentAction::class)($blog);

        Cache::forget(CacheKeys::renderedBlogContent($blog));

        $blog->render();

        if (!$blog->isDraft()) {
            $blog->update([
                'published_at' => now()
            ]);
        }

        return $blog;
    }
}
