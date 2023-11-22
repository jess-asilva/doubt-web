<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartilhar imagem</title>
    <link rel="stylesheet" href="css/schedule.css">
</head>

<body>
    <aside class="sidebar">
        <header class="sidebar-header">
            <img class="logo-img" src="img/LOGO-DOUBT-TCC.png" alt="" />
        </header>

        <nav>
            <button onclick="">
                <span>
                    <span class="mobile-text" name="forum"> <a href="{{ route('internetForum') }}">INÍCIO</a></span>
                </span>
            </button>

            <button onclick="">
                <span>
                    <span class="mobile-text"> <a href="{{ route('internetForum') }}">ENQUETES</a></span>
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



            <button onclick="redirecionar()">
                <span>
                    <span class="mobile-text"> <a href="{{ route('get.logout') }}">SAIR</a></span>
                </span>
            </button>
        </nav>

    </aside>


    <h2>ADICIONAR MONITORIA</h2>
    <form id="calendar-form">
        <input type="text" id="title" placeholder="Nome do curso" required>
        <div class="image-upload">
            <label for="image">Imagem</label>
            <input type="file" id="image" accept=".jpg, .jpeg, .png, .gif" required>
            <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%;">
        </div>
        <button type="submit">Enviar</button>
    </form>


    <div class="container">
        <h2>MONITORIA SEMANAL</h2>
        <ul id="calendar-list"></ul>
    </div>

    <footer>
        <p>© 2023 DOUBT</p>
    </footer>

    <script src="js/addCalendario.js"></script>
    <script>
    document.getElementById('image').addEventListener('change', function() {
        var previewImage = document.getElementById('preview-image');
        var fileInput = document.getElementById('image');
        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            previewImage.style.display = 'none';
        }
    });
    </script>
</body>

</html>