<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
</head>

<body>

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
    <header class="purple-overlay">
        <img class="logo" src="/img/LOGO-DOUBT-TCC.png" alt="Logo">

    </header>

    <h1> Sobre nós </h1>

    <p class="texto-estilizado"> Diante dos desafios frequentemente enfrentados por alunos na busca por informações e no resolução de dúvidas relacionadas à área de Análise e Desenvolvimento de Sistemas, um grupo de estudantes da Etec de Taboão da Serra identificou uma lacuna significativa na prontidão e organização dos recursos disponiveis para atender a essas necessidades
        Como resposta a essa questão, surgiu o Sistema Doubt. Ao avaliar a situação, constatou-se que a monitoria necessitava de uma plataforma que permitisse aos alunos acessarem informações sobre as aulas programadas, os instrutores designados para cada aula, bem como as datas agencadas
        Sendo assim, surgiu a ideia de unir esses desafios distintos e criar o Sistema Doubt O foco principal do sistema è resolver tanto a problematica relacionada à organização da monitoria quanto à dificuldade de acesso àgil e ordenado a recursos de estudo. </p>

    <p class="texto-estilizado">As principais funcionalidades do sistema são:</p>

    <p class="texto-estilizado">Grade de Estudos:</p>

    Os alunos podem acessar de maneira conveniente a grade de estudos do curso. Isso permite visualizar os tópicos e disciplinas que serão abordados, proporcionando uma visão clara da sequência de aprendizado.

    <p class="texto-estilizado">Calendario e Matérias:</p>

    O sistema disponibiliza um calendario detalhado contendo as datas das aulas as matérias que serão lecionadas e os professores responsáveis por cada sessão. Isso permite que os alunos se preparem adequadamente e estejam dientes das atividades programadas.

    <p class="texto-estilizado">Recursos de Estudo:</p>

    Doubt oferece uma seção dedicada a fornecer indicações de livros, documentações e recursos de estudo relevantes para os temas abordados no curso. Isso auxilia os alunos a aprofundarem seus conhecimentos.

    <p class="texto-estilizado">Forum de Dúvidas:</p>

    Uma plataforma interativa que possibilita cue alunos e professores interajam em um fórum dedicado a esclarecer dúvidas e discutir tópicos relacionados do curso. Essa ferramenta promove a colaboração e a resolução coletiva de questões acadêmicas.

</body>

</html>