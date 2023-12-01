<link rel="stylesheet" href="{{ asset('css/posts-list.css') }}">

<ul class="posts" id="posts">
    @foreach($publications as $publication)
        <x-content-card>
            <h2 class="user-name">{{ $publication->user->name }}</h2>

            <h3 class="title">{{ $publication->title }}</h3>

            <p>{{ $publication->content }}</p>

            @if (!empty($publication->image_url))
                <img src="{{ $publication->image_url }}" alt="{{ $publication->title }}">
            @endif

            <div class="post-footer">
                <span>{{ \Carbon\Carbon::parse($publication->updated_at)->format('d/m/Y H:i:s') }}</span>

                <div class="action-buttons">
                    @if(in_array($loggedUser->id, $publication->usersLike))
                        <a href="{{ route('unlike-publication', $publication->id) }}">
                            <img src="{{ asset('img/icon-like-filled.png') }}" alt="Curtir">
                            <span>Descurtir</span>
                        </a>
                    @else
                        <a href="{{ route('like-publication', $publication->id) }}">
                            <img src="{{ asset('img/icon-like.png') }}" alt="Curtir">
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