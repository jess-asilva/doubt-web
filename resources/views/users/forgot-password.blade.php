<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Esqueceu a Senha</title>
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}">
</head>

<body>
    <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">
    </header>
    @csrf
    <!--<form action="forgot_password" method="post">-->
    <form action="{{ route('mail') }}" method="post">
        @csrf
        <legend>Esqueceu sua senha?</legend>
        <p>Para onde devemos enviar o link para redefinir sua senha?</p><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <p> <input type="submit" value="REDEFINIR SENHA"></p>
        <a href="{{ route('get.login') }}" class="sublinhado">Voltar para o Login </a> <br>

    </form>
</body>

</html>