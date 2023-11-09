<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Cadastre-se</title>
</head>

<body>
    
    <form action="#" method="post">
        @csrf
        <legend>CADASTRO DE MONITOR</legend>

        <input type="text" name="name" placeholder="Nome"><br>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="E-mail"><br>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" name="ra/rm" placeholder="RA/RM"><br>
        @error('ra/rm')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
       
        <label for="Turma">Turma:</label>
        <select name="Turma" id="Turma">  
        <option value="3A">3ºA</option>  
        <option value="3B">3ºB</option>  
        <option value="3C">3ºC</option>  
        <option value="3D">3ºD</option>
        </select> 

        <p><input type="submit" value="CADASTRAR"></p>
        
    </form>
</body>

</html>