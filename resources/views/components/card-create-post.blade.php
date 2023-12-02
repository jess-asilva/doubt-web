<link rel="stylesheet" href="{{ asset('css/card-create-post.css') }}">

<form action="{{ route('post.publication') }}" method="POST" class="create-post-form" enctype="multipart/form-data">
    <div class="post-info">
        <img src="{{ asset('img/icon-add.png') }}" alt="Ícone de adição de post">
        <h2 class="title">Adicione uma nova postagem</h2>
    </div>

    @csrf

    <div class="text-inputs">
        <input type="text" name="title" id="title" placeholder="Título..." required="required">

        <textarea name="content" placeholder="Publicação..." id="textarea" required="required"></textarea>
    </div>

    <div class="card-footer">
        <div class="icons">
            <button type="button" class="btnFileForm">
                <img src="img/img.svg" alt="Adicionar uma imagem" />
                <input type="file" id="imgUpload" name="image" accept=".jpg, .jpeg, .png, .gif*" style="display: none;">
            </button>

            <button type="button" class="btnFileForm">
                <img src="img/video.svg" alt="Adicionar um vídeo" />
                <input type="file" id="videoUpload" name="videoUpload" accept="video/*" style="display: none;">
            </button>

            <img id="imgPreview" class="preview-uploaded-image" style="display: none;" alt="Pré-visualização da imagem">
        </div>

        <button type="submit" class="submit-btn">Publicar</button>
    </div>
</form>