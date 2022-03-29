<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>

    </head>
    <body>
        <?php
            require_once 'caneta.php';

            $c1 = new Caneta("BIC","Azul", 0.5);

            echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"

        ?>

    </body>
</html>
