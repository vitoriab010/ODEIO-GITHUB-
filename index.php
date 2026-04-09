<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="links">
                <li><strong><a href="ex2.php"></strong> exercício 2</a></li>
                <li><a href="ex3.php"> exercício 3</a></li>
                <li><a href="ex4.php"> exercício 4</a></li>
            </ul>
        
        </nav>
    </header>
    

    
     

    <section>
        <form class="form" action="" method="POST">
        Distancia (km)<input class="input" type="number" name = "distancia">
        Peso (kg)<input class="input" type="number" name = "peso">
        Tipo de envio:
        <select class="input" name="opção" id="">
        <option value="normal">Normal</option>
        <option value="expresso">Expresso</option>
        </select>
        <button type="submit">calcular</button>
    </form>
    </section>

    

    <?php 
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $dist = $_POST['distancia'];
        $peso = $_POST['peso'];
        $opção = $_POST['opção'];

        $valorBase = 10.0;
        $resulDistancia = $dist *0.50;

        $resultado = $valorBase + $resulDistancia;

        if ($peso > 20){
            $resultado += 30.0;
        }
        if ($opção == "expresso"){
            $resultado += $resultado* 1.20;
        }

        echo "o resultado é:  ". number_format($resultado,2);


    }
    ?>
</body>
</html>