<aside class="sidebar">
    <header class="sidebar-header">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    </header>

    <a href="{{ route('home') }}" class="logo-button">
        <img src="img/LOGO-DOUBT-TCC.png" alt="Logotipo Doubt" />
    </a>

    <nav class="menu-buttons">
        <a href="{{ route('home') }}">
            <span>INÍCIO</span>
        </a>

        <a href="{{ route('get.doubts') }}">
            <span>DÚVIDAS</span>
        </a>

        <a href="{{ route('get.students') }}">
            <span>ALUNOS</span>
        </a>

        <a href="{{ route('get.monitors') }}">
            <span>MONITORES</span>
        </a>

        <a href="{{ route('get.schedule') }}">
            <span>CALENDÁRIOS</span>
        </a>

        <a href="{{ route('profile') }}">
            <span>PERFIL</span>
        </a>

        <div class="line"></div>

        <a href="{{ route('logout') }}">
            <span>SAIR</span>
        </a>
    </nav>
</aside>