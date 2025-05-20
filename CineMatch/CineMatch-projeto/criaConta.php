<?php

// Caminho do arquivo de dados
$arquivo = "../../CineMatch/usuarios.hd";

// Lê os dados existentes do arquivo
$usuarios_app = [];
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $usuarios_app = json_decode($conteudo, true);
}

// Pega os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

function emailExisteOuCria($email, $senha, &$usuarios_app, $arquivo) {
    foreach ($usuarios_app as $usuario) {
        if ($usuario['email'] === $email) {
            header('Location: createAccount.php?signup=erro3');
            exit;
        }
    }

    $ids = array_column($usuarios_app, 'id');
    $novo_id = empty($ids) ? 1 : max($ids) + 1;

    $usuarios_app[] = array(
        'id' => $novo_id,
        'email' => $email,
        'senha' => $senha, 
        'perfil_id' => 2
    );

    // Salva no arquivo novamente em formato JSON
    file_put_contents($arquivo, json_encode($usuarios_app, JSON_PRETTY_PRINT));

    return true;
}


emailExisteOuCria($email, $senha, $usuarios_app, $arquivo);


header('Location: createAccount.php?signup=sucesso');
exit;
