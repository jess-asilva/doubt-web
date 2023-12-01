<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/base-page.css') }}">
        <link rel="stylesheet" href="{{ asset('css/'.$stylePath) }}">
        <title>{{ $title }}</title>
    </head>

    <body class="base-page-body">
        <x-menu />

        <main class="base-page-main">
            {{ $slot }}
        </main>

        <x-footer />
    </body>
</html>
