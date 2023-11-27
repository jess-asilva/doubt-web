<aside class="sidebar">
    <header class="sidebar-header">
        <link rel="stylesheet" href="css/home.css">
        <a href="{{ route('home') }}"><img class="logo-img" src="img/LOGO-DOUBT-TCC.png" alt="" /></a>
    </header>

    <nav>
        <button onclick="">
            <span>
                <span class="mobile-text" name="forum"> <a href="{{ route('home') }}">INÍCIO</a></span>
            </span>
        </button>

        <button onclick="">
            <span>
                <span class="mobile-text"> <a href="{{ route('get.doubts') }}">DÚVIDAS</a></span>
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

        <button onclick="redirecionarCalendario()">
            <span>
                <span class="mobile-text"> <a href="{{ route('profile') }}">PERFIL</a></span>
            </span>
        </button>

        <button onclick="redirecionar()">
            <span>
                <span class="mobile-text"> <a href="{{ route('logout') }}">SAIR</a></span>
            </span>
        </button>
    </nav>

</aside>