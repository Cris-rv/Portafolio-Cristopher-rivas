@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 py-2 border-b-4 border-indigo-400 dark:border-red-600 text-2xl font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 py-2 pt-1 border-b-4 border-transparent text-xl font-medium leading-5 text-gray-400 dark:text-gray-100 hover:text-white dark:hover:text-gray-400 hover:border-gray-300 dark:hover:border-red-600 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
