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

    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="logo-img" src="img/LOGO-DOUBT-TCC.png" alt="" />
        </header>

        <nav>
            <button onclick="">
                <span>
                    <span class="mobile-text" name="forum"> <a href="{{ route('internetForum') }}">INÍCIO</a></span>
                </span>
            </button>

            <button onclick="">
                <span>
                    <span class="mobile-text"> <a href="{{ route('internetForum') }}">ENQUETES</a></span>
                </span>
            </button>

            <button onclick="">
                <span>
                    <span class="mobile-text"> <a href="{{ route('get.students') }}">ALUNOS</a></span>
                </span>
            </button>

            <button onclick="">
                <span>
                    <span> <a href="{{ route('get.monitors') }}">MONITORES</a></span>
                </span>
            </button>

            <button onclick="redirecionarCalendario()">
                <span>
                    <span class="mobile-text"> <a href="{{ route('get.schedule') }}">CALENDÁRIOS</a></span>
                </span>
            </button>

            <button onclick="redirecionar()">
                <span>
                    <span class="mobile-text"> <a href="{{ route('logout') }}">SAIR</a></span>
                </span>
            </button>
        </nav>

    </aside>

    <main class="main">

        <div class="newPost">
            <div class="infoUser">
                <div class="imgUser"></div>
                <strong>Isabella Araujo</strong>
            </div>

            <form action="{{ route('post.publication') }}" method="POST" class="formPost" id="formPost">
                @csrf
                <textarea name="textarea" placeholder="Publicação..." id="textarea"></textarea>
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
                        <strong>Isabella Araujo</strong>
                        <p>${time}</p>
                    </div>
                </div>
                <p>
                    {{ $publication->publication }}
                </p>

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