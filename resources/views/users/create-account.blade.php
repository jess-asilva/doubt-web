<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create-account.css') }}">
    <title>Cadastre-se</title>
</head>

<body>
    <x-header :rightText="'Junte-se à monitoria!'" />

    <x-auth-card :title="'CADASTRE-SE'" action="{{ route('post.createAccount') }}">
        <input type="text" name="name" placeholder="Nome" required autofocus><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="E-mail" required><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="rarm" placeholder="RA/RM" required><br>
        @error('rarm')
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
        <p>ou ir para <a href="{{ route('login') }}" class="sublinhado">Login</a></p>
    </x-auth-card>
</body>
</html>