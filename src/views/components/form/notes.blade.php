@props([
    'wire' => null,
    'class' => null,
    'id' => null,
    'key' => 'notes',
    'title' => trans('validation.attributes.notes'),
    'icon' => 'fas fa-file-lines',
    'minlength' => 1,
    'maxlength' => 65535,
    'rows' => null,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'readonly' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.textarea :wire="$wire" :class="$class" :key="$key" :title="$title" :icon="$icon" :minlength="$minlength"
    :maxlength="$maxlength" :rows="$rows" :required="$required" :label="$label" :autocapitalize="$autocapitalize" :autofocus="$autofocus"
    :readonly="$readonly" :disabled="$disabled" :helper="$helper" />
