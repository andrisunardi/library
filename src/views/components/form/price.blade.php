@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'price',
    'title' => trans('validation.attributes.price'),
    'icon' => 'fas fa-rupiah-sign',
    'type' => 'number',
    'min' => 1,
    'max' => 1000000000,
    'minlength' => 1,
    'maxlength' => 10,
    'required' => false,
    'label' => true,
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.input :wire="$wire" :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
    :type="$type" :min="$min" :max="$max" :minlength="$minlength" :maxlength="$maxlength" :required="$required"
    :label="$label" :autofocus="$autofocus" :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
