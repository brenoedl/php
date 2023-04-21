<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Reajustador de preços</title>
</head>
<body>
    <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $valor = $_GET['val'] ?? 0;
        $porcentagem = $_GET['porc'] ?? 0;
        $aumento = $valor + $valor * $porcentagem / 100;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="val">Preço do produto (R$)</label>
            <input type="number" name="val" id="val" step="0.01" value="<?= $valor ?>">
            <label for="porc">Qual será percentual de reajuste (<strong><output id="iporc"><?= $porcentagem ?></output> %</strong>) </label>
            <input type="range" name="porc" id="porc" value="<?= $porcentagem ?>" oninput="iporc.innerHTML = Number(porc.value)">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custa <?= numfmt_format_currency($padrao, $valor, 'BRL') ?>, com <strong><?= $porcentagem ?>% de aumento</strong> vai passar a custar <strong><?= numfmt_format_currency($padrao, $aumento, 'BRL')?></strong> a partir de agora</p>
    </section>
</body>
</html>