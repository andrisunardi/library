<?php

namespace Andrisunardi\Library\Libraries;

use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Support\Facades\Storage;

class AzureService
{
    public function upload($file, ?string $name = null, string $directory = 'other', bool $useWebp = true): string
    {
        $timeStamp = now()->format('Y-m-d-H-i-s');

        $extensionImages = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if ($file->extension() == 'webp' || ! in_array($file->extension(), $extensionImages)) {
            $useWebp = false;
        }

        if ($useWebp) {
            $fileName = "{$name}-{$timeStamp}.webp";

            $tmp = Storage::path("{$directory}/{$fileName}");

            Webp::make($file)->quality(70)->save($tmp);

            Storage::disk('azure')->putFileAs($directory, $tmp, $fileName);

            Storage::delete("{$directory}/{$fileName}");
        } else {
            $fileName = "{$name}-{$timeStamp}.{$file->extension()}";

            Storage::disk('azure')->putFileAs($directory, $file, $fileName);
        }

        Storage::delete("livewire-tmp/{$file->getFileName()}");

        return Storage::disk('azure')->url("{$directory}/$fileName");
    }
}
