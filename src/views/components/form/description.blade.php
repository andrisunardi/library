@props([
    'class' => null,
    'id' => null,
    'key' => 'description',
    'title' => trans('validation.attributes.description'),
    'icon' => 'fas fa-file-lines',
    'minlength' => 1,
    'maxlength' => 65535,
    'rows' => null,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'disabled' => false,
    'helper' => null,
])

<x-components::form.textarea :class="$class" :key="$key" :title="$title" :icon="$icon" :minlength="$minlength"
    :maxlength="$maxlength" :rows="$rows" :required="$required" :label="$label" :autocapitalize="$autocapitalize" :autofocus="$autofocus"
    :disabled="$disabled" :helper="$helper" />
