<?php 
  require_once "validador_acesso.php";
  require "../../CineMatch/api.php";

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

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require "navbar.php"; ?>


    <!-- Conteúdo principal -->
    <div class="container text-center mt-5">
        <h1 class="display-4">Seja bem-vindo, <?=$_SESSION['usuario_email'] ?>!</h1>
    </div>


    <div class="container mt-5">
    <h2 class="mb-4">Filmes Populares</h2>
    <div class="row">
        <?php foreach($filmes as $filme): ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="https://image.tmdb.org/t/p/w500<?= $filme['poster_path'] ?>" class="card-img-top" alt="<?= $filme['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $filme['title'] ?></h5>
                        <p class="card-text"><?= substr($filme['overview'], 0, 100) ?>...</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>