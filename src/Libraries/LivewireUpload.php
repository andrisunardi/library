<?php

namespace Andrisunardi\Library\Libraries;

use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class LivewireUpload
{
    public static function upload(
        ?TemporaryUploadedFile $file,
        string $name = null,
        string $disk = 'images',
        string $directory = 'others',
        string $checkAsset = null,
        string $fileAsset = null,
        bool $deleteAsset = false,
        bool $useWebp = true,
    ): ?string {
        $fileName = now()->format('Y-m-d-H-i-s');

        if ($name) {
            $fileName = Str::slug($name) . '-' . now()->format('Y-m-d-H-i-s');
        }

        if (!$file) {
            if ($checkAsset) {
                $fileName = "{$fileName}." . File::extension($fileAsset);

                File::copy(
                    public_path("{$disk}/{$directory}/{$fileAsset}"),
                    public_path("{$disk}/{$directory}/{$fileName}"),
                );

                return $fileName;
            }

            return null;
        }

        if ($checkAsset && $deleteAsset) {
            File::delete(public_path("{$disk}/{$directory}/{$fileAsset}"));
        }

        $extensionImages = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        if ($file->extension() == 'webp' || !in_array($file->extension(), $extensionImages)) {
            $useWebp = false;
        }

        if ($useWebp) {
            $fileName = "{$fileName}.webp";
            Webp::make($file)->quality(70)->save(Storage::disk($disk)->path("{$directory}/{$fileName}"));
        } else {
            $fileName = "{$fileName}.{$file->extension()}";
            $file->storePubliclyAs($directory, $fileName, $disk);
        }

        return $fileName;
    }
}
