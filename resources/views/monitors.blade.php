<x-base-page :title="'Monitores'" :stylePath="'monitors.css'">
    <x-page-info :title="'Monitores'" :description="'Lista de todos os monitores cadastrados.'" />
    
    <div class="box-search">
        <div class="box">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #391959
                    }
                </style>
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
            <form action="{{ route('get.monitors') }}" method="get">
                <input type="search" name="search" placeholder="Search">
            </form>
        </div>
    </div>

    @foreach($monitors as $monitor)
    <section>
        <div class="container">
            <div class="row">
                <a class="row-organized" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #391959
                            }
                        </style>
                        <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320H224c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3h64c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z" />
                    </svg>{{ $monitor->name }}</a>
                <form action="{{ route('delete.user', $monitor->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-arquive" id="submit"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path fill="#391959" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="row2">
                <button class="button" id="submit">
                    <a href="{{ route('change-role', ['userId' => $monitor->id, 'role' => 'Aluno']) }}">TORNAR ALUNO</a>
                </button>
            </div>
            <div class="row-text-cadastro">
                <p>
                    Cadastro realizado em: 
                    <strong>{{ \Carbon\Carbon::parse($monitor->created_at)->format('d/m/Y H:i:s') }}</strong>
                </p>
            </div>
        </div>
    </section>
    @endforeach
</x-base-page>