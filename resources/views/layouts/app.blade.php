<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tiny.cloud/1/sk6rqwdpvt6kkwknruhi8s6patw63716iw68xdud3vt6f9xh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans">
        <div class="min-h-screen bg-gray-100">
            
            @livewire('navbar')
            <!-- Page Content -->
            <main id='app'>
                {{ $slot }}
            </main>
        </div>
        @include('livewire.footer')
        @livewireScripts
        @stack('scripts')
    </body>
</html>
