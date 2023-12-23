@props([
    'class' => 'btn btn-sm btn-dark w-100',
    'text' => trans('index.print'),
    'icon' => 'fas fa-print',
    'href' => null,
    'target' => null,
    'navigate' => true,
])

<x-components::link :class="$class" :text="$text" :icon="$icon" :href="$href" :target="$target" :navigate="$navigate" />
