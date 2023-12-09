@props([
    'class' => null,
    'id' => null,
    'key' => 'date',
    'title' => trans('validation.attributes.date'),
    'icon' => 'fas fa-calendar',
    'type' => 'date',
    'required' => false,
    'label' => true,
    'autofocus' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :required="$required" :label="$label" :autofocus="$autofocus" :disabled="$disabled" :helper="$helper" />
