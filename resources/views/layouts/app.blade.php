<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Styles -->
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <livewire:styles/>
</head>
<body class="bg-gray-200">
    <header class="border-b border-gray-300">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    Website
                </a>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <ul class="flex ml-0 lg:ml-16 space-x-8 lg:mt-0">
                    <li><a href="/tournaments" class="hover:text-gray-400">Tournaments</a></li>
                    @auth()
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mx-auto my-16 px-4">
        @yield('content')
    </main>
<livewire:scripts />
</body>
</html>
