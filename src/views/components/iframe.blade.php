@props([
    'id' => null,
    'class' => null,
    'src' => null,
    'allowfullscreen' => true,
    'frameborder' => 0,
    'scrolling' => false,
    'width' => '100%',
    'height' => '100%',
    'heightdesktop' => '500',
    'heightmobile' => '300',
    'allow' => 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share',
])

<iframe id="{{ $id }}" class="{{ $class }}" {{ $allowfullscreen ? 'allowfullscreen' : null }}
    src="{{ $src }}" allow="{{ $allow }}" frameborder="{{ $frameborder }}"
    scrolling="{{ $scrolling ? 'yes' : 'no' }}" width="{{ $width }}" @desktop
        height="{{ $heightdesktop }}" @enddesktop @mobile height="{{ $heightmobile }}"
    @endmobile>
</iframe>
