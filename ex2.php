<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ex2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="links">
                <li><strong><a href="index.php"></strong> exercício 1</a></li>
                <li><a href="ex3.php"> exercício 3</a></li>
                <li><a href="ex4.php"> exercício 4</a></li>
            </ul>
        
        </nav>
    </header>


    <form class="form" action="" method ="POST">
        Valor da compra <input name= "valor" type="number">
        Código do cupom<input name = "cupom" type="text">
        <button type="submit">Calcular desconto</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $valor = $_POST['valor'];
        $cupom = $_POST['cupom'];

        if ($valor > 500){
            $desconto = $valor * (10/100);
        }
        if ($cupom == "AMIGAO10"){
            $desconto2 = $valor - 10; 
        }
        $resultado = $valor - ($desconto +$desconto2);
        
        echo "Valor inicial: " . $valor . "Descontos: " . $desconto . $desconto2 . "Valor final: " . $resultado;

    }
    ?>

</body>
</html>