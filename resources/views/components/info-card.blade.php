@props([
    'label',
    'value'
])

<div class="border rounded-3 p-3 bg-light h-100">
    <div class="text-muted small mb-1">
        {{ $label }}
    </div>

    <div class="fw-semibold">
        {{ $value }}
    </div>
</div>