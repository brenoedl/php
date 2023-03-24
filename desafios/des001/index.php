<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Números aleatorios</title>
</head>
<body>
    <main>
        <h1>Trabalhando com Números aleatorios</h1>
        <?php
            $num = mt_rand(0, 100);
            echo "<p>Gerando um número aleatoro entre <strong>0</strong> e <strong>100</strong> ...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar outro</button>
    </main>
</body>
</html>