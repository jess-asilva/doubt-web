<x-base-page :title="'Publicação'" :stylePath="'forumPosts.css'">
    <a class="return-btn" href="{{ route('home') }}">< Voltar</a>
    <x-post-card :$publication />
</x-base-page>