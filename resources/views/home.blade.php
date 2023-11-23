<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>Home</title>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>

</head>

<body>
    <x-menu />
    <main class="main">

        <div class="newPost">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif
            <div class="infoUser">
                <div class="imgUser"></div>
                <strong>{{ $loggedUser->name }}</strong>
            </div>

            <form action="{{ route('post.publication') }}" method="POST" class="formPost" id="formPost">
                @csrf
                <input type="text" name="title" id="textarea" placeholder="Título..." required="required">
                <textarea name="content" placeholder="Publicação..." id="textarea" required="required"></textarea>
                <div class="iconsAndButton">
                    <div class="icons">
                        <button class="btnFileForm">
                            <img src="img/img.svg" alt="Adicionar uma imagem">
                            <input type="file" id="imgUpload" name="imgUpload" accept="image/*" style="display: none;">
                        </button>

                        <button class="btnFileForm">
                            <img src="img/gif.svg" alt="Adicionar um gif">
                            <input type="file" id="gifUpload" name="gifUpload" accept="image/gif"
                                style="display: none;">
                        </button>

                        <button class="btnFileForm">
                            <img src="img/video.svg" alt="Adicionar um video">
                            <input type="file" id="videoUpload" name="videoUpload" accept="video/*"
                                style="display: none;">
                        </button>
                    </div>

                    <button type="submit" class="btnSubmitForm">Publicar</button>
                </div>
            </form>
        </div>

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
                <p>{{ $publication->content }}</p>

                <div class="actionBtnPost">
                    <button type="button" class="filesPost like"><img src="img/excl1.svg" alt="Curtir">Curtir</button>
                    <button type="button" class="filesPost comment"><img src="img/deslik1.svg"
                            alt="Comentar">Comentar</button>
                    <button type="button" class="filesPost report"><img src="img/report.svg"
                            alt="Denunciar">Denunciar</button>
                </div>
            </li>
            @endforeach
        </ul>

    </main>



    <!-- <script type="module" src="js/FormPost.js"></script> -->


</body>

</html>