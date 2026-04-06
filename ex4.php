<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ex4.css">
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
                <li><a href="ex3.php"> exercício 3</a></li>
            </ul>
        
        </nav>
    </header>

    <form class="form" action="" method="POST">
        Donates totais <input name="donate" type="number">
        Subs totais <input name="subs" type="number">
        <select name="opçao" id="">
            <option value="twitch">Twitch</option>
            <option value="youtube">Youtube</option>
            <button type="submit"> Calcular</button>
        </select>
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $donate = $_POST['donate'];
            $subs = $_POST['subs'];
            $option = $_POST['opçao'];


            if ($option == "twitch"){
                $subs = $subs * 0.5;
            } else {
                $subs = $subs* 0.3;
            }

            $valortotal = $subs + $donates;

            if ($valortotal < 100){
                echo "saldo insuficiente para saque";

            }

        }
    ?>
</body>
</html>