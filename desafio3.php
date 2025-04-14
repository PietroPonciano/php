<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php
    $lista_numeros = [];
    

    while(count($lista_numeros) < 6){
        $numero = rand(1, 60);
        
        if(!in_array($numero, $lista_numeros)){
            $lista_numeros[] = $numero;
        }
    }
    
    print_r($lista_numeros);
    
    ?>
</body>
</html>