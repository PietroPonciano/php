<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="pipoca.png">
    <title>CineMatch</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

   
    <link rel="stylesheet" href="styleIND.css">
</head>
<body>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <form action="valida_login.php" method="post" class="w-100" style="max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
    <a href="createAccount.php" class='text-info'>Não possui uma conta? Clique aqui!</a>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>

        <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
            <div class="text-danger mt-3 text-center">
                Usuário ou senha incorretos.
            </div>
        <?php } ?>

        <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
            <div class="text-danger mt-3 text-center">
                Faça login antes de acessar as outras páginas.
            </div>
        <?php } ?>

        
    </form>
</div>

</body>
</html>
