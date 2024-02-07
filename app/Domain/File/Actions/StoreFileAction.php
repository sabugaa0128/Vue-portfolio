<?php

namespace App\Domain\File\Actions;

use App\Domain\File\Models\File;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class StoreFileAction
{
    public function __invoke(UploadedFile $file): File
    {
        $img = Image::make($file)->encode();

        $dir = app()->environment('local')
            ? 'testing/'
            : 'production/';

        $path = $file->hashName(path: $dir . 'categories');

        Storage::disk('s3')
            ->put($path, $img, 'public-read');

        return File::create([
            'blog_id' => 1,
            'path' => Storage::disk('s3')->url($path),
        ]);
    }
}
