@props([
    'route'
])

<a href="{{ $route }}" {{ $attributes->class(['btn btn-icon btn-outline-warning']) }}>
    <x-icon.printer/>
</a>
