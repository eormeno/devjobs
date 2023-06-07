@php
    $icon = $attributes->get('name');
@endphp
@switch($icon)
    @case('arrow')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
        </svg>
    @break

    @case('home')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
    @break

    @case('vision')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
    @break

    @case('researching')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="#888888" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path fill="#888888" d="M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v2"></path>
            <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01"></path>
        </svg>
    @break

    @case('dashboard')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
    @break

    @case('users')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m4-10a6 6 0 110-12 6 6 0 010 12zM8 9a3 3 0 11-6 0 3 3 0 016 0z">
            </path>
        </svg>
    @break

    @case('roles')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
        </svg>
    @break

    @case('mission')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
        </svg>
    @break

    @case('vision')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
        </svg>
    @break

    @case('values')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
        </svg>
    @break

    @case('about')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
        </svg>
    @break

    @case('contact')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
            </path>
        </svg>
    @break

    @case('history')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
            </path>
        </svg>
    @break

    @case('gallery')
        <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
            </path>
        </svg>

        @default
            <svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
                </path>
            </svg>
    @endswitch
