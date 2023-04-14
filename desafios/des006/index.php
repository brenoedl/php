<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Salarios minimos</title>
</head>
<body>
    <?php
        $salario = $_POST["salario"] ?? 1380;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $salario_minimo = 1380;
        $salarios = intdiv($salario, $salario_minimo);
        $dinheiro_a_mais = $salario % $salario_minimo;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <label for="salario">Salario (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>">
            <p>cosiderando o salario minimo de <strong><?= numfmt_format_currency($padrao, $salario_minimo, "BRL") ?></strong></p>
            <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Quem resebe um salario de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?= $salarios ?> Salarios minimos</strong> + <?= numfmt_format_currency($padrao, $dinheiro_a_mais, "BRL") ?></p>
    </section>
</body>
</html>