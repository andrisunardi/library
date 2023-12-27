@props([
    'class' => null,
    'id' => null,
    'key' => 'message',
    'title' => trans('validation.attributes.message'),
    'icon' => 'fas fa-chat',
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
