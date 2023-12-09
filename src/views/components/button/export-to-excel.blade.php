@props([
    'class' => null,
    'key' => 'exportToExcel',
    'text' => trans('index.export_to_excel'),
    'icon' => 'fas fa-file-excel',
    'color' => 'success',
    'size' => 'sm',
    'width' => '100',
    'confirm' => false,
])

<x-components::button :class="$class" :key="$key" :text="$text" :icon="$icon" :color="$color"
    :size="$size" :width="$width" :confirm="$confirm" />
