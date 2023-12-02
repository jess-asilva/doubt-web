<aside class="sidebar" id="sidemenu">
    <header class="sidebar-header">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

        <script>
            document.body.onclick = function(e){
                if(~Array.from(e.target.classList).indexOf("btnExcluir")){
                    var indice_selecionado = parseInt(e.target.dataset.i);
                    alert(indice_selecionado);
                    Listar();
                }
            }

            

        </script>
    </header>

    <button type="button" id="sidemenu-btn">
        <img src="{{ asset('img/icon-menu.png') }}" alt="Ícone do botão que abre o menu lateral" />
    </button type="button">
    

    <div class="menu-wrapper">
        <a href="{{ route('home') }}" class="logo-button">
            <img src="{{ asset('img/LOGO-DOUBT-TCC.png') }}" alt="Logotipo Doubt" />
        </a>

        <nav class="menu-buttons">
            <a href="{{ route('home') }}">
                <span>POSTAGENS</span>
            </a>

            <a href="{{ route('get.doubts') }}">
                <span>DÚVIDAS</span>
            </a>

            @can('viewAny-user')
            <a href="{{ route('get.students') }}">
                <span>ALUNOS</span>
            </a>

            <a href="{{ route('get.monitors') }}">
                <span>MONITORES</span>
            </a>
            @endcan

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
    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('sidemenu-btn');
            const menu = document.getElementById('sidemenu');

            // Adicione um ouvinte de evento de alteração aos inputs de upload
            menuButton.addEventListener('click', function() {
                console.log('passando aqui')
                if (menu.classList.contains('opened')) {
                    menu.classList.remove('opened');
                } else {
                    menu.classList.add('opened');
                }
            });
        });
    </script>
</aside>