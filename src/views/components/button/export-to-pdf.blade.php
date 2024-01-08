@props([
    'class' => null,
    'key' => 'exportToPdf',
    'text' => trans('index.export_to_pdf'),
    'icon' => 'fas fa-file-pdf',
    'color' => 'danger',
    'size' => 'sm',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
