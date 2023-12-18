@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-test-color-500 focus:ring-test-color-500 rounded-md shadow-sm']) !!}>
