@props(['type' => 'button'])

@php
    $classes =
        'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150';
@endphp

@switch($type)
    @case('button')
        <button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>{{ $title }}</button>
    @break

    @case('anchor')
        <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $title }}</a>
    @break

    @default
@endswitch
