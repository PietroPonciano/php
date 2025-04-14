<html>

<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>

<body>
    <?php 
    
    function VerificaImposto($salario){
        if ($salario >= 1903.99 && $salario <= 2826.65){
            $resultado =  round(($salario*7.5/100), 2);

            return $resultado;
        }elseif($salario >= 2826.66 && $salario <= 3751.05){
            $resultado = round(($salario*15/100), 2);

            return $resultado;
        }elseif($salario >= 3751.06 && $salario <= 4664.68){
            $resultado =  round(($salario*22.5/100), 2);

            return $resultado;
        }elseif($salario >= 4664.68){
            $resultado = round(($salario*27.5/100), 2);

            return $resultado;
        }else{
            echo "Não tem imposto para pagar";
        }

    }?>
    <h1>Imposto de renda</h1>
    <p>Imposto a pagar: <?= VerificaImposto(3751.06) ?></p>
    
    
</body>

</html>