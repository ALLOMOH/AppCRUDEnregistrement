<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Save Students</title>

        <link rel="shortcut icon" href="{{ asset('favicon_io/favicon.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="box-border">
        <header class="bg-white shadow-md">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-3 lg:px-8">
              <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashbord Student</h1>
            </div>
          </header>
        <main class="mx-auto max-w-7xl  px-4 py-6 sm:px-6 lg:px-8 container h-screenflex justify-center contents-center flex-col" >
            @livewire('etudiant-livewire')
        </main>
        @vite('resources/js/app.js')
        @livewireScripts
    </body>
</html>
