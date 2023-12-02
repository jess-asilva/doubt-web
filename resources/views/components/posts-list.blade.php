<link rel="stylesheet" href="{{ asset('css/posts-list.css') }}">


<h1 class="posts-list-title">Todas as Postagens</h1>

<ul class="posts" id="posts">
    @foreach($publications as $publication)
    <x-content-card>
        <div class="user-info">
            <img src="{{ asset('img/icon-user.png') }}" alt="Ícone de usuário">
            <h2 class="user-name">{{ $publication->user->name }}</h2>
        </div>

        <h3 class="title">{{ $publication->title }}</h3>

        <p>{{ $publication->content }}</p>

        @if (!empty($publication->image_url))
        <img src="{{ $publication->image_url }}" alt="{{ $publication->title }}">
        @endif

        <div class="post-footer">
            <span>{{ \Carbon\Carbon::parse($publication->updated_at)->format('d/m/Y H:i:s') }}</span>

            <div class="action-buttons">
                @if(in_array($loggedUser->id, $publication->usersLike))
                <a href="#" class="unlike-btn" data-id="{{ $publication->id }}">
                    <img class="like-icon" src="{{ asset('img/icon-like-filled.png') }}" alt="Descurtir">
                    <span>Descurtir</span>
                </a>
                @else
                <a href="#" class="like-btn" data-id="{{ $publication->id }}">
                    <img class="like-icon" src="{{ asset('img/icon-like.png') }}" alt="Curtir">
                    <span>Curtir</span>
                </a>
                @endif

                <a href="{{ route('get.publication', $publication->id) }}">
                    <img src="{{ asset('img/icon-comment.png') }}" alt="Comentar">
                    <span>Comentar</span>
                </a>
            </div>
        </div>
    </x-content-card>
    @endforeach
</ul>
