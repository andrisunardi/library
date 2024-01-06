@props([
    'class' => null,
    'id' => null,
    'key' => 'date',
    'title' => trans('validation.attributes.date'),
    'icon' => 'fas fa-calendar',
    'type' => 'date',
    'min' => null,
    'max' => null,
    'required' => false,
    'label' => true,
    'autofocus' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :min="$min" :max="$max" :required="$required" :label="$label" :autofocus="$autofocus"
    :disabled="$disabled" :helper="$helper" />
