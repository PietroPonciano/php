<?php 
  require_once "validador_acesso.php";
  require "../../CineMatch/api.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="pipoca.png">
    <title>CineMatch</title>

   
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
    
    <div class="container mt-4 text-center">
    <div class="btn-group flex-wrap">
        <a href="?genero=" class="btn btn-outline-primary <?= !$genero ? 'active' : '' ?>">Todos</a>
        <?php foreach ($generos as $g): ?>
            <a href="?genero=<?= $g['id'] ?>" class="btn btn-outline-primary <?= $genero == $g['id'] ? 'active' : '' ?>">
                <?= $g['name'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>


<div class="container mt-5">
    <h2 class="mb-4">
        <?= $genero ? 'Filmes de ' . array_column($generos, 'name', 'id')[$genero] : 'Filmes Populares' ?>
    </h2>
    <div class="row">
        <?php foreach ($filmes as $filme): ?>
            <div class="col-md-3 mb-4">
                <a href="detalhes.php?id=<?= $filme['id'] ?>" style="text-decoration: none; color: inherit;">
    <div class="card h-100">
        <img src="https://image.tmdb.org/t/p/w500<?= $filme['poster_path'] ?>" class="card-img-top" alt="<?= $filme['title'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $filme['title'] ?></h5>
            <p class="card-text"><?= substr($filme['overview'], 0, 100) ?>...</p>
            <?php
                        $generos_do_filme = [];
                        foreach ($filme['genre_ids'] as $id) {
                            if (isset($generos_map[$id])) {
                                $generos_do_filme[] = $generos_map[$id];
                            }
                        }
                        ?>
            <p class="text-muted small"><?= implode(', ', $generos_do_filme) ?></p>
            <p class="text-primary">Nota: <?= number_format($filme['vote_average'], 1) ?>/10</p>
            
        </div>
    </div>
</a>

            </div>
        <?php endforeach; ?>
    </div>
</div>


</body>
</html>