@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium font-bold my-2 uppercase text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
