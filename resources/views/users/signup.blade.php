<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title>
</head>

<body>
    <section class="sessao">
        <h1>ADQUIRA O DOUBT</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="sessao_form" action="{{ route('post.signup') }}" method="POST">
            @csrf
            <label>Nome:</label>
            <input type="text" name="name" placeholder="digite seu nome">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Instituição:</label>
            <input type="text" name="institution" placeholder="intituição">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Telefone:</label>
            <input type="number" name="tel" placeholder="número de Telefone">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Email:</label>
            <input type="email" name="email" placeholder="digite seu email">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <!-- <textarea name="messagem" cols="30" rows="10"></textarea> -->
            <button type="submit">ENVIAR</button>
        </form>
    </section>
</body>

</html>