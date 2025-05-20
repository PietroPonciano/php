<?php
session_start();

// Variáveis para controle da autenticação
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

// Caminho do arquivo JSON com os usuários
$arquivo = "../../CineMatch/usuarios.hd";

// Lê os dados do arquivo JSON
$usuarios_app = [];
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $usuarios_app = json_decode($conteudo, true);
}

$email_post = $_POST['email'] ?? '';
$senha_post = $_POST['senha'] ?? '';

// Autentica o usuário verificando email e senha
foreach ($usuarios_app as $user) {
    if ($user['email'] === $email_post && $user['senha'] === $senha_post) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
        $Usuario_global = $email_post;
        break;
    }
}

if ($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    $_SESSION['usuario_email'] = $Usuario_global;
    header('Location: home.php');
    exit;
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
    exit;
}
