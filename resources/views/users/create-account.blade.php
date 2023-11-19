<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create-account.css') }}">
    <title>Cadastre-se</title>
</head>

<body>
    <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">

        <h2>JUNTE-SE A MONITORIA!</h2>
    </header>
    <form action="{{ route('post.createAccount') }}" method="post">
        @csrf
        <legend>CADASTRE-SE</legend>

        <input type="text" name="name" placeholder="Nome" required autofocus><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="E-mail" required><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="ra/rm" placeholder="RA/RM" required><br>
        @error('ra/rm')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required class="@error('password') is-invalid @enderror"><br>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmar senha" required class="@error('password_confirmation') is-invalid @enderror"><br>
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="CRIAR CONTA">
        <p>ou ir para <a href="{{ route('get.login') }}" class="sublinhado">Login</a></p>

    </form>
</body>

</html>
