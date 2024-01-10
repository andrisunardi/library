@props([
    'class' => null,
    'id' => null,
    'key' => 'address',
    'title' => trans('validation.attributes.address'),
    'icon' => 'fas fa-location-dot',
    'type' => 'text',
    'minlength' => 1,
    'maxlength' => 255,
    'required' => false,
    'label' => true,
    'autocapitalize' => 'on',
    'autofocus' => false,
    'disabled' => false,
    'helper' => null,
])

@if ($type == 'text')
    <x-components::form.input :class="$class" :id="$id" :key="$key" :title="$title" :icon="$icon"
        :type="$type" :min="$min" :max="$max" :minlength="$minlength" :maxlength="$maxlength" :required="$required"
        :label="$label" :autocapitalize="$autocapitalize" :autofocus="$autofocus" :disabled="$disabled" :helper="$helper" />
@endif

@if ($type == 'textarea')
    <x-components::form.textarea :class="$class" :key="$key" :title="$title" :icon="$icon"
        :minlength="$minlength" :maxlength="$maxlength" :rows="$rows" :required="$required" :label="$label"
        :autocapitalize="$autocapitalize" :autofocus="$autofocus" :disabled="$disabled" :helper="$helper" />
@endif
