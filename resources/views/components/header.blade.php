<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header class="default-header">
    <img src="/img/LOGO-DOUBT-TCC.png" alt="Logotipo Doubt">

    @if (!empty($rightText))
    <h2>{{$rightText}}</h2>
    @endif
</header>