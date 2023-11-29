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
        <h3>Em caso de dúvidas, não hesite, consulte o Doubt!</h3>
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
                    <p>Diante dos desafios frequentemente enfrentados por alunos na busca por informações e na resolução
                        de dúvidas relacionadas à área de Análise e Desenvolvimento de Sistemas, um grupo de estudantes
                        da Etec de Taboão da Serra identificou uma lacuna significativa na prontidão e organização dos
                        recursos disponíveis para atender a essas necessidades.<br>Como resposta a essa questão, surgiu
                        o Sistema Doubt. Ao avaliar a situação, constatou-se que a monitoria necessitava de uma
                        plataforma que permitisse aos alunos acessarem informações sobre as aulas programadas, os
                        instrutores designados para cada aula, bem como as datas agendadas.<br>Sendo assim, surgiu a
                        ideia de unir esses desafios distintos e criar o Sistema Doubt. O foco principal do sistema é
                        resolver tanto a problemática relacionada à organização da monitoria quanto à dificuldade de
                        acesso ágil e ordenado a recursos de estudo.</p>
                </div>
                <div class="content">
                    <h2>As principais funcionalidades do sistema são:</h2>
                </div>
                <div class="content">
                    <h2>Grade de Estudos:</h2>
                    <ul>
                        <li>Os alunos podem acessar de maneira conveniente a grade de estudos do curso. Isso permite
                            visualizar os tópicos e disciplinas que serão abordados, proporcionando uma visão clara da
                            sequência de aprendizado.</li>
                    </ul>
                </div class="content">
                <div class="content">
                    <h2>Calendário e Matérias:</h2>
                    <ul>
                        <li>O sistema disponibiliza um calendário detalhado contendo as datas das aulas, as matérias que
                            serão lecionadas e os professores responsáveis por cada sessão. Isso permite que os alunos
                            se preparem adequadamente e estejam cientes das atividades programadas.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Recursos de Estudo:</h2>
                    <ul>
                        <li>O Doubt oferece uma seção dedicada a fornecer indicações de livros, documentações e recursos
                            de estudo relevantes para os temas abordados no curso. Isso auxilia os alunos a aprofundarem
                            seus conhecimentos. </li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Fórum de Dúvidas:</h2>
                    <ul>
                        <li>Uma plataforma interativa que possibilita que alunos e professores interajam em um fórum
                            dedicado a esclarecer dúvidas e discutir tópicos relacionados ao curso. Essa ferramenta
                            promove a colaboração e a resolução coletiva de questões acadêmicas. </li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Fórum de Dúvidas:</h2>
                    <ul>
                        <li>Uma plataforma interativa que possibilita que alunos e professores interajam em um fórum
                            dedicado a esclarecer dúvidas e discutir tópicos relacionados ao curso. Essa ferramenta
                            promove a colaboração e a resolução coletiva de questões acadêmicas. </li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Benefícios do Doubt:</h2>
                </div>
                <div class="content">
                    <h2>Centralização e Organização:</h2>
                    <ul>
                        <li>O sistema unifica informações essenciais, permitindo que os alunos acessem facilmente
                            detalhes das aulas, datas de monitoria e recursos de estudo em um só lugar.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Orientação no Estudo:</h2>
                    <ul>
                        <li>Os alunos podem planejar seu aprendizado de forma mais eficaz, sabendo antecipadamente quais
                            tópicos serão abordados e quais recursos são recomendados.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Interação Significativa:</h2>
                    <ul>
                        <li>Fórum de dúvidas promove uma comunidade interativa em que alunos e professores podem
                            colaborar para esclarecer questionamentos e compartilhar conhecimentos.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Economia de Tempo:</h2>
                    <ul>
                        <li>Ao concentrar informações relevantes e recursos de estudo em uma plataforma, o sistema
                            economiza o tempo dos alunos na busca por informações dispersas.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Aprimoramento da Experiência Educacional:</h2>
                    <ul>
                        <li>Através do acesso a informações organizadas e ferramentas de interação, o sistema contribui
                            para uma experiência de aprendizado mais rica e eficiente.</li>
                    </ul>
                </div>
                <div class="content">
                    <p>O Doubt visa preencher uma lacuna importante na jornada de aprendizado, oferecendo uma solução
                        unificada e acessível para facilitar o estudo e solucionar dúvidas. </p>
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