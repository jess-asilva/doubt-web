<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Perfil</title>
</head>

<body>
    <x-menu />
    <!-- <header class="purple-overlay">
        <img class="logo" src="img/LOGO-DOUBT-TCC.png" alt="Logo">
    </header> -->
    <div class="div-form-profile">
        <div class="div-form-profile-">
            <form class="form" action="{{ route('profile') }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="div-profile-input">
                    <h1>PERFIL DO USUÁRIO</h1>
                </div>
                <div class="div-profile-input">
                    <label for="name">NOME</label>
                    <input type="text" id="name" name="name" class="form-control" required autofocus
                        class="@error('name') is-invalid @enderror" value="{{ $user->name }}"><br>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="div-profile-input">
                    <label for="email">E-MAIL</label>
                    <input type="email" id="email" name="email" class="form-control" required
                        class="@error('email') is-invalid @enderror" value="{{ $user->email }}"><br>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="div-profile-input">
                    <label for="name">RA/RM: {{ $user->rarm }}</label><br>
                    <!-- <input type="text" id="name" name="rarm" class="form-control" required class="@error('rarm') is-invalid @enderror"><br>
                    @error('rarm')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror -->
                </div>
                <div class="div-profile-input">
                    <label for="password">Se quiser alterar a senha, <a href="{{ route('get.change-password') }}">clique aqui</a>.
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="div-profile-input">
                    <p><input class="button-alterar" type="submit" value="ALTERAR"></p>
                </div>
            </form>
        </div>
    </div>
    <x-footer />
</body>

</html>