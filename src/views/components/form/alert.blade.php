@props([
    'title' => trans('index.form_validation'),
    'type' => 'html',
    'text' => implode('', $errors->all(':message<br>')),
    'category' => 'error',
])

@if ($errors->any())
    {{ $this->alert($category, $title, [$type => $text]) }}
@endif
