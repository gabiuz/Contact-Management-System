@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal text-base capitalize text-gray-800']) }}>
    {{ $value ?? $slot }}
</label>
