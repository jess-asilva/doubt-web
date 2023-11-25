<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartilhar imagem</title>
    <link rel="stylesheet" href="css/schedule.css">
</head>

<body>
    <x-menu />

    <h2>ADICIONAR CALENDÁRIO</h2>
    <form id="calendar-form">
        <div class="image-upload">
            <div class="testeIm">
                <input type="file" id="image" accept=".jpg, .jpeg, .png, .gif" required>
                <label for="image">
                    <img src="img/icon.png" class="img-file" />
                </label>
                <input type="text" id="title" placeholder="TÍTULO" required>
                <button type="submit">ENVIAR</button>
            </div>
            <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%;">
        </div>

    </form>

    <div class="container">

        <ul id="calendar-list"></ul>
    </div>

    <x-footer />

</body>
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

</html>