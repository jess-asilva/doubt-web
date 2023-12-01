<x-base-page :title="'Adicionar calendário'" :stylePath="'schedule.css'">
    @can('create-schedule')
    <div class="box-search">
        <div class="box">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill: #391959}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" /></svg>
            <!-- <form action="" method="get">
                <input class="input-seach" type="search" placeholder="Search">
            </form> -->
        </div>
    </div>
    <div class="div-monitoring-text">
        <h3>Monitoria Semanal<h3>
    </div>
    <div class="allign-form">
        <form id="calendar-form" action="{{ route('post.schedule') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="image-upload">
            <div class="testeIm">
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .gif" required>
                <label for="image">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#391959}</style><path d="M384 480h48c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224H144c-11.4 0-21.9 6-27.6 15.9L48 357.1V96c0-8.8 7.2-16 16-16H181.5c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8H416c8.8 0 16 7.2 16 16v32h48V160c0-35.3-28.7-64-64-64H298.5c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H87.7 384z"/></svg>
                </label>
                <input type="text" id="title" name="title" placeholder="TÍTULO" required>
                <button type="submit">ENVIAR</button>
            </div>
            <div class="preview-image-">
                <img id="preview-image" src="#" alt="Preview" style="display:none; max-width: 100%; width: 87%; margin-bottom: 0.5rem;">
                @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
            </div>
            @endif
            </div>
        </div>
    </div>
    </form>
    @endcan
    <div class="container">
        <ul id="calendar-list">
            @foreach($schedules as $schedule)
            <li>
                <div class="publication-container">
                    <div class="nameAndHour">
                        <div class="nameAndHour-title">
                            <h2>{{ $schedule->title }}</h2>
                        </div>
                    </div>
                    <div class="div-image-sche">
                        <div class="image-container">
                            <img src="{{ $schedule->image_url }}" alt="">
                        </div>
                    </div>
                    <div class="div-data">
                        <p>{{ \Carbon\Carbon::parse($schedule->updated_at)->format('d/m/Y - H:i:s') }}</p>
                    </div>
                <div class="div-button-delete">
                    @can('delete-schedule')
                    <form class = "form2" action="{{ route('delete.schedule', $schedule->id) }}" method="POST" class="d-inline-flex">
                        @method('DELETE')
                        @csrf
                        <input class="btnDelete" type="submit" value="Excluir">
                    </form>
                    @endcan
                </div>
            </div>
            </li>
            @endforeach
        </ul>
    </div>

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
</x-base-page>