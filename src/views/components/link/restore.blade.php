@props([
    'class' => null,
    'text' => trans('index.restore'),
    'icon' => 'fas fa-trash-restore',
    'color' => 'success',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => false,
    'confirm' => trans('index.restore'),
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="$href" :target="$target" :button="$button" :navigate="$navigate" :confirm="$confirm" />
