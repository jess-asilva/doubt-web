<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartilhar imagem</title>
    <link rel="stylesheet" href="css/schedule.css">
</head>

<body>
    <header>
        <a href="homeADM.html" onclick="history.back();">
            <img class="arrow-back" src="img/voltar.png">
        </a>
        <img class="logo" src="img/LOGO-DOUBT-TCC.png">
    </header>
    
    <div class="container">
        <h2>ADICIONAR CALENDÁRIO</h2>
        <form id="calendar-form">
            <input type="text" id="title" placeholder="Nome do curso" required>
            <input type="text" id="turma" placeholder="Turma">
            <textarea id="description" placeholder="Descrição"></textarea>
            <div class="image-upload">
                <label for="image">Imagem</label>
                <input type="file" id="image" accept=".jpg, .jpeg, .png, .gif" required>
                <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%;">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <div class="container">
        <h2>CALENDÁRIOS</h2>
        <ul id="calendar-list"></ul>
    </div>

    <footer>
        <p>© 2023 DOUBT</p>
    </footer>

    <script src="js/addCalendario.js"></script>
    <script>
        document.getElementById('image').addEventListener('change', function () {
            var previewImage = document.getElementById('preview-image');
            var fileInput = document.getElementById('image');
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
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
