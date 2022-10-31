<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Logo -->
    <link rel="icon" href="{{ asset('images/logoalfa.png') }}" type="image/png" sizes="16x16" />
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased min-h-screen lg:flex" x-data="{ isOpen: false }">
    <button @click="isOpen = !isOpen"
        class="absolute p-1 bg-white border-2 rounded-full shadow-md sm:block focus:outline-none active:bg-emerald-400 left-3 top-10 border-white hover:bg-emerald-200 z-10">
        <svg x-bind:class="isOpen ? 'rotate-90' : '-rotate-90'" class="w-4 h-4 transition-all duration-1000 transform"
            style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
        </svg>
    </button>
    <x-sidebar />
    <div class="relative z-0 lg:flex-grow">
        <main>
            <x-navbar />
            {{ $slot }}
        </main>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            // Dropdown
            Alpine.data('dropdown', () => ({
                open: false,
                toggle(tab) {
                    this.open = !this.open;
                },
                activeClass: 'bg-emerald-400',
            }))
        })
    </script>
</body>

</html>
