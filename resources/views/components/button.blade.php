@props(['href' => '#', 'variant' => 'primary'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn '.$variant]) }}>{{ $slot }}</a>
