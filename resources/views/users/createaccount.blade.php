<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createAccount.css') }}">
    <title>Cadastre-se</title>
</head>

<body>
    <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">

        <h2>JUNTE-SE A MONITORIA!</h2>
    </header>
    <form action="#" method="post">
        @csrf
        <legend>CADASTRE-SE</legend>

        <input type="text" name="usuario" placeholder="Usuário"><br>
        @error('usuario')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="E-mail"><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="ra/rm" placeholder="RA/RM"><br>
        @error('ra/rm')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="senha" placeholder="Senha"><br>
        @error('senha')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" name="confirmarSenha" placeholder="Confirmar senha"><br>
        @error('confirmarSenha')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="CRIAR CONTA">
        <p>ou ir para <a href="{{ route('get.login') }}" class="sublinhado">Login</a></p>

    </form>
</body>

</html>