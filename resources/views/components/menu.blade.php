<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: var(--font--);
}

:root {
    --color--logo--background: #3a238c;
    --color--text: #391959;
    --color--logo: #F29829;
    --font--: 'League Spartan', sans-serif;
}

alert {
    font-family: Arial, sans-serif;
    width: 100%;
    margin: auto;
    padding: 1em;
    float: left;
    display: block;
    margin-bottom: 10px;
    font-weight: 100;
    font-size: 16px;
  }
  
  .sidebar {
    position: fixed;
    top: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 200px;
    height: 100%;
    padding: 40px 10px 30px 30px;
    border-right: 1px solid #F29820;
    transition: all 0.35s;
    background-color: #3A238C;
  
  }
  
  .sidebar-header {
    width: 100%;
    margin-bottom: 10px;
  }
  
  .logo-img {
    width: 120px;
    min-width: 120px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.30s;
    margin-left: 5px;
    align-items: center;
    justify-items: center;
  }
  
  .logo-img:hover {
    transform: scale(1.5);
  }
  
  .sidebar button {
    height: 60px;
    background: transparent;
    border: 10px;
    font-family: inherit;
    font-weight: bold;
    color: #391959;
    cursor: pointer;
    text-align: left;
    padding: 0;
  }
  
  .sidebar button>span {
    display: inline-flex;
    align-items: center;
    height: 40px;
    width: 140px;
    padding: 0 60px 0 12px;
    border-radius: 10px;
    line-height: 1;
    transition: all 0.2s;
  }
  
  .sidebar button:hover>span {
    background-color: rgba(242, 124, 56, 0.3);
  }
  
  .sidebar button span {
    font-size: 16px;
  }
  
  .sidebar>nav {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    width: 100%;
  }
  
  
  .logo {
    width: 12%;
    margin-right: 20px;
    display: block;
  }
  
  .arrow-back {
    width: 40px;
    margin-right: 20px;
  }

body {
  position: relative;
  background-color: #dfdfdff6;
  font-family: Arial, sans-serif;
}

body {
  background-color: #dfdfdff6;
  -webkit-font-smothing: antialiased !important;

}

</style>

<aside class="sidebar">
    <header class="sidebar-header">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    </header>

    <a href="{{ route('home') }}" class="logo-button">
        <img src="{{ asset('img/LOGO-DOUBT-TCC.png') }}" alt="Logotipo Doubt">
    </a>

    <nav class="menu-buttons">
        <a href="{{ route('home') }}">
            <span>INÍCIO</span>
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
</aside>