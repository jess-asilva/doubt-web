<x-base-page :title="'Perfil'" :stylePath="'profile.css'">
    <form class="profile-form" action="{{ route('patch.profile') }}" method="POST">
        @method('PATCH')
        @csrf
        <h1>PERFIL DO USUÁRIO</h1>

        <div class="user-data-input">
            <label for="name">NOME</label>
            <input type="text" id="name" name="name" class="form-control" required autofocus class="@error('name') is-invalid @enderror" value="{{ $user->name }}"><br>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="user-data-input">
            <label for="email">E-MAIL</label>
            <input type="email" id="email" name="email" class="form-control" required class="@error('email') is-invalid @enderror" value="{{ $user->email }}"><br>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="user-data-input">
            <label for="name">RA/RM: {{ $user->rarm }}</label><br>
        </div>

        <div class="user-data-input">
            <label for="password">Se quiser alterar a senha, <a href="{{ route('get.change-password') }}">clique
                    aqui</a>.
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="card-footer">
            <input class="submit-btn" type="submit" value="ALTERAR">
        </div>
    </form>
</x-base-page>