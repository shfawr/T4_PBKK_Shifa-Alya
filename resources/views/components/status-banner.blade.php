@props([
    'type' => 'info'
])

@php
    $classes = [
        'success' => 'alert alert-success',
        'warning' => 'alert alert-warning',
        'error'   => 'alert alert-danger',
        'info'    => 'alert alert-secondary',
    ];

    $class = $classes[$type] ?? $classes['info'];
@endphp

<div class="{{ $class }}" role="alert">
    {{ $slot }}
</div>