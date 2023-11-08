<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Home</title>
</head>

<body>

    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="logo-img" src="img/LOGO-DOUBT-TCC.png" alt="" />
        </header>
        @csrf
        <nav>
            <button>
                <span>
                    <span>Forúm</span>
                </span>
            </button>

            <button>
                <span>
                    <span>Monitores</span>
                </span>
            </button>

            <button>
                <span>
                    <span>Alunos</span>
                </span>
            </button>

            <button>
                <span>
                    <span>Calendários</span>
                </span>
            </button>

            <button>
                <span>
                    <span>Dúvidas</span>
                </span>
            </button>

            <button>
                <span>
                    <span>Sair</span>
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

        <button>
            <span>
                <span class="mobile-text">Forúm</span>
            </span>
        </button>

        <button>
            <span>
                <span class="mobile-text">Monitores</span>
            </span>
        </button>

        <button>
            <span>
                <span class="mobile-text">Alunos</span>
            </span>
        </button>

        <button>
            <span>
                <span class="mobile-text">Calendários</span>
            </span>
        </button>

        <button>
            <span>
                <span class="mobile-text">Dúvidas</span>
            </span>
        </button>

        <button>
            <span>
                <span class="mobile-text">Sair</span>
            </span>
        </button>

    </nav>

    <main class="main">
        <h1>Pagina Inicial</h1>
        <span>
            <div class="filter-container">
                <input type="text" id="filter" class="filter" placeholder="Posts...">
            </div>

            <div id="posts-container"></div>

            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </span>

    </main>
    <script src="js/home.js"></script>
    <script src="js/script.js"></script>
</body>

</html>