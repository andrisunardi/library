@props([
    'class' => null,
    'text' => trans('index.update'),
    'icon' => 'fas fa-edit',
    'color' => 'success',
    'size' => 'md',
    'width' => '100',
    'href' => null,
    'target' => null,
    'button' => true,
    'navigate' => true,
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :color="$color" :size="$size"
    :width="$width" :href="$href" :target="$target" :button="$button" :navigate="$navigate" />
