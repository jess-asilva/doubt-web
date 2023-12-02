<x-mail::message>

   # Mensagem de {{ $data['name'] }}

   ## Telefone: {{ $data['telPhone'] }}<br> 
   ## Email: {{ $data['email'] }}<br> 
   ## Instituição: {{ $data['institution'] }} <br>
   ## Mensagem: {{ $data['subject'] }} <br> 
    
<x-mail::button :url="'https://br.pinterest.com/'">
    Acesse o site clicando aqui:
</x-mail::button>

## Obrigado,<br>
## {{ config('app.name') }}
</x-Mail::message>