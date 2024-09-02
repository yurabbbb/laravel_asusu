@props(['color'=>'primary', 'size'=> ''] )

<button {{ $attributes->class([
        "btn btn-{$color}", ($size ? "btn-{$size}" : ''),
    ])->merge([  {{-- merge заменяет все аттрибуты, кроме class, class он добавляет --}}
        'type' => 'button',
    ])}} >
    {{ $slot }}
</button>