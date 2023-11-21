<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createAccount.css') }}">
    <title>Altere sua senha</title>
</head>

<body>
    <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">
    </header>
    <form action="{{ route('patch.changePassword') }}" method="POST">
        @method('PATCH')
        @csrf
        <legend>ALTERAR SUA SENHA</legend>


        <input type="text" id="old_password" name="password" placeholder="SENHA ATUAL" required><br>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password" name="password" class="form-control" placeholder="NOVA SENHA" required
            class="@error('password') is-invalid @enderror"><br>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
            placeholder="CONFIRMAR SENHA" required class="@error('password_confirmation') is-invalid @enderror"><br>
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="ALTERAR">
        <a href="{{ route('home') }}" class="btn btn-warning btn-lg mt-3">Voltar</a>

    </form>
</body>

</html>