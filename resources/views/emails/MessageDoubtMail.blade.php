<h1>Nova mensagem</h1>


<x-mail::message>

    Mensagem de  {{ $data['name'] }}

    <p>Telefone: <strong>{{ $data['telPhone'] }}</strong></p> <br>
    <p>Email: <strong>{{ $data['email'] }}</strong></p> <br>
    <p>Instituição <strong>{{ $data['email'] }}</strong></p> <br>
    <p>
        Mensagem:<br>
        {{ $data['subject'] }}
    </p>


<x-mail::button :url="'https://br.pinterest.com/'">
    Acesse o site clicando aqui:
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-Mail::message>