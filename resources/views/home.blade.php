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

        <h1 class="title-home">Postagens</h1><br>

        <form action="{{ route('post.publication') }}" method="POST" class="formPost" id="formPost" enctype="multipart/form-data">
            <div class="infoUser">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <style>
                        svg {
                            fill: #391959
                        }
                    </style>
                    <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                </svg>
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

            const likeButtons = document.querySelectorAll('.like-btn');
            const unlikeButtons = document.querySelectorAll('.unlike-btn');
            likeButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    const publicationId = this.getAttribute('data-id');
                    handleToggleLike(publicationId, this);
                });
            });

            unlikeButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    const publicationId = this.getAttribute('data-id');
                    handleToggleLike(publicationId, this);
                });
            });

            function handleToggleLike(publicationId, button) {
                const likeIcon = button.querySelector('.like-icon');

                if (button.classList.contains('like-btn')) {
                    httpRequest(`/publication/${publicationId}/like`, 'GET')
                        .then(() => {
                            if (likeIcon) {
                                likeIcon.src = "{{ asset('img/icon-like-filled.png') }}";
                            }
                            updateSpanText(button.querySelector('span'), 'Descurtir');
                            button.classList.remove('like-btn');
                            button.classList.add('unlike-btn');
                        })
                        .catch(error => {
                            console.error('Erro na requisição: ' + error);
                        });
                } else if (button.classList.contains('unlike-btn')) {
                    httpRequest(`/publication/${publicationId}/unlike`, 'GET')
                        .then(() => {
                            if (likeIcon) {
                                likeIcon.src = "{{ asset('img/icon-like.png') }}";
                            }
                            updateSpanText(button.querySelector('span'), 'Curtir');
                            button.classList.remove('unlike-btn');
                            button.classList.add('like-btn');
                        })
                        .catch(error => {
                            console.error('Erro na requisição: ' + error);
                        });
                }
            }

            function updateSpanText(span, text) {
                span.textContent = text;
            }

            function httpRequest(url, method) {
                return new Promise((resolve, reject) => {
                    const xhr = new XMLHttpRequest();
                    xhr.open(method, url, true);
                    xhr.setRequestHeader('Content-Type', 'application/json');

                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4) {
                            if (xhr.status === 200) {
                                resolve();
                            } else {
                                reject(xhr.statusText);
                            }
                        }
                    };

                    xhr.send();
                });
            }
        });
    </script>
</x-base-page>
