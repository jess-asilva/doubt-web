<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <!-- Essa parte do código é responsável por mostrar os erros fora do Formulário
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
-->
    <header class="purple-overlay">
        <img class="logo" src="/img/LOGO-DOUBT-TCC.png" alt="Logo">

        <h2>SEJA BEM-VINDO!</h2>
    </header>
    <form class="sessao_form" action="{{ route('post.authenticate') }}" method="POST">
        @csrf
        <legend>LOGIN</legend>
        <input type="text" class="normal-input" name="rarm" placeholder="RA/RM"><br>
        @error('rarm')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" class="normal-input" name="password" placeholder="Senha"><br>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <p><a href="{{ route('get.forgotPassword') }}" class="nao-sublinhado">Esqueceu a senha?</a></p>
        <input type="submit" value="ENTRAR">
        <p>ou <a href="{{ route('get.createAccount') }}" class="sublinhado">Cadastre-se</a></p>
    </form>

</body>

</html>