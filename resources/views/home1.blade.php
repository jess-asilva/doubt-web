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
                    <span class="mobile-text" name="forum"> <a href="{{ route('internetForum') }}">FORÚM</a></span>
                </span>
            </button>

            <button onclick="">
                <span>
                    <span class="mobile-text"> <a href="{{ route('internetForum') }}">CADASTRO</a></span>
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
                    <span class="mobile-text"> <a href="{{ route('get.logout') }}">SAIR</a></span>
                </span>
            </button>
        </nav>

    </aside>

    <button class="button-mobile" onclick="toggleMenu()">
        <i class="material-symbols-outlined">menu</i>
        <span>Menu</span>
    </button>

    <nav class="menu-mobile" id="menu-mobile">
        <button onclick="toggleMenu()">
            <span>
                <i class="material-symbols-outlined">close</i>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text" name="forum">Forúm></a></span>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text">Cadastro</span>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text">Enquetes</span>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text">Alunos</span>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text">Monitores</span>
            </span>
        </button>

        <button onclick="redirecionarCalendario('/schedule')">
            <span>
                <span class="mobile-text">Calendários</span>
            </span>
        </button>


        <button onclick="redirecionar()">
            <span>
                <span class="mobile-text">Sair</span>
            </span>
        </button>

    </nav>

    <main class="main">

        <div class="newPost">
            <div class="infoUser">
                <div class="imgUser"></div>
                <strong>Isabella Araujo</strong>
            </div>

            <form action="" class="formPost" id="formPost" enctype="multipart/form-data">
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

        <ul class="posts" id="posts"></ul>
    </main>



    <script type="module" src="js/FormPost.js"></script>


</body>

</html>