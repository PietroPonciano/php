<?php
session_start();
$usuario_autenticado = false;
$usuarios = array(
    array('email' => 'teste1@gmail.com', 'senha' => '12345'),
    array('email' => 'teste2@gmail.com', 'senha' => '67890'),
    array('email' => 'teste3@gmail.com', 'senha' => 'abcde')
);


foreach($usuarios as $user){
    
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
   
}
if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
?>