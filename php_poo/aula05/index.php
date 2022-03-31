<html>
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>

</head>
<body>
        <pre>
            <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBnaco();
            $p2 = new ContaBnaco();
            $p1->abrirConta("CC");
            $p1->setNumConta(1111);
            $p1->setDono("André");
            $p2->abrirConta("CP");
            $p2->setNumConta(2222);
            $p2->setDono("Paula");

            $p1->depositar(300);
            $p2->depositar(500);

            print_r($p1);
            print_r($p2);
            ?>
        </pre>
</body>
</html>
