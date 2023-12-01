<link rel="stylesheet" href="{{ asset('css/auth-card.css') }}">

<form class="auth-card-form" $action method="POST">
    @csrf
    <legend>{{ $title }}</legend>

    {{ $slot }}
</form>