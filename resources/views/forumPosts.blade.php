<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forumPosts.css') }}">
</head>

<body>
    <div id="post-container">
        <div id="post-text">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#391959}</style><path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/></svg>USUÁRIO</a>
        </div>
        <div>
            <p>Galileu propõe a renovação da ciência de sua época abandonando a confiança na autoridade, no senso comum e na tradição. Busca uma ciência livre de tudo aquilo que a prende tanto a cultura como a teologia. Para ele os textos da tradição filosófica ou teológica não devem servir para responder as questões científicas. As questões científicas devem ser confirmadas ou refutadas através da experiência e da observação feitas diretamente sobre o objeto que está sendo examinado. Não podemos desprezar o conhecimento que a natureza nos oferece de forma direta em benefício de textos sagrados ou filosóficos que discordam dessa observação.</p>
        </div>
        <div id="comment-section">
            <div class="comment-form">
                <textarea id="new-comment" placeholder="Adicione um comentário..."></textarea>
                <button class="btn-comment"onclick="addComment()">Comentar</button>
            </div>
        </div>
    </div>
    <script>
        function addComment() {
            var newCommentText = document.getElementById("new-comment").value;
            var newComment = document.createElement("div");
            newComment.className = "comment";
            newComment.innerHTML = "<p><strong>USUÁRIO:</strong> " + newCommentText + "</p>";
            var commentSection = document.getElementById("comment-section");
            commentSection.insertBefore(newComment, commentSection.firstChild);
            document.getElementById("new-comment").value = "";
        }
    </script>
</body>

</html>
