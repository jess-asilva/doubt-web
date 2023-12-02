<link rel="stylesheet" href="{{ asset('css/post-card.css') }}">

<x-content-card>
    <div class="user-info">
        <div>
            <img src="{{ asset('img/icon-user.png') }}" alt="Ícone de usuário">
            <h2 class="user-name">{{ $publication->user->name }}</h2>
        </div>

        <span>{{ \Carbon\Carbon::parse($publication->updated_at)->format('d/m/Y H:i:s') }}</span>
    </div>

    <h3 class="title">{{ $publication->title }}</h3>

    <p  class="content">{{ $publication->content }}</p>

    @if (!empty($publication->image_url))
        <img src="{{ $publication->image_url }}" alt="{{ $publication->title }}" class="image">
    @endif

    <div class="comment">
        <h4 class="title">Comentários</h3>

        @foreach($publication->replies as $reply)
            <div>
                <p><strong>{{ $reply->name }}:</strong> {{ $reply->comment }}</p>
                <span>{{ \Carbon\Carbon::parse($publication->updated_at)->format('d/m/Y H:i:s') }}</span>
            </div>
        @endforeach
    </div>

    <form class="comment-section" action="{{ route('post.reply', $publication->id) }}" method="POST">
        @csrf
        <textarea id="new-comment" name="comment" placeholder="Adicione um comentário..." required="required"></textarea>
        <input type="submit" class="comment-btn" value="Comentar">
    </form>
</x-content-card>