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
       
        <select name="Turma">  
        <option value="volvo">3ºA</option>  
        <option value="saab">3ºB</option>  
        <option value="fiat">3ºC</option>  
        <option value="audi">3ºD</option></select> 

        <input type="submit" value="CADASTRAR">
        
    </form>
</body>

</html>