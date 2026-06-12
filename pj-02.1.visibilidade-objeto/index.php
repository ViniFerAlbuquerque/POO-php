<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Configurando Visibilidade de Atributos e Métodos!</title>
</head>

<body>
    <header>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Dourado";
            // $c1->ponta = 0.5;
            // $c1->carga = 99;
            //$c1->tampada = true;


            // var_dump($c1);

            $c1->rabiscar();
            $c1->tampar();
            print_r($c1);
            ?>
   
        </pre>
    </header>
    <footer><a href="javascript:history.back()">Voltar</a></footer>

</body>

</html>