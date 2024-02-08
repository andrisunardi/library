@props([
    'class' => null,
    'key' => 'exportToExcel',
    'text' => trans('index.export_to_excel'),
    'icon' => 'fas fa-file-excel',
    'color' => 'success',
    'size' => 'md',
    'width' => '100',
    'disabled' => false,
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :disabled="$disabled" :confirm="$confirm" />
