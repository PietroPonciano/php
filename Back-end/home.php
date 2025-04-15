<?php 
require_once "valida_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Seu CSS opcional -->
    <link rel="stylesheet" href="styleHOM.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Sistema</a>
        <div class="ml-auto">
            <a href="logoff.php" class="btn btn-outline-light">Sair</a>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container text-center mt-5">
        <h1 class="display-4">Seja bem-vindo, usuário!</h1>
        <p class="lead">Você está logado com sucesso.</p>
    </div>

</body>
</html>
