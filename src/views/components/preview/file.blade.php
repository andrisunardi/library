@props([
    'file' => null,
    'data' => null,
])

@php
    $fileUrl = null;

    if ($file) {
        $fileUrl = $file->temporaryUrl();
    } elseif ($data && $data->checkFile()) {
        $fileUrl = $data->assetFile();
    }
@endphp

@if ($fileUrl)
    <x-components::iframe :src="$fileUrl" :target="'_blank'" />

    <div class="row mt-3">
        <div class="col-6 col-md-auto">
            <x-components::link.view :class="'btn btn-primary btn-sm w-100'" :href="$fileUrl" :target="'_blank'" :navigate="false" />
        </div>

        <div class="col-6 col-md-auto">
            <x-components::link.download :class="'btn btn-info text-white btn-sm w-100'" :href="$fileUrl" />
        </div>

        @if ($fileUrl)
            <div class="col-12 col-md-auto mt-3 mt-lg-0">
                <x-components::button :key="'resetFile'" :text="trans('index.reset')" :icon="'fas fa-undo'" :color="'danger'"
                    :size="'btn-sm'" />
            </div>
        @endif
    </div>
@endif
