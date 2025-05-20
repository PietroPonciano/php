<?php
  require_once "validador_acesso.php";
  require "../../CineMatch/api.php";
  require "../../CineMatch/detalhesFilme.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($filme['title']) ?> - CineMatch</title>
    <link rel="icon" href="pipoca.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="detalhes.css">
</head>
<body>
    <?php require "navbar.php"; ?>

     <div class="container mt-5">
        <h1><?= htmlspecialchars($filme['title']) ?></h1>
        <p><strong>Nota:</strong> <?= number_format($filme['vote_average'], 1) ?>/10</p>
        <p><strong>Lançamento:</strong> <?= $filme['release_date'] ?></p>
        <p><strong>Sinopse:</strong> <?= $filme['overview'] ?: 'Sem sinopse disponível.' ?></p>
        <img src="https://image.tmdb.org/t/p/w500<?= $filme['poster_path'] ?>" class="img-fluid mt-3 mb-4" alt="Pôster de <?= htmlspecialchars($filme['title']) ?>">

        <?php if ($trailer): ?>
            <div class="mb-4">
                <h3>Trailer Oficial</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $trailer ?>" allowfullscreen></iframe>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($atores)): ?>
            <div class="mb-4">
                <h3>Elenco Principal</h3>
                <div class="row">
                    <?php foreach ($atores as $ator): ?>
                        <div class="col-md-2 col-sm-4 col-6 text-center mb-3">
                            <img src="https://image.tmdb.org/t/p/w185<?= $ator['profile_path'] ?>" alt="<?= $ator['name'] ?>" class="img-fluid rounded-circle mb-2" style="height: 120px; object-fit: cover;">
                            <p class="mb-0"><strong><?= $ator['name'] ?></strong></p>
                            <small class="text-muted">como <?= $ator['character'] ?></small>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>