<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOUBT</title>
    <link rel="stylesheet" href="{{ asset('css/promotion.css') }}">
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
        <section>
            <div class="section-column">
                <div class="section-column-first">
                    <div class="section-column-phrase">
                        <h1>Em caso de dúvidas, não hesite, consulte o Doubt!</h1>
                    </div>
                    <div>
                        <p class="section-column-text">O Doubt é a chave para a dificuldade em matérias do seu curso. Em
                            momentos de crise, sempre procuramos ajuda em locais confiáveis e seguros, aqui você
                            encontra tudo isso!</p>
                    </div>
                    <div>
                        <button class="button-knowmore" onclick="scrollDown()">SAIBA MAIS</button>
                    </div>
                </div>
                <div class="section-column-second">
                    <iframe class="iframe" src="https://www.youtube.com/embed/w_vi-JX9euQ?si=Dqvlr8dOZyEWCJCd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <div class="div-text-advantages">
            <div>
                <p class="div-text-">Principais vantagens do sistema:</p>
            </div>
        </div>
        <div class="div-description">
            <div class="div-description-">
                <div class="div-description-row">
                    <a class="div-description-bubbles">
                        <img src="../img/1.png" alt="">
                        <p>Mantenha registro dos monitores.</p>
                    </a>
                </div>
                <div class="div-description-row">
                    <a class="div-description-bubbles">
                        <img src="../img/3.png" alt="">
                        <p>Material de estudo digital.</p>
                    </a>
                </div>
                <div class="div-description-row">
                    <a class="div-description-bubbles">
                        <img src="../img/2.png" alt="">
                        <p>Fórum de dúvidas 24 horas.</p>
                    </a>
                </div>
                <div class="div-description-row">
                    <a class="div-description-bubbles">
                        <img src="../img/4.png" alt="">
                        <p>Organização e ambiente de reforço escolar.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="div-text-enhance-experience">
            <div>
                <p class="div-text-">Aprimore a experiência estudantil de seus alunos!</p>
            </div>
        </div>
        <section class="section-form" id="scrolling">
            <div class="div-form">
                <div>
                    <form action="{{ route('post.doubts') }}" method="post">
                        @csrf
                        <h1 class="div-text-acquired">ADQUIRA O DOUBT:</h1>
                        <div class="row">
                            <div class="column">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Nome:" required>
                                    @error('name')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="input-group">
                                    <input type="text" name="institution" placeholder="Instituição:" required>
                                    @error('institution')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <input type="tel" name="telPhone" placeholder="Número:(xx)xxxxxxxxx" required>
                                    @error('telPhone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="E-mail:" required>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-group">
                                    <textarea name="subject" placeholder="Assunto:" id="" cols="30" rows="10" required></textarea>
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="checkbox">
                                    <a class="cheackbox-text" href="">Eu concordo em receber comunicações...</a>
                                </div>
                            </div>
                        </div>
                        <div class="row row_">
                            <button class="button-enviar" id="submit">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
    <script>
        function scrollDown() {
            const scrolling = document.getElementById('scrolling');
            const destinationPosition = scrolling.offsetTop;
            window.scrollTo({
                top: destinationPosition,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>