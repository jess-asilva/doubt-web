<link rel="stylesheet" href="{{ asset('css/posts-list.css') }}">

<ul class="posts" id="posts">
    @foreach($publications as $publication)
    <x-content-card>
        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
            <style>
                svg {
                    fill: #391959
                }
            </style>
            <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
        </svg>
        <strong class="user-name">{{ $publication->user->name }}</strong>

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
