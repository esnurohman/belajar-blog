@props(['href', 'current' => false, 'arriaCurrent' => false])

@php
    // 
    
if ($current) {
    $classes = 'bg-gray-900 text-white';
    $arriaCurrent = 'page';
} else {
    $classes = 'text-gray-300 hover:bg-white/5 hover:text-white';
}
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' ." ". $classes, 'aria-current' => $arriaCurrent]) }}>
    {{ $slot }}
</a>