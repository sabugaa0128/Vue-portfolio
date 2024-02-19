<?php

namespace Database\Factories\Domain\Blog\Models;

use Illuminate\Support\Str;
use App\Domain\Iam\Models\User;
use App\Domain\Blog\Models\Blog;
use App\Domain\Blog\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        $name = fake()->words(8, true);
        $slug = Str::slug($name);

        return [
            'author_id' => User::factory()->create()->id,
            'is_draft' => false,
            'title' => $name,
            'slug' => $slug,
            'meta_title' => fake()->text(20),
            'meta_description' => fake()->text(100),
            'meta_tags' => fake()->text(10),
            'content' => fake()->text(400),
            'published_at' => now()
        ];
    }

    public function configure(): self
    {
        return $this->afterCreating(function ($blog) {
            $comments = Comment::factory()->count(3)->create()->pluck('id');

            $blog->comments()->attach($comments);
        });
    }

    public function draft(): self
    {
        return $this->afterCreating(function ($blog) {
            $blog->update([
                'is_draft' => true
            ]);
        });
    }
}
