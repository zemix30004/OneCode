{{-- @props(['color' => 'primary', 'size' => ''])

<a {{ $attributes->class([
    "btn btn-{$color}", ($size ? "btn-{$size}" : ''),
])->merge([
    'type' => 'button',
]) }}>
    {{ $slot }}
</a> --}}
<a {{ $attributes }}>
    <x-button size="sm">
        {{ $slot }}
    </x-button>
</a>


