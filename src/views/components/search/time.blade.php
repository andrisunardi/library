@props([
    'class' => null,
    'id' => null,
    'key' => 'time',
    'title' => trans('validation.attributes.time'),
    'icon' => 'fas fa-clock',
    'type' => 'time',
    'step' => 1,
    'required' => false,
    'label' => true,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :step="$step" :required="$required" :label="$label" :disabled="$disabled" :helper="$helper" />
