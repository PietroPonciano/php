<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar sangue</title>
</head>
<body>
    <?php 
    $nome = 'Pedro';
    $idade = 16;
    $peso = 60;

    if($idade >= 16 && $peso >= 50){
        $doar = 'Sim';
        
    }else{
        $doar = 'Nao';
    }?>

    <h1>Doar sangue</h1>
    <p> Nome: <?php echo $nome ?> <br>
    Idade: <?php echo $idade ?> <br> 
    Peso: <?php echo $peso ?> <br>
    Pode doar sangue: <?php echo $doar ?> <br></p>
    
</body>
</html>