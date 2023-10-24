@props([
    'src' => null,
])

<iframe class="w-100" allowfullscreen src="{{ $src }}"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    @desktop height="300" @enddesktop @mobile height="200"
@endmobile>
</iframe>
