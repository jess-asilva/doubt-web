<x-mail::message>
# NOVA MENSAGEM 

Mensagem de  Usuário teste

    <p>Telefone: <strong>Aqui ficará o telefone do Usuário</strong></p> <br>
    <p>Email: <strong>Aqui ficará o e-mail do Usuário</strong></p> <br>
    <p>Instituição <strong>A instituição do usuário</strong></p> <br>
    <p>
        Mensagem:<br>
        
    </p>



<x-mail::button :url="'https://pt.stackoverflow.com/'">
Acesse o site clicando aqui:
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
