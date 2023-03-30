<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Analisador de número real</title>
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <?php
            $num = $_POST["numr"] ?? 0;
            $int = (int) $num;
            $real = $num - $int;
            echo "<p>Analisando o número <strong>".number_format($num, 3, ',', '.')."</strong> informado :</p>";
            print "<ul><li>A parte inteira do número é <strong>".number_format($int, 0, ',', '.')."</strong>";
            print "<li>A parte fracionada do número é <strong>".number_format($real, 3, ',', '.')."</strong></ul>"
        ?>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>
