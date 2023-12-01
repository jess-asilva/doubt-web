<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Home</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>

</head>

<body>
    <x-menu />

    <main class="main">
        <br>
        @can('create-publication')
        <div class="newPost">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif

            <div class="titleHome">
                <h1> Postagens </h1>
            </div>

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

<<<<<<< HEAD
                        <button type="button" class="btnFileForm">
                            <img src="img/video.svg" alt="Adicionar um video" />
=======
                        <button class="btnFileForm">
                            <img src="img/video.svg" alt="Adicionar um vídeo">
>>>>>>> 30c52aa (Pages' style)
                            <input type="file" id="videoUpload" name="videoUpload" accept="video/*" style="display: none;">
                        </button>

                        <img id="imgPreview" class="preview-image" style="display: none; max-width: 100%;" alt="Pré-visualização da imagem">

                    </div>

                    <button type="submit" class="btnSubmitForm">Publicar</button>
                </div>
            </form>
        </div>
        @endcan
        <ul class="posts" id="posts">
            @foreach($publications as $publication)
            <li class="post">
                <div class="infoUserPost">
                    <div class="imgUserPost"></div>

                    <div class="nameAndHour">
                        <strong>{{ $publication->user->name }}</strong>
                        <p>{{ \Carbon\Carbon::parse($publication->updated_at)->format('d/m/Y H:i:s') }}</p>
                    </div>
                </div>

                <h2>{{ $publication->title }}</h2>

                <img id="imgPreview" src="" alt="imagem publicação" />

                <p>{{ $publication->content }}</p>
                <img src="{{ $publication->image_url }}" alt="">
                <div class="actionBtnPost">
                    <button type="button" class="filesPost like">
                        @if(in_array($loggedUser->id, $publication->usersLike))
                        <a href="{{ route('unlike-publication', $publication->id) }}">
                            <img src="img/excl1.svg" alt="Curtir">Descurtir
                        </a>
                        @else
                        <a href="{{ route('like-publication', $publication->id) }}">
                            <img src="img/excl1.svg" alt="Curtir">Curtir
                        </a>
                        @endif
                    </button>
                    <button type="button" class="filesPost comment">
                        <a class="styleFont" href="{{ route('get.publication', $publication->id) }}">
                            <img src="img/deslik1.svg" alt="Comentar">Comentar
                        </a>
                    </button>
                </div>
            </li>
            @endforeach
        </ul>

    </main>

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


    <!-- <script type="module" src="js/FormPost.js"></script> -->
    <x-footer />
</body>

</html>
