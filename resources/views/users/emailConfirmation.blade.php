<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Confirme seu e-mail</title>
    <link rel="stylesheet" href="{{ asset('css/forgotPassword.css') }}">
</head>

<body>
    <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">
    </header>
    @csrf
    <form action="{{ route('get.login') }}" method="get"><br>
        <legend>Confirme seu e-mail!</legend><br>
        <p>Acabamos de enviar um e-mail para você. Caso não encontre nosso e-mail na caixa de entrada, por favor
            verifique a caixa de spam ou <a href="{{ route('get.forgotPassword') }}" class="sublinhado">envie
                novamente</a></p>
        <br>
        <input type="submit" value="ENTRAR">
    </form>
</body>

</html>