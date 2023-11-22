<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link rel="stylesheet" href="{{ asset('css/privacyPolicy.css') }}">
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
        <div class="container">
            <div class="block">
                <div>
                    <h1>Politica de Privacidade</h1>
                </div>
                <div class="content">
                    <p>A Found considera a privacidade e a segurança como prioridades fundamentais e está empenhada em assegurar a transparência no tratamento de dados pessoais de nossos usuários e clientes. A presente Política de Privacidade estabelece os procedimentos relativos à coleta, utilização e compartilhamento de informações de clientes e demais indivíduos que acessem ou utilizem nosso site.<br>Ao utilizar nossos serviços, você está ciente de que coletaremos e empregaremos suas informações pessoais conforme descrito nesta Política, em conformidade com a Constituição Federal de 1988 (art. 5º, LXXIX; e o art. 22º, XXX – incluídos pela EC 115/2022), a Lei Geral de Proteção de Dados (LGPD, Lei Federal 13.709/2018), as disposições de defesa do consumidor da Lei Federal 8078/1990 e demais regulamentos brasileiros aplicáveis.<br>Portanto, o Doubt, na qualidade de Controladora de Dados, compromete-se a cumprir o disposto nesta Política de Privacidade:</p>
                </div>
                <div class="content">
                    <h2>Dado e finalidade:</h2>
                </div>
                <div class="content">
                    <ul>
                        <li>Nome: Para identificação e personalização do serviço;</li>
                        <li>Endereço de e-mail: Para comunicação e notificações;</li>
                        <li>Curso ou turma: Para fins de organização e atribuição de funções;</li>
                        <li>RA/RM: Confirmação de cadastro como discente em certa instituição;</li>
                        <li>Senha: Para acesso seguro à plataforma;</li>
                        <li>Endereço IP: para fins de segurança e identificação do dispositivo.</li>
                    </ul>
                </div>
                <div class="content">
                    <h2>Como coletamos os seus dados?</h2>
                </div>
                <div class="content">
                    <p>A coleta dos seus dados pessoais ocorre da seguinte forma:<br>É a partir do seu consentimento que tratamos os seus dados pessoais. O consentimento é a manifestação livre, informada e inequívoca pela qual você autoriza o Doubt a tratar seus dados.</p>
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
                <a class="footer-block-text" href="">Política de privacidade</a>
            </div>
            <div>
                <img class="header-img" src="../img/MicrosoftTeams-image.png" alt="">
            </div>
        </nav>
    </footer>
</body>
</html>