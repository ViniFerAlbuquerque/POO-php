<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Métodos getter setter costrutor!</title>
</head>
<body>
    <pre>
        <?php
            require_once 'caneta.php';
            $c1 = new Caneta ("BIC", "Azul", 0.5);
            $c2 = new Caneta ("PILOT", "Preta", 0.7);
            $c3 = new Caneta ("Kilometrica", "Verde", 1.0);

            print_r($c1);
            print_r($c2);
            print_r($c3);

            // echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        ?>
    </pre>

    <footer><a href="javascript:history.back()">Voltar</a></footer>
</body>
</html>