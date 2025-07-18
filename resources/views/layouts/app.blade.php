<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SkillVerse') }} | @yield('title')</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/favicon-skillverse.png') }}">
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <!-- NProgress CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" />
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EMTH70W7TG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EMTH70W7TG'); // Ganti dengan ID milikmu

    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" x-data="{ collapsed: false }">
    @include('layouts.navigation')
    <div class="flex pt-20 transition-all duration-300 ease-in-out">
        <!-- Sidebar -->
        <div id="sidebar" :class="collapsed ? 'w-16' : 'w-64 h-screen overflow-y-auto'" x-data="{ open: false }"
            @mouseenter="if (collapsed) open = true" @mouseleave="if (collapsed) open = false"
            class="fixed top-0 left-0 min-h-screen pt-16 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 transition-all duration-300 z-40 border-r">
            @include('layouts.sidebar.menu')
        </div>

        <!-- Main Content -->
        <div id="main-content" :class="collapsed ? 'ml-16' : 'ml-64'" class="flex-1 p-0 transition-all duration-300">
            <header>
                <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            {{ $slot }}
        </div>
    </div>

    <!-- NProgress JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
    <script>
        // Mulai saat halaman mulai dimuat
        NProgress.start();

        // Selesai saat halaman sudah siap
        window.addEventListener('load', () => {
            NProgress.done();
        });

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const labels = document.querySelectorAll('.sidebar-label');
            const mainContent = document.getElementById('main-content');

            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-16');

            mainContent.classList.toggle('ml-64');
            mainContent.classList.toggle('ml-16');

            labels.forEach(label => {
                label.classList.toggle('hidden');
            });
        }

        function toggleDropdown(id) {
            const menu = document.getElementById('submenu-' + id);
            const arrow = document.getElementById('arrow-' + id);
            menu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }

        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 10) {
                navbar.classList.remove('bg-white');
                navbar.classList.add('bg-transparent', 'dark:bg-gray-900', 'shadow', 'backdrop-blur-md',
                    'border-b',
                    'border-gray-200', 'dark:border-gray-700');
            } else {
                navbar.classList.remove('bg-transparent', 'dark:bg-gray-900', 'shadow', 'backdrop-blur-md',
                    'border-b', 'border-gray-200', 'dark:border-gray-700');
                navbar.classList.add('bg-white');
            }
        });

    </script>

</body>

</html>
