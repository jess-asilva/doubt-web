<x-base-page :title="'Home'" :stylePath="'home.css'">
    <h1 class="home-title">Postagens</h1>
    <h2 class="home-subtitle">Aqui você encontrará postagens dos mais diversos assuntos feitas por professores e monitores!</h2>

    @can('create-publication')
    <div class="newPost">
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        </div>
        @endif

        <x-card-create-post :loggedUser="$loggedUser" />
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
