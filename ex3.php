<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ex3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="links">
                <li><strong><a href="index.php"></strong> exercício 1</a></li>
                <li><a href="ex2.php"> exercício 2</a></li>
                <li><a href="ex4.php"> exercício 4</a></li>
            </ul>
        
        </nav>
    </header>

    <form class="form" action="" method="POST">
        Nível atual<input name = "nivelAtual"type="number">
        XP acumulado <input name="xp" type="number">
        <select name="opçao" id="">
            <option value="facil">Fácil</option>
            <option value="medio">Média</option>
            <option value="hard">Difícil</option>
        </select>
        <button type="submit">Calcular</button>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nivelAt= $_POST['nivelAtual'];
            $opcao = $_POST['opçao'];
            $xp = $_POST['xp'];

            $base = 100.0 + $xp;

            if($opcao == "medio"){
                $base = $base * 1.5;
            } elseif ($opcao == "hard"){
                $base = $base * 2.0;
            }

            if($base > 1000){
                echo"PARABÉNS! vôce subiu para o nível ". $nivelAt+1;
            } else{
                echo"seu nivel é  ". $nivelAt;
            }

        } 
        ?>
</body>
</html>