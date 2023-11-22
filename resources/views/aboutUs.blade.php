<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
</head>
<body>
    <header>
        <nav>
            <div>
                <img class="header-img" src="../img/MicrosoftTeams-image.png" alt="">
            </div>
            <div class="header-button">
                <a class="header-button-" href="{{ route('post.authenticate') }}">ENTRAR</a>
                <a class="header-button-" href="{{ route('get.createAccount') }}">CADASTRAR-SE</a>
            </div>
        </nav>
    </header>
    <main>
        
<!-- Essa parte do código é responsável por mostrar os erros fora do Formulário
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
-->

        <div class="container">
            <div class="block">
                <div class="">
                    <h1>Sobre nós</h1>
                </div>
                <div class="content">
                    <p>Diante dos desafios frequentemente enfrentados por alunos na busca por informações e na resolução de dúvidas relacionadas à área de Análise e Desenvolvimento de Sistemas, um grupo de estudantes da Etec de Taboão da Serra identificou uma lacuna significativa na prontidão e organização dos recursos disponíveis para atender a essas necessidades.<br>Como resposta a essa questão, surgiu o Sistema Doubt. Ao avaliar a situação, constatou-se que a monitoria necessitava de uma plataforma que permitisse aos alunos acessarem informações sobre as aulas programadas, os instrutores designados para cada aula, bem como as datas agendadas.<br>Sendo assim, surgiu a ideia de unir esses desafios distintos e criar o Sistema Doubt. O foco principal do sistema é resolver tanto a problemática relacionada à organização da monitoria quanto à dificuldade de acesso ágil e ordenado a recursos de estudo.</p>
                </div>
                <div class="content">
                    <h2>As principais funcionalidades do sistema são:</h3>
                </div>
                <div class="content">
                    <h2>Grade de Estudos:</h2>
                    <ul>
                        <li>Os alunos podem acessar de maneira conveniente a grade de estudos do curso. Isso permite visualizar os tópicos e disciplinas que serão abordados, proporcionando uma visão clara da sequência de aprendizado.</li>
                    </ul>
                </div class="content">
                <div class="content">
                    <h2>Calendário e Matérias:</h2>
                    <ul>
                        <li>O sistema disponibiliza um calendário detalhado contendo as datas das aulas, as matérias que serão lecionadas e os professores responsáveis por cada sessão. Isso permite que os alunos se preparem adequadamente e estejam cientes das atividades programadas.</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="div-button">
            <a class="button_" href="{{ route('index') }}">VOLTAR PARA O INICIO</a>
        </div>
    </main>
    <footer>
        <nav>
            <div class="footer-block">
                <a class="footer-block-text" href="{{ route('get.aboutUs') }}">Sobre nós</a>
                <a class="footer-block-text" href="{{ route('privacyPolicy') }}">Política de privacidade</a>
            </div>
            <div>
                <img class="header-img" src="../img/MicrosoftTeams-image.png" alt="">
             </div>
            </nav>
    </footer>
</body>
</html>