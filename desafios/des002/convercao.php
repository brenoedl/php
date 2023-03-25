<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Converssor de moeda v1.0</title>
</head>
<body>
    <main>
        <h1>Converssor de moeda v1.0</h1>
        <p>
            <?php
                $cotacao = 5.24;
                $real = $_GET["real"];
                $dolar = $real / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus ".numfmt_format_currency($padrao, $real, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>