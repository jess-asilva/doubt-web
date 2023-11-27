<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="{{ asset('css/change-password.css') }}">
</head>

<body>
    <x-menu />
    <div class="div-purple">
        <div class="div-form">
            <form action="{{ route('patch.change-password') }}" method="POST">
                @method('PATCH')
                @csrf
                <h1 class="div-text-alterar">ALTERAR SENHA</h1>
                <div class="column">
                    <div class="input-group">
                        <input type="password" id="old_password" name="password" placeholder="senha atual" required class="@error('password') is-invalid @enderror">
                        @error('password') <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <input type="password" id="new_password" name="new_password" placeholder="nova senha" required class="@error('new_password') is-invalid @enderror">
                        @error('new_password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="repita nova senha" required class="@error('new_password_confirmation') is-invalid @enderror"><br>
                        @error('new_password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <button class="button-alterar" id="submit">ALTERAR</button>
                        <a href="{{ route('home') }}" class="btn btn-warning btn-lg mt-3">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <x-footer />
</body>

</html>