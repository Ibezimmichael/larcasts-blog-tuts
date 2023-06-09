@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-5 hover:bg-gray-300 focus:bg-gray-300';
    if ($active) $classes .= 'bg-green-500 text-gray-900';
@endphp
<a {{ $attributes(['class' => $classes])}}>{{$slot}}</a>
