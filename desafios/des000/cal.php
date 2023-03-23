<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Calculando</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php
            $num = $_GET["num"];
            $ant = $num - 1;
            $suc = $num + 1;
            echo "<p>O numero escolido foi $num</p>";
            echo "<p>O seu antecessor é $ant</p>";
            echo "<p>O seu sucessor é $suc</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>