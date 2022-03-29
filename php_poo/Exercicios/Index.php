<html>
<head>
    <meta charset="UTF-8">
    <title>Exercicio 02</title>

</head>
<body>

    <?php
    require_once "Celular.php";

    $funcao = new Celular();

    $funcao->marca = "Xiaomi";
    $funcao->modelo = "Mi 11 Lite";
    $funcao->cor = "Space Gray";
    $funcao->processador = "Snapdragon 788G";
    $funcao->estado=true;
    $funcao->verificacao();

    ?>


</body>
</html>

