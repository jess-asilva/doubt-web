<x-base-page :title="'Home'" :stylePath="'home.css'">
    @can('create-publication')
        <div class="newPost">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </div>
            @endif

            <h1 class="title-home">Postagens</h1>

            <form action="{{ route('post.publication') }}" method="POST" class="formPost" id="formPost" enctype="multipart/form-data">
                <div class="infoUser">
                    <strong>{{ $loggedUser->name }}</strong>
                </div>
                @csrf
                <input type="text" name="title" id="title" placeholder="Título..." required="required">

                <textarea name="content" placeholder="Publicação..." id="textarea" required="required"></textarea>

                <div class="iconsAndButton">
                    <div class="icons">
                        <button type="button" class="btnFileForm">
                            <img src="img/img.svg" alt="Adicionar uma imagem" />
                            <input type="file" id="imgUpload" name="image" accept=".jpg, .jpeg, .png, .gif*" style="display: none;">
                        </button>

                        <button type="button" class="btnFileForm">
                            <img src="img/video.svg" alt="Adicionar um video" />
                            <input type="file" id="videoUpload" name="videoUpload" accept="video/*" style="display: none;">
                        </button>

                        <img id="imgPreview" class="preview-image" style="display: none; max-width: 100%;" alt="Pré-visualização da imagem">

                    </div>

                    <button type="submit" class="btnSubmitForm">Publicar</button>
                </div>
            </form>
        </div>
    @endcan

    <x-posts-list :publications="$publications" :loggedUser="$loggedUser" />

    <!-- Adicione esta seção no final do seu arquivo HTML -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imgUploadInput = document.getElementById('imgUpload');
            const imgPreview = document.getElementById('imgPreview');
            const videoUploadInput = document.getElementById('videoUpload');
            const videoPreview = document.getElementById('videoPreview');

            // Adicione um ouvinte de evento de clique para os ícones
            document.querySelectorAll('.btnFileForm').forEach(function(icon) {
                icon.addEventListener('click', function() {
                    // Encontrar o input de arquivo associado
                    const inputFile = this.querySelector('input[type="file"]');
                    if (inputFile) {
                        // Simular o clique no input de arquivo
                        inputFile.click();
                    }
                });
            });

            // Adicione um ouvinte de evento de alteração aos inputs de upload
            imgUploadInput.addEventListener('change', function() {
                previewFile(this, imgPreview);
            });

            videoUploadInput.addEventListener('change', function() {
                previewFile(this, videoPreview);
            });

            // Função para pré-visualizar o arquivo selecionado
            function previewFile(input, previewElement) {
                const file = input.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewElement.src = e.target.result;
                        previewElement.style.display = 'flex';

                        const imgPost = document.getElementById('imgPreview');
                        console.log(previewElement)
                        imgPost.src = e.target
                            .result; // Atribuir o valor de previewElement.src para imgPost.src

                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</x-base-page>
